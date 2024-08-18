<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AttachmentController extends Controller
{
    public function store(Request $request)
    {
        $datar = $request->validate([
            'full_name' => 'required|string|max:255',
            'registration_number' => 'required|string|max:50|unique:attachments,registration_number',
            'school_email' => 'required|string|email|max:255|unique:attachments,school_email',
            'phone_number' => 'required|string|max:20',
            'course' => 'required|string|max:100',
            'year_of_study' => 'required|integer|min:1|max:10',
            'company_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'attachment_position' => 'required|string|max:100',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $id = Auth::user()->id;
        $student = Student::where('user_id', $id)->first();
        $student_id = $student->student_id;
        $data = array_merge(['student_id' => $student_id], $datar);
        Attachment::create($data);
        $student->progress_level = $student->progress_level + 10;
        $student->save();
        return redirect()->route('student.index')->with('success', 'Form submitted successfully');

    }

    public function create()
    {
        return Inertia::render('student/AttachmentDetails');
    }
}
