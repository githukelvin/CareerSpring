<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\TrainingInstitution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainingInstitutionController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'faculty_dean_name' => 'required|string|max:255',
            'faculty_name' => 'required|string|max:255',
            'contact_address' => 'required|string|max:255',
            'tel_no' => 'required|numeric|digits_between:10,15',
            'school_name' => 'required|string|max:255',
            'director_name' => 'required|string|max:255',
            'director_email' => 'required|email|max:255',
            'department_name' => 'required|string|max:255',
            'chairperson_name' => 'required|string|max:255',
            'chairperson_tel' => 'required|numeric|digits_between:10,15',
        ]);

        $student = Student::where(['user_id' => Auth::id()])->first();
        $faculty = TrainingInstitution::create(array_merge(['student_id' => $student->student_id], $validatedData));
        $student->progress_level = $student->progress_level + 5;
        $student->save();
        return redirect()->back()->with('success', 'Faculty information has been successfully saved.');
    }

}
