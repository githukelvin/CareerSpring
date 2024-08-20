<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\Attachment;
use App\Models\Lecturer;
use App\Models\Student;
use Inertia\Inertia;

class CoordinatorController extends Controller
{

//    1. function  to  get  all supervisors
    public function getAllSupervisors()
    {
        $lecturers = Lecturer::all();
        $students = Student::where([
            ['is_ready_for_assessment', '=', 1],
            ['allocated_supervisor', '=', 0]
        ])->get();
        $assessments = Assessment::all();
        return Inertia::render('coordinator/Allocation', [
            'lecturers' => $lecturers->load('user'),
            'students' => $students->load('user', 'trainingInstitution', 'attachment'),
            'assessments' => $assessments->load('students.user', 'students.trainingInstitution', 'students.attachment', 'lecturers.user')
        ]);


    }

//2. function to get  allocate  supervisor
//Student name	Department	Supervisor name	Start Date	End Date	Select Supervisor


//3. function  get students  and allocated  supervisor  and  details of  attachment
//Student name	Department	Supervisor name	Start Date	End Date

//4.function  to allocate  and  reallocate  supervisor


    public function index()
    {
        $assessments = Assessment::all();
        $attachmenton = Attachment::all()->count();
        $studentpendingallocation = Student::where([
            ['is_ready_for_assessment', '=', 1],
            ['allocated_supervisor', '=', 0]
        ])->count();
//        progress_level
        $studentCompleted = Student::where([
            ['progress_level', '=', 100],
        ])->count();
        return Inertia::render('coordinator/index', [

            'StudentsCompleted' => $studentCompleted,
            'PendingAllocation' => $studentpendingallocation,
            'OnAttachment' => $attachmenton,
            'assessments' => $assessments->load('students.user', 'lecturers.user')

        ]);
    }

    public function analytics()
    {
        $monthlyCounts = Attachment::countByMonth();
        // Step 1: Get the count of students who have filled in their attachment details
        $studentsWithAttachments = Attachment::distinct('student_id')->count('student_id');

// Step 2: Get the total count of students
        $totalStudents = Student::count();

// Step 3: Calculate the number of students who have not filled in attachment details
        $studentsWithoutAttachments = $totalStudents - $studentsWithAttachments;

        return Inertia::render('coordinator/Analytics', [
            'monthlyCounts' => $monthlyCounts,
            'studentsWithAttachments' => $studentsWithAttachments,
            'studentsWithoutAttachments' => $studentsWithoutAttachments,
        ]);
    }
}
