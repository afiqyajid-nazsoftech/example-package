<?php

namespace Afiqyajid\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SampleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_page()
    {
        $response = $this->get('contact');

        $response->assertStatus(200);
    }
}
