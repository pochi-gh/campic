<?php

namespace Tests\Feature;

use App\User;
use App\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleControllerTest extends TestCase
{
  use RefreshDatabase;
  public function testIndex()
  {
    $response = $this->get(route('articles.index'));
    $response->assertStatus(200)
      ->assertViewIs('articles.index');
  }

  ##トップページ
  public function testGuestCreate()
  {
    $response = $this->get(route('articles.create'));

    $response->assertRedirect(route('login'));
  }

  public function testAuthCreate()
  {
    $user = factory(User::class)->create();

    $response = $this->actingAs($user)
      ->get(route('articles.create'));

    $response->assertStatus(200)
      ->assertViewIs('articles.create');
  }

##詳細ページてすと
  public function testShow()
  {
    $user = factory(User::class)->create();
    $article = factory(Article::class)->create();

    $response = $this->actingAs($user)
      ->get(route('articles.show',['article'=> $article->id]));
    $response->assertStatus(200)
      ->assertViewIs('articles.show');
  }
  ##未ログイン時のshowページ
  public function testGestShow()
  {
    $article = factory(Article::class)->create();
    $response = $this->get(route('articles.show',['article'=> $article->id]));
    $response->assertStatus(200);
  }
##編集ぺーじまわり
  ##他ユーザーによるページ遷移
  public function testAnotherEdit()
  {
    $user = factory(User::class)->create();
    $article = factory(Article::class)->create();

    $response = $this->actingAs($user)
      ->get(route('articles.edit',['article'=> $article->id]));
      $response->assertStatus(403);
  }
  ##編集ページまわりのてすと
  public function testGestEdit()
  {
    $user = factory(User::class)->create();
    $article = factory(Article::class)->create();

    $response = $this->get(route('articles.edit',['article'=> $article->id]));
    $response->assertRedirect(route('login'));
  }


}
