<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Kategori;

class SitemapController extends Controller
{
    public function index()
    {
        $posts = Post::first();
        $kategoris = Kategori::first();

        return response()->view('frontend.sitemap.index', [
            'articles' => $posts,
            'categories' => $kategoris,
        ])->header('Content-Type', 'text/xml');
    }

    public function posts()
    {
        $posts = Post::latest()->get();
        return response()->view('frontend.sitemap.articles', [
            'posts' => $posts,
        ])->header('Content-Type', 'text/xml');
    }

    public function categories()
    {
        $kategoris = Kategori::all();
        return response()->view('frontend.sitemap.categories', [
            'categories' => $kategoris,
        ])->header('Content-Type', 'text/xml');
    }
}
