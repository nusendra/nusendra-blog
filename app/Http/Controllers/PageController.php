<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    public function skills()
    {
      $popular_posts = Post::select('id','judul','slug','view_counter')->orderBy('view_counter','desc')->take(5)->get();
      return view('frontend.page.skill',compact('popular_posts'));
    }

    public function disclaimer()
    {
      $popular_posts = Post::select('id','judul','slug','view_counter')->orderBy('view_counter','desc')->take(5)->get();
      return view('frontend.page.disclaimer',compact('popular_posts'));
    }

    public function contact()
    {
      $popular_posts = Post::select('id','judul','slug','view_counter')->orderBy('view_counter','desc')->take(5)->get();
      return view('frontend.page.contact',compact('popular_posts'));
    }

    public function tos()
    {
      $popular_posts = Post::select('id','judul','slug','view_counter')->orderBy('view_counter','desc')->take(5)->get();
      return view('frontend.page.tos',compact('popular_posts'));
    }
}
