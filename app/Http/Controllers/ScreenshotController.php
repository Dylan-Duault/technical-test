<?php

namespace App\Http\Controllers;

use App\Http\Resources\TakeScreenshotResource;
use App\Models\Screenshot;
use Illuminate\Http\Request;

class ScreenshotController extends Controller
{

    /**
     *
     * Website main functionality, take a screenshot of a given URL and return the image URL
     *
     * @param  Request  $request
     * @return TakeScreenshotResource
     */
    public function takeScreenshot(Request $request)
    {
        $url = $request->input('url');
        $md5 = md5($url);
        $filename = $md5 . '.png';
        $path = public_path('screenshots/' . $filename);
        $apikey = env('API_FLASH_KEY');
        $command = "../screenshot.sh $url $path $apikey";
        exec($command);

        $screenshot = Screenshot::create([
            'md5' => $md5,
            'ip' => $request->ip(),
        ]);

        return new TakeScreenshotResource($screenshot);
    }
}
