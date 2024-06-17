<?php

namespace Tests\Feature;

use App\Http\Controllers\ScreenshotController;
use App\Http\Resources\TakeScreenshotResource;
use App\Models\Screenshot;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ScreenshotTest extends TestCase
{
    use RefreshDatabase;

    protected string $websiteUrl;

    public function setUp(): void
    {
        parent::setUp();
        $this->websiteUrl = 'https://www.google.com';
    }

    public function test_homepage_works(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_screenshot_history_page_works(): void
    {
        $response = $this->get('screenshots/');
        $response->assertStatus(200);
    }

    public function test_new_screenshots_are_displayed_in_screenshot_history() : void
    {
        Screenshot::create([
            'md5' => md5($this->websiteUrl),
            'url' => $this->websiteUrl,
            'ip' => '127.0.0.1'
        ]);

        $response = $this->get('/screenshots/');
        $response->assertSee($this->websiteUrl);
    }
}
