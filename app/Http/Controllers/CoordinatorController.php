<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use Inertia\Inertia;

class CoordinatorController extends Controller
{

//    1. function  to  get  all supervisors

//2. function to get  allocate  supervisor
//Student name	Department	Supervisor name	Start Date	End Date	Select Supervisor

//3. function  get students  and allocated  supervisor  and  details of  attachment
//Student name	Department	Supervisor name	Start Date	End Date

//4.function  to allocate  and  reallocate  supervisor


    public function index()
    {
        $monthlyCounts = Attachment::countByMonth();
        return Inertia::render('coordinator/index', [
            'monthlyCounts' => $monthlyCounts
        ]);
    }
}
