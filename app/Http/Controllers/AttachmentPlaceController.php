<?php

namespace App\Http\Controllers;

use App\Models\AttachmentPlace;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttachmentPlaceController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'organization_name' => 'required|string|max:255',
            'physical_address' => 'required|string|max:255',
            'postal_address' => 'required|string|max:255',
            'tel_no' => 'required|numeric|digits_between:10,15',
            'head_tel' => 'required|numeric|digits_between:10,15',
            'organization_email' => 'required|email|max:255',
            'department_name' => 'required|string|max:255',
            'head_name' => 'required|string|max:255',
            'supervisor_name' => 'required|string|max:255',
            'supervisor_tel' => 'required|numeric|digits_between:10,15',
            'designation' => 'required|string|max:255',
            'signature' => 'required|string|max:255',
        ]);


        $student = Student::where(['user_id' => Auth::id()])->first();


        $organization = AttachmentPlace::create(array_merge(['student_id' => $student->student_id], $validatedData));
        $student->progress_level = $student->progress_level + 5;
        $student->save();
        return redirect()->back()->with('success', 'Organization details have been successfully saved.');
    }

}
