<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Kategori;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::select('id', 'judul', 'ringkasan', 'tgl_terbit', 'user_id', 'status_terbit', 'slug', 'view_counter', 'created_at')->with(['user' => function ($query) {
            $query->select('id', 'name');
        },'kategoris' => function ($q) {
            $q->select('kategori');
        }])->where('status_terbit', 1)->orderBy('id', 'desc')->simplePaginate(5);

        $kategoris = Kategori::with('posts:judul')->get();
        return view('frontend.page.home', compact('posts', 'kategoris'));
    }

    public function getPopularPosts()
    {
        $model = Post::select('id','judul','slug','view_counter')->orderBy('view_counter','desc')->take(5)->get();
        return $model;
    }
}
