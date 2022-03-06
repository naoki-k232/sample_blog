<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BolgViewControllerTest extends TestCase
{
    /** @test method */
    function ブログのトップページを開ける()
    {

        // $this->withoutExceptionHandling();

        $response = $this->get('/');

        $response->assertOk();
    }
}
