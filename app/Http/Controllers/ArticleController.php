<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
  public function index()
  {
    $articles = [
      (object) [
        'id'         => 1,
        'title'      => 'タイトル1',
        'image'      => 'https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg',
        'created_at' => now(),
        'user'       => (object) [
          'id'       => 1,
          'name'     => 'ユーザー名1',
        ],
      ],
      (object) [
        'id'         => 2,
        'title'      => 'タイトル2',
        'image'      => 'https://pbs.twimg.com/media/Elcidu5U8AAU8-s?format=jpg&name=large',
        'created_at' => now(),
        'user'       => (object) [
          'id'       => 2,
          'name'     => 'ユーザー名2',
        ],
      ],
      (object) [
        'id'         => 3,
        'title'      => 'タイトル3',
        'image'      => 'https://pbs.twimg.com/media/ElaSeb-U0AELb97?format=jpg&name=large',
        'created_at' => now(),
        'user'       => (object) [
          'id'       => 3,
          'name'     => 'ユーザー名3',
        ],
      ],
    ];
    return view('articles.index', compact('articles'));
  }
}
