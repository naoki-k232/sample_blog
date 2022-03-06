<?php

namespace Tests\Feature\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BlogViewControllerTest extends TestCase
{
    use RefreshDatabase;
    /** @test method */
    function ブログのトップページを開ける()
    {

        // $this->withoutExceptionHandling();

        $blog1 = Blog::factory()->create();
        $blog2 = Blog::factory()->create();
        $blog3 = Blog::factory()->create();

        $response = $this->get('/');

        $response->assertOk();

        $response->assertSee($blog1->title);
        $response->assertSee($blog2->title);
        $response->assertSee($blog3->title);
        $response->assertSee($blog1->user->name);
        $response->assertSee($blog2->user->name);
        $response->assertSee($blog3->user->name);
    }

    /** @test */
    function factoryの観察()
    {
        // ブログを作ってDBに保存
        $blog = Blog::factory()->create();

        dump($blog->toArray());

        dump(User::get()->toArray());
    }
}
