<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

//start of coordinator routes
Route::get('/coordinator', function () {
    return Inertia::render('coordinator/index');
});

Route::get('/coordinator/analytics', function () {
    return Inertia::render('coordinator/Analytics');
});
Route::get('/coordinator/allocation', function () {
    return Inertia::render('coordinator/Allocation');
});
Route::get('/coordinator/settings', function () {
    return Inertia::render('coordinator/settings');
});


//start  student  routes
Route::get('/student', function () {
    return Inertia::render('student/index');
});
Route::get('/student/attachment', function () {
    return Inertia::render('student/AttachmentDetails');
});
Route::get('/student/logging', function () {
    return Inertia::render('student/logging');
});
Route::get('/student/assess', function () {
    return Inertia::render('student/assessment');
});
Route::get('/student/documents', function () {
    return Inertia::render('student/documents');
});
//end  student  routes
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
