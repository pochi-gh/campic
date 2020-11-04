<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\User;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
      'title' => $faker->text(50),
      'image' => "http://130.211.12.41/img_file/kakizaki_memi/efab19a1e88763c93598ca57c2551453.jpg",
      'user_id'=> function(){
        return factory(User::class);
      }
    ];
});
