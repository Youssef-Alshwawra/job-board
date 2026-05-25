<?php

use App\Http\Controllers\IndexControlelr;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/job', [JobController::class, 'index'])->name('job.index');

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [IndexController::class, 'about']);
Route::get('/contact', [IndexController::class, 'contact']);
Route::get('/blog', [PostController::class, 'createFakeData']);