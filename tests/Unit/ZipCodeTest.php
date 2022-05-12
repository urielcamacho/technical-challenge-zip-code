<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Http\Response;
use Tests\TestCase;

class ZipCodeTest extends TestCase
{
    /**
     * Request for a non-existent zip code.
     *
     * @return void
     */
    public function testFailedZipCode()
    {
        $response = $this->get('/api/zip-codes/1');

        $response->assertStatus(Response::HTTP_NOT_FOUND);
    }

    /**
     * Request for an existent zip code.
     *
     * @return void
     */
    public function testSuccessfulZipCode()
    {
        $response = $this->get('/api/zip-codes/25300');

        $response->assertStatus(Response::HTTP_OK);
    }
}
