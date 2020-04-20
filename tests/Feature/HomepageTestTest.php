<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;

class HomepageTestTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate:fresh');
        $this->seed();
    }

    /**
     * Homepage response test
     *
     * @return void
     */
    public function testResponseStatus()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
