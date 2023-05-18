<?php


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::resource('courses', \App\Http\Controllers\CoursesController::class);
Route::resource('lessons', \App\Http\Controllers\LessonsController::class);
Route::resource('quizzes', \App\Http\Controllers\QuizzesController::class);
Route::resource('categories', \App\Http\Controllers\CategoriesController::class);
Route::resource('contents', \App\Http\Controllers\ContentsController::class);
Route::resource('users', \App\Http\Controllers\UsersController::class);
Route::get('users.profile', [\App\Http\Controllers\UsersController::class, 'profile'])->name('users.profile');
Route::get('/locale/{locale}', function (string $locale, \Illuminate\Http\Request $request) {
    $locales = ['en', 'id'];
    if (!in_array($locale, $locales)) {
        if ($request->expectsJson()) return response()->json(['message' => 'Locale not found', 'data' => $locale], 404);
        return redirect()->back();
    }

    App::setLocale($locale);
    $request->session()->put('locale', $locale);
    if ($request->expectsJson()) return response()->json(['message' => 'Locale changed', 'data' => $locale], 200);
    return redirect()->back();
});
