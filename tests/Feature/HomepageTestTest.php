<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomepageTestTest extends TestCase
{
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
