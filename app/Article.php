<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
  protected $fillable =[
    'title',
    'image',
  ];

  public function user():BelongsTo
  {
    return $this->belongsTo('App\User');

  }
}
