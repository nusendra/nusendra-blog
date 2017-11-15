<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
      $posts = Post::select('id','judul','ringkasan','tgl_terbit','user_id','status_terbit','slug')->with(['user' => function($query){
        $query->select('id','name');
      },'kategoris' => function($q){
        $q->select('kategori');
      }])->get();
      return view('frontend.page.home',compact('posts'));
    }


}
