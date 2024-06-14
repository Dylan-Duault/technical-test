<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ScreenshotController;

Route::get('/', function () {
    return view('homepage');
});

Route::post('/screenshot', [ScreenshotController::class, 'takeScreenshot'])->name('screenshot');
