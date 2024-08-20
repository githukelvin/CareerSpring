<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\Lecturer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class LecturerController extends Controller
{
    // 1. get  all  students  alloceted  to him or her
    public function index()
    {
        $user_id = Auth::id();
        $lecturerId = Lecturer::where(['user_id' => $user_id])->first()->lecturer_id;
        $studentCount = Assessment::where('lecturer_id', $lecturerId)->count();
//        ['Pending', 'Not Accessed', 'Completed',]
        $statuses = ['Pending', 'Not Accessed', 'Completed'];

        $pendingTasks = Assessment::where('lecturer_id', $lecturerId)
            ->whereIn('assessment_status', $statuses)
            ->get();

        $assesmentcount = Assessment::where('lecturer_id', $lecturerId)
            ->where('assessment_status', 'Completed')
            ->count();
        $pendingTaskscount = $pendingTasks = Assessment::where('lecturer_id', $lecturerId)
            ->whereIn('assessment_status', ['Pending', 'Not Accessed'])
            ->count();

        return Inertia::render('supervisor/index', [
            'studentCount' => $studentCount,
            'pendingTasks' => $pendingTasks,
            'assesmentcount' => $assesmentcount,
            'pendingTaskscount' => $pendingTaskscount,
        ]);
    }


    public function allocated()
    {
        $user_id = Auth::id();
        $lecturerId = Lecturer::where(['user_id' => $user_id])->first()->lecturer_id;
        $assessments = Assessment::where('lecturer_id', $lecturerId)->get();
        return Inertia::render('supervisor/AllocatedStudents', [
            'assessments' => $assessments->load('students.user', 'students.attachment', 'students.trainingInstitution', 'lecturers.user')
        ]);
    }

    public function viewDetails($id)
    {
        $user_id = Auth::id();
        $lecturerId = Lecturer::where(['user_id' => $user_id])->first()->lecturer_id;
        $assessment = Assessment::where([
            ['lecturer_id', $lecturerId],
            ['student_id', $id],
        ])->get();

        return response()->json([
            'assessment' => $assessment->load('students.user', 'students.attachment', 'students.trainingInstitution', 'lecturers.user')

        ]);
    }

    public function markComplete($id)
    {
        $user_id = Auth::id();
        $lecturerId = Lecturer::where(['user_id' => $user_id])->first()->lecturer_id;
        $assessment = Assessment::where([
            ['lecturer_id', $lecturerId],
            ['student_id', $id],
        ])->first();

//        return response()->json($assessment['assessment_status']);
        if ($assessment->assessment_status === 'Completed') {
            return response()->json([
                'message' => 'Assessment is Already completed'
            ]);
        } else {
            if (!is_null($assessment->feedback) && !is_null($assessment->performance)) {
                $assessment->assessment_status = 'Completed';
                $assessment->save();
                return response()->json([
                    'message' => 'Assessment status is set  to Completed'
                ]);
            } elseif (is_null($assessment->feedback) || is_null($assessment->performance)) {
                $assessment->assessment_status = 'Pending';
                $assessment->save();
                return response()->json([
                    'message' => 'Assessment status is set  to Pending  due to unfilled data'
                ]);
            }
        }
    }


//    2. get  details  about  assessment and attachment  to  update

    public function pendingTasks()
    {
        $user_id = Auth::id();
        $lecturerId = Lecturer::where(['user_id' => $user_id])->first()->lecturer_id;
        $pendingTasks = Assessment::where('lecturer_id', $lecturerId)
            ->whereIn('assessment_status', ['Pending', 'Not Accessed'])
            ->get();
        return Inertia::render('supervisor/PendingTasks', [
            'pendingTasks' => $pendingTasks->load('students.user', 'students.attachment', 'students.trainingInstitution', 'lecturers.user')
        ]);
    }

//3.function  to  mark assessment  as  done


//4. student details || attachment details save  notes  and  set  status  to pending  or  complete
//save notes  set status  to  completed
    public function updateAttachment(Request $request, $id)
    {
        $user_id = Auth::id();
        $lecturerId = Lecturer::where('user_id', $user_id)->first()->lecturer_id;

        // Find the specific assessment by both student_id and assessment_id
        $assessment = Assessment::where('id', $request->assessment_id)->first();

        if (!$assessment) {
            return response()->json(['message' => 'Assessment not found'], 404);
        }

        // Update the specific assessment
        $assessment->update([
            'feedback' => $request->feedback,
            'performance' => $request->performance,
            'day_assessed' => Carbon::today(),
        ]);

        // Check if status should be set to 'Completed'
        if (!is_null($assessment->feedback) && !is_null($assessment->performance)) {
            $assessment->assessment_status = 'Completed';
            $assessment->save();
        }

        return response()->json([
            'message' => 'Assessment updated successfully',
            'assessment' => $assessment
        ]);
    }
//5.get  attachement  details and  save  comments  and perfomance from  lecturer  from a particular student
}
