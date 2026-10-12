<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/Admin/about', [AboutController::class, 'index']);

Route::get('/Admin/dashboard', [DashboardController::class, 'index']);
Route::get('/Admin/student', [StudentController::class, 'index']);
