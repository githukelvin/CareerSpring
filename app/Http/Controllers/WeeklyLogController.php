<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\WeeklyLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class WeeklyLogController extends Controller
{
    public function store(Request $request)
    {
        $weekLog = $request->validate([
            'week_number' => 'required|integer|min:1|max:12',
            'date_from' => 'required|date',
            'date_to' => 'required|date|after_or_equal:date_from',
            'monday' => 'nullable|string|max:1000',
            'tuesday' => 'nullable|string|max:1000',
            'wednesday' => 'nullable|string|max:1000',
            'thursday' => 'nullable|string|max:1000',
            'friday' => 'nullable|string|max:1000',
            'student_remarks' => 'nullable|string|max:1000',
            'supervisor_name' => 'required|string|max:255',
            'supervisor_remarks' => 'nullable|string|max:1000',
        ]);
        $id = Auth::user()->id;
        $student = Student::where('user_id', $id)->first();
        $student_id = $student->student_id;
        $data = array_merge(['student_id' => $student_id], $weekLog);
        WeeklyLog::create($data);
        $student->progress_level = $student->progress_level + 5;
        $student->save();
        return redirect()->route('student.index')->with('success', 'Week Log submitted successfully');
    }

    public function create()
    {
        return Inertia::render('student/logging');
    }
}
