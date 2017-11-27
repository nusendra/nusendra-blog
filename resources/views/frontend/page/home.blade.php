@extends('frontend.master')
@section('title','Nusendra.com - Full Stack Web Developer')
@section('hero-title','Nusendra.com')
@section('hero-description','Full Stack Web Developer | Desktop App Developer | Network Engineer | Blogger')

@section('content')
  <section class="container section">
    <div class="field">
      <div class="field-label is-normal">
      </div>
      <div class="control">
        <pencarian kata=""></pencarian>
      </div>
    </div>
    <p><br></p>
    <div class="tile is-ancestor">
      <div class="columns is-multiline">
        @foreach ($posts as $post)
          <div class="tile is-parent is-4">
            <article class="tile is-child box">
              <p class="title is-5">{{$post->judul}}</p>
              <p class="subtitle is-6"><small>{{$post->tgl_terbit}}</small></p>
              <p>{{$post->ringkasan}}</p><a href="/post/{{$post->slug}}">Read more ...</a>
            </article>
          </div>
        @endforeach
      </div><br>
    </div>
  </section>
@endsection