<?php

use App\Http\Controllers\LessonController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\CategoryController;



Route::get('/', [DashboardController::class,'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'Dashboard'])->name('dashboard');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/lessons', LessonController::class);
    Route::resource('/roles', RolesController::class);
});
