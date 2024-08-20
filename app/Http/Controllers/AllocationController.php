<?php

namespace App\Http\Controllers;

use App\Mail\NewAllocationNotification;
use App\Mail\ReallocationNotification;
use App\Mail\StudentAllocationNotification;
use App\Models\Assessment;
use App\Models\Lecturer;
use App\Models\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AllocationController extends Controller
{
    public function allocate(Request $request)
    {
        $student = Student::findOrFail($request->student_id);
        $newLecturer = Lecturer::findOrFail($request->lecturer_id);

        // Check if the student was previously allocated
        $oldAssessment = Assessment::where(['student_id' => $student->student_id])->first();
//        $oldLecturer = $oldAssessment->load('lecturers');
//        $oldLecturer = $oldAssessment ? $oldLecturer->lecturer : null;

        // Update student's allocation status
        $student->update(['allocated_supervisor' => true]);
        // Create or update the assessment
        if ($oldAssessment) {
            Mail::to($oldAssessment->lecturers->user->email)->send(new ReallocationNotification($student, $newLecturer, $oldAssessment->lecturers));

            $oldAssessment->update(['lecturer_id' => $newLecturer->lecturer_id]);
            // Notify new lecturer
//            Mail::to($newLecturer->user->email)->send(new ReallocationNotification($student, $newLecturer, $oldAssessment->lecturers));
            Mail::to($newLecturer->user->email)->send(new NewAllocationNotification($student, $newLecturer));
            $oldLecturer = $oldAssessment->lecturers;
            Mail::to($student->user->email)->send(new StudentAllocationNotification($student, $newLecturer, $oldLecturer));

// Notify old lecturer

// Notify student
        } else {
            Assessment::create([
                'student_id' => $student->student_id,
                'lecturer_id' => $newLecturer->lecturer_id,
            ]);
            // Notify lecturer
            Mail::to($newLecturer->user->email)->send(new NewAllocationNotification($student, $newLecturer));
            Mail::to($student->user->email)->send(new StudentAllocationNotification($student, $newLecturer));
// Notify student
        }

// Send emails
//        $this->sendEmails($student, $newLecturer, $oldLecturer);
        return redirect()->back()->with('success', 'Success! Supervisor allocated to the student.');
    }

    public function reallocate($student_id): JsonResponse
    {

        // Get all lecturers with the count of students assigned to each
        $lecturers = Lecturer::withCount(['assessments as student_count'])->get();
//        $students = Student::find(['student_id' => $student_id])->first();
        $assessments = Assessment::where(['student_id' => $student_id])->first();
        return response()->json([
            'lecturers' => $lecturers->load('user'),
//            'students' => $students->load('user', 'trainingInstitution', 'attachment'),
            'assessments' => $assessments->load('students.user', 'students.trainingInstitution', 'students.attachment', 'lecturers.user')
        ]);
    }

}
