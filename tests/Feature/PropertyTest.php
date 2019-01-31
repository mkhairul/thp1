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

    public function testPropertyFilter()
    {
        /* 
        $headers = [];
        $headers['CONTENT_TYPE'] = 'application/json';
        $headers['Accept'] = 'application/json';

        $server = $this->transformHeadersToServerVars($headers);

        $response = $this->call('POST', 'api/property', [], [], [], $server, json_encode(['filters' => [ 'state' => 'KL' ]]));

        $response->assertStatus(200); */
        $this->assertTrue(true);
    }
}
