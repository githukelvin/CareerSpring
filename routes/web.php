<?php

use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\WeeklyLogController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});


//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'verified')->group(function () {

//start  student  routes
    Route::get('/student', [StudentController::class, 'index'])->name('student');
    Route::get('student/attachment', [AttachmentController::class, 'create'])->name('student/attachment');
    Route::post('student/attachment', [AttachmentController::class, 'store']);
    Route::get('student/logging', [WeeklyLogController::class, 'create'])->name('student/logging');
    Route::post('student/logging', [WeeklyLogController::class, 'store']);
    Route::get('student/assess', [StudentController::class, 'assess'])->name('student/assess');
    Route::post('student/assess', [StudentController::class, 'markReadiness']);
    Route::get('/student/documents', function () {
        return Inertia::render('student/documents');
    });

//end  student  routes
    //star  routes of supervisor
    Route::get('/supervisor', function () {
        return Inertia::render('supervisor/index');
    })->name('supervisor');
    Route::get('/supervisor/allocatedStudents', function () {
        return Inertia::render('supervisor/AllocatedStudents');
    });
    Route::get('/supervisor/assessmentVisits', function () {
        return Inertia::render('supervisor/AssessmentVisits');
    });
    Route::get('/supervisor/pendingTasks', function () {
        return Inertia::render('supervisor/PendingTasks');
    });
//end of routes  supervisor

//Routes  Director
    Route::get('/director', function () {
        return Inertia::render('director/index');
    })->name('director');
    Route::get('/director/approval', function () {
        return Inertia::render('director/Approval');
    });
    Route::get('/director/students', function () {
        return Inertia::render('director/StudentManagement');
    });
//end  rule  director

//start of coordinator routes
    Route::get('/coordinator', function () {
        return Inertia::render('coordinator/index');
    })->name('coordinator');

    Route::get('/coordinator/analytics', function () {
        return Inertia::render('coordinator/Analytics');
    });
    Route::get('/coordinator/allocation', function () {
        return Inertia::render('coordinator/Allocation');
    });
    Route::get('/coordinator/settings', function () {
        return Inertia::render('coordinator/settings');
    });

});

// route  logout
Route::get('/signout', function () {
    return Inertia::render('signout');
});
// end  route  logout

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
