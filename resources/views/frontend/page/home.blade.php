@extends('frontend.master')
@section('title','Nusendra.com - Full Stack Web Developer')
@section('description','Personal web blog yang memuat konten seputar pemrograman (full stack web development), network engineering (mikrotik) dan opini pribadi.')
@section('hero-title','NUSENDRA')
@section('hero-description','Full Stack Web Developer | Desktop App Developer | Network Engineer | Blogger')

<div class="slider display-table center-text">
  <h1 class="title display-table-cell"><b>@yield('hero-title')</b></h1><br>
  {{-- <h5 class="title display-table-cell"><b>@yield('hero-description')</b></h5> --}}
</div>
@section('content')
<section class="blog-area section">
  <div class="container">
    <div class="row">
      @foreach ($posts as $post)
      <div class="col-lg-4 col-md-6">
        <div class="card h-100">
          <div class="single-post post-style-2 post-style-3">
            <div class="blog-info">
              {{-- <h6 class="pre-title"><a href="/post/{{$post->slug}}"><b>HEALTH</b></a></h6> --}}
              <h4 class="title"><a href="/post/{{$post->slug}}"><b>{{$post->judul}}</b></a></h4>
              <p>{{$post->ringkasan}}</p>
              <div class="avatar-area">
                <div class="right-area">
                  <h6 class="date" href="#">on {{$post->tgl_terbit}}</h6>
                </div>
              </div>
              <ul class="post-footer">
                <li><a href="#"><i class="ion-eye"></i>{{number_format($post->view_counter)}}</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <a class="load-more-btn" href="#"><b>LOAD MORE</b></a>
  </div>
</section>
@endsection