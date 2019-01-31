<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PropertyTest extends TestCase
{
    /**
     * Test listing
     *
     * @return void
     */
    public function testPropertyList()
    {
        $response = $this->json('GET', 'api/property/list');
        $response->assertStatus(200);
    }

}
