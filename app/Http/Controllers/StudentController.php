<?php

namespace App\Http\Controllers;

use App\Models\AttachmentPlace;
use App\Models\Student;
use App\Models\TrainingInstitution;
use App\Models\WeeklyLog;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class StudentController extends Controller
{
    public function index(): \Inertia\Response
    {
        $user_id = Auth::id();
//        dd($user_id);
        $hasFilledDocs = false;
        $student = Student::where('user_id', $user_id)->first();
        if (is_null($student)) {
            $hasFilledDocs = false;
            $thisWeeklog = 0;
            $student = [];
        } else {
            $attach = AttachmentPlace::where('student_id', $student->student_id)->first();
            $thisWeeklog = WeeklyLog::where('student_id', $student->student_id)->max('week_number');
            $training = TrainingInstitution::where('student_id', $student->student_id)->first();
            if (is_null($training) || is_null($attach) || is_null($student)) {
                $hasFilledDocs = false;
            } else {
                $hasFilledDocs = true;
            }
        }
        return Inertia::render('student/index', [
            'student' => $student,
            'hasFilledDocs' => $hasFilledDocs,
            'weekLog' => $thisWeeklog,
        ]);
    }

    public function markReadiness(): \Illuminate\Http\RedirectResponse
    {
        $user_id = Auth::id();

        $student = Student::where('user_id', $user_id)->first();


        // Update the is_ready_for_assessment state
        $student->is_ready_for_assessment = true;
        $student->save();

        // Return a response (Inertia will handle the frontend update)
        return redirect()->back()->with('success', 'Readiness for assessment marked successfully.');
    }


    public function assess(): \Inertia\Response
    {
        return Inertia::render('student/assessment');
    }

}
