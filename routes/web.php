<?php

use App\Http\Controllers\AllocationController;
use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\AttachmentPlaceController;
use App\Http\Controllers\CoordinatorController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrainingInstitutionController;
use App\Http\Controllers\WeeklyLogController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});


Route::middleware(['auth', 'verified'])->group(function () {
    // Student Routes
    Route::prefix('student')->name('student.')->group(function () {
        Route::get('/', [StudentController::class, 'index'])->name('index');
        Route::post('/personal', [StudentController::class, 'store'])->name('store');
        Route::post('/training', [TrainingInstitutionController::class, 'store'])->name('training');
        Route::post('/attachmentplace', [AttachmentPlaceController::class, 'store'])->name('attachment_place');
        Route::get('/attachment', [AttachmentController::class, 'create'])->name('attachment.create');
        Route::post('/attachment', [AttachmentController::class, 'store'])->name('attachment.store');
        Route::get('/logging', [WeeklyLogController::class, 'create'])->name('logging.create');
        Route::post('/logging', [WeeklyLogController::class, 'store'])->name('logging.store');
        Route::get('/assess', [StudentController::class, 'assess'])->name('assess');
        Route::post('/assess', [StudentController::class, 'markReadiness'])->name('assess.mark');
        Route::get('/documents', fn() => Inertia::render('student/documents'))->name('documents');
        Route::post('/documents/upload', [StudentController::class, 'upload'])->name('documents.upload');
    });

    // Supervisor Routes
    Route::prefix('supervisor')->name('supervisor.')->group(function () {
        Route::get('/', [LecturerController::class, 'index'])->name('index');
        Route::get('/allocatedStudents', fn() => Inertia::render('supervisor/AllocatedStudents'))->name('allocatedStudents');
        Route::get('/assessmentVisits', fn() => Inertia::render('supervisor/AssessmentVisits'))->name('assessmentVisits');
        Route::get('/pendingTasks', fn() => Inertia::render('supervisor/PendingTasks'))->name('pendingTasks');
    });

    // Director Routes
    Route::prefix('director')->name('director.')->group(function () {
        Route::get('/', fn() => Inertia::render('director/index'))->name('index');
        Route::get('/approval', fn() => Inertia::render('director/Approval'))->name('approval');
        Route::get('/students', fn() => Inertia::render('director/StudentManagement'))->name('students');
    });

    // Coordinator Routes
    Route::prefix('coordinator')->name('coordinator.')->group(function () {
        Route::get('/', [CoordinatorController::class, 'index'])->name('index');
        Route::post('/allocate', [AllocationController::class, 'allocate'])->name('allocate');
        Route::get('/reallocate/{id}', [AllocationController::class, 'reallocate'])->name('reallocate');
        Route::get('/analytics', [CoordinatorController::class, 'analytics'])->name('analytics');
        Route::get('/allocation', [CoordinatorController::class, 'getAllSupervisors'])->name('allocation');
        Route::get('/settings', fn() => Inertia::render('coordinator/Settings'))->name('settings');
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
