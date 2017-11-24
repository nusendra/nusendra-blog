@extends('frontend.master')
@section('title','Nusendra.com - Post Kategori')
@section('hero-title',$kategori)
@section('hero-description','Daftar lengkap berbagai post / blog pada kategori ' . $kategori)

@section('content')
    <div id="el">
        <section class="container section">
            @foreach($posts as $post)
                <article class="media">
                <figure class="media-left">
                    <p class="image is-64x64">
                    <img src="{{URL::asset('/image/blog-logo.jpg')}}">
                    </p>
                </figure>
                <div class="media-content">
                    <div class="content">
                    <p>
                        <strong>{{$post->judul}}</strong> <small>by {{$post->user->name}} / {{$post->tgl_terbit}}</small>
                        <br>
                        {{$post->ringkasan}}
                    </p>
                    <p>
                        <a href="/post/{{$post->slug}}">Read more ... </a>
                    </p>
                    </div>
                </div>
                </article>
            @endforeach
        </section>
    </div>
@endsection

