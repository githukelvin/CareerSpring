<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\Lecturer;
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
        return Inertia::render('supervisor/index', [
            'CC' => $studentCount
        ]);
    }


//    2. get  details  about  assessment and attachment  to  update

//3.function  to  mark assessment  as  done


//4. student details || attachment details save  notes  and  set  status  to pending  or  complete
//save notes  set status  to  completed

//5.get  attachement  details and  save  comments  and perfomance from  lecturer  from a particular student
}
