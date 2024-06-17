<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ScreenshotController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/screenshots/', [ScreenshotController::class, 'index'])->name('screenshot.index');
Route::get('/screenshots/{md5}', [ScreenshotController::class, 'show'])->name('screenshot.show');
Route::post('/screenshots/take', [ScreenshotController::class, 'takeScreenshot'])->name('screenshot.take');
