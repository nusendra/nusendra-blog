@extends('frontend.master')
@section('title','Nusendra.com - Full Stack Web Developer')
@section('hero-title','Nusendra.com')
@section('hero-description','Full Stack Web Developer | Desktop App Developer | Network Engineer | Blogger')

@section('content')
  <section class="container">
    <div class="tile is-ancestor">
      <div class="columns is-multiline">
        @foreach ($posts as $post)
          <div class="tile is-parent is-4">
            <article class="tile is-child box">
              <p class="title is-5">{{$post->judul}}</p>
              <p class="subtitle is-6"><small>{{$post->tgl_terbit}}</small></p>
              <p>{{$post->ringkasan}}</p>
              <a class="button is-dark">Dark</a>
            </article>
          </div>
        @endforeach
      </div><br>
    </div>
  </section>
@endsection
