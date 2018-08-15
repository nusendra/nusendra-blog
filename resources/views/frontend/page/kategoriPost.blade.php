@extends('frontend.master') 
@section('title','Nusendra.com - Kategori Post')
@section('description','Kategori blog post dari Nusendra.com')

@section('content')
<header class="masthead">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Kategori Post</h1>
          <p/>
          <span class="subheading">
						Kumpulan post dari kategori {{$kategori}}
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
        <li class="list-group-item list-group-item-secondary">Top Categories</li>
        @foreach($kategoris as $item)
          @if($item->posts->count() > 0)
            <a href="/kategori/{{$item->kategori}}" class="list-group-item list-group-item-action {{$kategori == $item->kategori ? 'active' : ''}}">{{$item->kategori}} ({{$item->posts->count()}})</a>
          @endif
        @endforeach
      </div>
    </div>
    <div class="col-lg-8 col-md-10 mx-auto">
			@foreach($posts as $post)
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
        <!-- <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a> -->
        <span class="pull-right">{{ $posts->links() }}</span>
      </div>
    </div>
  </div>
</div>

@endsection