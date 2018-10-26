@extends('frontend.master')
@section('title','Nusendra.com - Full Stack Web Developer')
@section('description','Personal web blog yang memuat konten seputar kehidupan programmer dan aktifitas ngoding')

@section('content')
<header class="masthead" style="background-image: url('https://cdn.staticaly.com/img/nusendra.com/image/minify.png')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Nusendra H.</h1>
          <p/>
          <span class="subheading">
            <div id="typed-strings">
                <p>Full Stack Web Developer</p>
                <p>Mobile App Developer</p>
                <p>Tech and Personal Blogger</p>
            </div>
            <h2><span id="typed"></span></h2>
          </span>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-10 mx-auto">
      <div class="list-group">
        <ul>
          <li class="list-group-item list-group-item-secondary">Top Categories</li>
        </ul>
        @foreach($kategoris as $item)
          @if($item->posts->count() > 0)
            <a href="/kategori/{{$item->kategori}}" class="list-group-item list-group-item-action">{{$item->kategori}} ({{$item->posts->count()}})</a>
          @endif
        @endforeach
      </div>
    </div>
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
        <ul>
          <span class="pull-right">{{ $posts->links() }}</span>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
