<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
        $post = Post::all()
        return view('frontend.page.home',compact('post'));
    }


}
