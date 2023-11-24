<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SongsTest extends TestCase
{
        /**
     * A basic feature test songs.
     */
    public function testSongsOk(): void
    {
        $response = $this->get('/songs');

        $response->assertStatus(200);
    }
}

class SongsTest extends TestCase
{
    public function testStaticSongsPageReturns200()
    {
        // Assume your web application is running on localhost:8000
        $url = 'http://localhost:8000/songs_static';

        // Make a request to the /songs_static endpoint
        $response = file_get_contents($url);

        // Assert that the response code is 200 (OK)
        $this->assertEquals(200, $http_response_header[0]);
    }
}
