<?php

namespace App\Http\Controllers;

use App\Models\AttachmentPlace;
use App\Models\Student;
use App\Models\TrainingInstitution;
use App\Models\WeeklyLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Inertia\Inertia;


class StudentController extends Controller
{
    public function index(): \Inertia\Response
    {
        $user_id = Auth::id();
//        dd($user_id);
        $hasFilledDocs = false;
        $approved = false;
        $student = Student::where('user_id', $user_id)->first();
        if (is_null($student)) {
            $hasFilledDocs = false;
            $approved = false;
            $thisWeeklog = 0;
            $student = [];
        } else {
            $attach = AttachmentPlace::where('student_id', $student->student_id)->first();
            $thisWeeklog = WeeklyLog::where('student_id', $student->student_id)->max('week_number');
            $training = TrainingInstitution::where('student_id', $student->student_id)->first();
            if ($student->approved_director === 1) {
                $approved = true;
                if (is_null($training) || is_null($attach)) {
                    $hasFilledDocs = false;
                } else {
                    $hasFilledDocs = true;
                }
            }


        }
        return Inertia::render('student/index', [
            'student' => $student,
            'hasFilledDocs' => $hasFilledDocs,
            'approved' => $approved,
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

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        // Validate the request data
        $validatedData = $request->validate([
            'admin_no' => 'required|alpha_num|unique:students,admin_no',
            'gender' => 'required|in:Male,Female,other',
            'id_no' => 'required|numeric|unique:students,id_no',
            'dob' => 'required|date|before:today',
            'course' => 'required|string|max:255',
            'level' => 'required|string|min:1',
            'year' => 'required|integer|min:1',
            'home_address' => 'required|string|max:255',
            'tel_no' => 'required|numeric|digits_between:10,15',
            'next_of_kin_name' => 'required|string|max:255',
            'next_of_kin_relationship' => 'required|string|max:255',
            'next_of_kin_address' => 'required|string|max:255',
            'next_of_kin_tel' => 'required|numeric|digits_between:10,15',
        ]);

        // Proceed with the rest of your logic if validation passes
        //
        $student = Student::create(array_merge(['user_id' => Auth::id()], ['progress_level' => 5], $validatedData));

        return redirect()->back()->with('success', 'Student information has been successfully saved.');
    }


    public function assess(): \Inertia\Response
    {
        $user_id = Auth::id();

        $student = Student::where('user_id', $user_id)->first();
        return Inertia::render('student/assessment', [
            'student' => $student
        ]);
    }

    public function upload(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'recommendation_letter' => ['required', File::types(['pdf', 'doc', 'docx'])->min('1kb')->max('10mb')],
            'final_report' => ['required', File::types(['pdf', 'doc', 'docx'])->min('1kb')->max('10mb')],
        ]);


    }

}
