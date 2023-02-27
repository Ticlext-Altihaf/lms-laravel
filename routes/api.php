<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware(['auth'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/", function () {
    return ['Laravel' => \Illuminate\Support\Facades\App::version()];
});
Route::get('/lang', function () {
    return response()->json(['message' => __('controller.success.get', ['data' => 'Locale']), 'data' => config('app.locales')], 200);
});
//get all translation
Route::get('/lang/{locale}', function (Request $request, string $locale) {
    $locales = config('app.locales');
    if (!isset($locale, $locales)) {
        if ($request->expectsJson()) return response()->json(['message' => __('controller.error.not_found', ['data' => 'Locale']), 'data' => $locale], 404);
        return redirect()->back();
    }

    $dictionary = [];
    $cache = \Illuminate\Support\Facades\Cache::get('locale.' . $locale);
    if ($cache) {
        $dictionary = $cache;
    } else {
        $files = \Illuminate\Support\Facades\File::allFiles(base_path('lang' . DIRECTORY_SEPARATOR . $locale));
        foreach ($files as $file) {
            $key = str_replace('.php', '', $file->getFilename());
            $dictionary[$key] = require $file->getPathname();
        }
        \Illuminate\Support\Facades\Cache::put('locale.' . $locale, $dictionary);
    }
    return response()->json(['message' => __('controller.success.get', ['data' => 'Locale']), 'data' => $dictionary], 200);
});
//i18next
Route::get('/lang/{locale}/{ns}.json', function (Request $request, string $locale, string $ns) {
    $locales = config('app.locales');
    if (!isset($locale, $locales)) {
        if ($request->expectsJson()) return response()->json(['message' => __('controller.error.not_found', ['data' => 'Locale']), 'data' => $locale], 404);
        return redirect()->back();
    }

    $dictionary = [];
    $cache = \Illuminate\Support\Facades\Cache::get('locale.' . $locale);
    if ($cache) {
        $dictionary = $cache;
    } else {
        $files = \Illuminate\Support\Facades\File::allFiles(base_path('lang' . DIRECTORY_SEPARATOR . $locale));
        foreach ($files as $file) {
            $key = str_replace('.php', '', $file->getFilename());
            $dictionary[$key] = require $file->getPathname();
        }
        \Illuminate\Support\Facades\Cache::put('locale.' . $locale, $dictionary);
    }
    if (!isset($dictionary[$ns])) return response()->json(['message' => __('controller.error.not_found', ['data' => 'Locale']), 'data' => $ns], 404);
    return response()->json($dictionary[$ns], 200);
});
require __DIR__ . '/auth.php';
require __DIR__ . '/resource.php';
