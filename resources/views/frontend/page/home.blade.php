@extends('frontend.master')
@section('title','Nusendra.com - ')
@section('hero-title','Nusendra.com')
@section('hero-description','Full Stack Web Developer | Desktop App Developer | Network Engineer | Blogger')

<style media="screen">
.equal-height {
   display:flex;
   flex-direction: column;
   height: 35%;
}
</style>

@section('content')
  <section class="container">
      @foreach ($posts->chunk(3) as $value)
        <div class="columns">
          @foreach ($value as $post)
            <div class="column is-4">
              <div class="box equal-height">
                <article class="media">
                  <div class="media-content">
                    <div class="content">
                      <p>
                        <strong><h3>{{$post->judul}}</h3></strong><small>{{$post->user->name}}</small>
                        <br>
                        <small>{{$post->tgl_terbit}}</small>
                        <br><br>
                        <p>
                          {{$post->ringkasan}} <a href="">Read More ... </a>
                        </p>
                      </p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          @endforeach
        </div>
      @endforeach
  </section>
@endsection
