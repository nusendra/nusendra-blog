<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

class Post extends Model implements Feedable
{
  use SoftDeletes;

  public $asYouType = true;

  protected $dates = ['deleted_at'];
  protected $guarded = ['id'];
  protected $hidden = ['pivot'];

  public function toFeedItem()
  {
      return FeedItem::create()
          ->id($this->id)
          ->title($this->judul)
          ->summary($this->ringkasan)
          ->updated($this->updated_at)
          ->link("/post/$this->slug")
          ->author("Nusendra Hanggarawan");
  }

  public static function getFeedItems()
  {
      return Post::all();
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
