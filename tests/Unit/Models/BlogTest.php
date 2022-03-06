<?php

namespace Tests\Unit\Models;

// PHPUnitでのテスト環境になる
// use PHPUnit\Framework\TestCase;

// Laravelの環境でのテスト環境に変更

use App\Models\Blog;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BlogTest extends TestCase
{
    // DBを使ったテストの場合は必ず使用する
    use RefreshDatabase;
    /** @test user */
    function userリレーションを返す()
    {
        $blog = Blog::factory()->create();

        $this->assertInstanceOf(User::class, $blog->user);
    }
}
