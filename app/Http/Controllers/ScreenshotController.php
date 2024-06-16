<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScreenshotController extends Controller
{

    /**
     *
     * Website main functionality, take a screenshot of a given URL and return the image URL
     *
     * @param  Request  $request
     * @return array
     */
    public function takeScreenshot(Request $request)
    {
        $url = $request->input('url');
        $filename = md5($url) . '.png';
        $path = public_path('screenshots/' . $filename);
        $apikey = env('API_FLASH_KEY');
        $command = "../screenshot.sh $url $path $apikey";
        exec($command);

        return [
            'url' => $this->getImageUrl($filename)
        ];
    }

    private function getImageUrl($filename)
    {
        return url('screenshots/' . $filename);
    }
}
