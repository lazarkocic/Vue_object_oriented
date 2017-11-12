<?php

namespace Tests\Integration\Models;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Article;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_fetches_trending_articles()
    {
      factory(Article::class, 3)->create();
      factory(Article::class)->create(['reads' => 10]);
      $mostPopular = factory(Article::class)->create(['reads' => 15]);

      $articles = Article::trending();

      $this->assertEquals($mostPopular->id, $articles->first()->id);
      $this->assertCount(3, $articles);
    }
}
