<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::select('id', 'judul', 'ringkasan', 'tgl_terbit', 'user_id', 'status_terbit', 'slug', 'view_counter')->with(['user' => function ($query) {
            $query->select('id', 'name');
        },'kategoris' => function ($q) {
            $q->select('kategori');
        }])->where('status_terbit', 1)->orderBy('tgl_terbit', 'desc')->take(9)->get();
        $popular_posts = Post::select('id','judul','slug','view_counter')->orderBy('view_counter','desc')->take(5)->get();
        return view('frontend.page.home', compact('posts','popular_posts'));
    }
}
