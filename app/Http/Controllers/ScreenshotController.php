<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScreenshotController extends Controller
{
    public function takeScreenshot(Request $request)
    {
        $url = $request->input('url');
        $filename = md5($url) . '.png';
        $path = public_path('screenshots/' . $filename);
        $apikey = env('API_FLASH_KEY');
        $command = "../screenshot.sh $url $path $apikey";
        exec($command);

        // Display image
        return response()->file($path);
    }
}
