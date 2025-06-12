<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectDetailController;
use App\Models\Project;

Route::get('/', function () {
    $projects = Project::latest()->get();
    return view('home', compact('projects'));
});

Route::get('/projectdata', function () {
    $projects = Project::latest()->get();
    return view('project', compact('projects'));
});



Route::get('/edit', function () {
    return view('edit');
});

Route::get('/createproject', [ProjectController::class, 'create']);
Route::post('/createproject', [ProjectController::class, 'store']);
Route::delete('/project/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');

// CRUD untuk cashflow/detail per project
Route::get('/project/{project}/details', [ProjectDetailController::class, 'index'])->name('projectdetail.index');
Route::get('/project/{project}/details/create', [ProjectDetailController::class, 'create'])->name('projectdetail.create');
Route::post('/project/{project}/details', [ProjectDetailController::class, 'store'])->name('projectdetail.store');
Route::get('/projectdetail/{detail}/edit', [ProjectDetailController::class, 'edit'])->name('projectdetail.edit');
Route::put('/projectdetail/{detail}', [ProjectDetailController::class, 'update'])->name('projectdetail.update');
Route::delete('/projectdetail/{detail}', [ProjectDetailController::class, 'destroy'])->name('projectdetail.destroy');

// Route untuk halaman home
Route::get('/home', function () {
    return view('home');
});

// Route untuk halaman tentang pengembang
Route::get('/tentangkami', function () {
    return view('tentangkami');
});

Route::get('/addcashflow', function () {
    return view('addcashflow');
});

