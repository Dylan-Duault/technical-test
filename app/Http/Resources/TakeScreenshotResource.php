<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TakeScreenshotResource extends JsonResource
{

    public static $wrap = null;

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'image_url' => $this->getImageUrl($this->md5),
        ];
    }

    private function getImageUrl(string $md5): string
    {
        return url('saved-screenshots/' . $md5 . '.png');
    }
}
