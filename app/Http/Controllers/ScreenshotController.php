<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScreenshotController extends Controller
{
    public function takeScreenshot(Request $request)
    {
        return [
            'image_url' => 'http://127.0.0.1:8000/screenshots/0edf27c83d4aa4699c0625d27be0e371.png'
        ];

        $url = $request->input('url');
        $filename = md5($url) . '.png';
        $path = public_path('screenshots/' . $filename);
        $apikey = env('API_FLASH_KEY');
        $command = "../screenshot.sh $url $path $apikey";
        exec($command);

        // Return image url
        return [
            'url' => $this->getImageUrl($filename)
        ];
    }

    private function getImageUrl($filename)
    {
        return url('screenshots/' . $filename);
    }
}
