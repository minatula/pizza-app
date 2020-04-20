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
     * Visiting empty cart
     *
     * @return void
     */
    public function testEmpty()
    {
        $response = $this->get('/cart');

        $response->assertStatus(302);
    }

    /**
     * Adding product to cart
     *
     * @return void
     */
    public function testAddProduct()
    {
        $response = $this->post('/cart/add/1');

        $response->assertSessionHas('success');
    }
}
