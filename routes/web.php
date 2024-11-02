<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
Route::get('/', [AdminDashboardController::class, 'index'])->name('admin');
Route::resource('tasks', TaskController::class)->middleware('auth');
require __DIR__.'/auth.php';
