<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class CartTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate:fresh');
        $this->seed();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testEmpty()
    {
        $response = $this->get('/cart');

        $response->assertStatus(302);
    }
}
