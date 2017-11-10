<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
  use SoftDeletes;
  protected $dates = ['deleted_at'];
  protected $guarded = ['id'];
  protected $hidden = ['pivot'];

  public function posts()
  {
    return $this->belongsToMany('App\Post');
  }
}
