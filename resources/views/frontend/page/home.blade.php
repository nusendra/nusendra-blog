@extends('frontend.master')
@section('title','Nusendra.com - Full Stack Web Developer')
@section('description','Personal web blog yang memuat konten seputar pemrograman (full stack web development), network engineering (mikrotik) dan opini pribadi.')
@section('hero-title','NUSENDRA')
@section('hero-description','Full Stack Web Developer | Desktop App Developer | Network Engineer | Blogger')

@section('content')
<div class="jumbotron jumbotron-fluid jumbo">
  <div class="container">
    <h1 class="display-4">Nusendra</h1>
    <p class="lead">Full Stack Web Developer | Blogger</p>
  </div>
</div>
<section class="blog-area section">
  <div class="container">
    <div class="row">
      @foreach ($posts as $post)
      <div class="col-lg-4 col-md-6">
        <div class="card h-100">
          <div class="single-post post-style-2 post-style-3">
            <div class="blog-info">
              {{-- <h6 class="pre-title"><a href="/post/{{$post->slug}}"><b>HEALTH</b></a></h6> --}}
              <h6 class="text-left  date" href="#">on {{$post->tgl_terbit}}</h6>
              <h4 class="title"><a href="/post/{{$post->slug}}"><b>{{$post->judul}}</b></a></h4>
              <p>{{$post->ringkasan}}</p>
              
              <ul class="post-footer">
                <li><a href="#"><i class="ion-eye"></i>{{number_format($post->view_counter)}}</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  {{-- <a class="load-more-btn" href="#"><b>LOAD MORE</b></a> --}}
</section>
@endsection