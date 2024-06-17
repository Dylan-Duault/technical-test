<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ScreenshotController;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/screenshots/', [ScreenshotController::class, 'index'])->name('screenshot.index');
Route::post('/screenshots/take', [ScreenshotController::class, 'takeScreenshot'])->name('screenshot.take');
