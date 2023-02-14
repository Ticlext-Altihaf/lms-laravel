<?php


use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Http\Controllers\CsrfCookieController;

Route::resource('courses', \App\Http\Controllers\CoursesController::class);
Route::resource('lessons', \App\Http\Controllers\LessonsController::class);
Route::resource('quizzes', \App\Http\Controllers\QuizzesController::class);
Route::resource('categories', \App\Http\Controllers\CategoriesController::class);
Route::resource('contents', \App\Http\Controllers\ContentsController::class);
Route::get('/sanctum/csrf-cookie', [CsrfCookieController::class, 'show']);
