<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
  use SoftDeletes;
  protected $dates = ['deleted_at'];
  protected $guarded = ['id'];

  public function getTglTerbitAttribute($value) {
    return $value ? date('d F Y', strtotime($value)) : NULL;
  }

  public function kategoris()
  {
    return $this->belongsToMany('App\Kategori');
  }

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
