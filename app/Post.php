<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Post extends Model
{
  use SoftDeletes;
  use Searchable;

  public $asYouType = true;

  protected $dates = ['deleted_at'];
  protected $guarded = ['id'];
  protected $hidden = ['pivot'];

  public function searchableAs()
  {
      return "post_index";
  }

  public function toSearchableArray()
  {
      $array = $this->toArray();

      // Customize array...

      return $array;
  }

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
