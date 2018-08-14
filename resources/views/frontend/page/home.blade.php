@extends('frontend.master')
@section('title','Nusendra.com - Full Stack Web Developer')
@section('description','Personal web blog yang memuat konten seputar kehidupan programmer dan aktifitas ngoding')

@section('content')
<header class="masthead" style="background-image: url({{URL::asset('image/minify.png')}})">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Nusendra H.</h1>
          <p/>
          <span class="subheading">
            {{-- <div id="typed-strings">
                <p><h2>Full Stack Web & Mobile Developer</h2></p>
                <p>It <em>types</em> out sentences.</p>
            </div> --}}
            <h2><span id="typed"></span></h2>
          </span>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      @foreach ($posts as $post)
      <div class="post-preview">
        <a href="/post/{{$post->slug}}">
          <h2 class="post-title">
            {{$post->judul}}
          </h2>
          <h3 class="post-subtitle">
            {{$post->ringkasan}}
          </h3>
        </a>
        <p class="post-meta">
	        Diposting  <span class="moment" data-date="{{$post->created_at}}"></span>. {{number_format($post->view_counter)}} views.
        </p>
      </div>
      <hr>
      @endforeach
      <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
      </div>
    </div>
  </div>
</div>
@endsection
