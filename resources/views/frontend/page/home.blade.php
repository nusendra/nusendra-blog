@extends('frontend.master')
@section('title','Nusendra.com - ')
@section('hero-title','Nusendra.com')
@section('hero-description','Full Stack Web Developer | Desktop App Developer | Network Engineer | Blogger')

@section('content')
  <section class="container">
    {{-- <div class="columns features" v-for="posts in chunkedPosts"> --}}
        <div class="column is-3">
          <div class="box">
            <article class="media">
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong><h3>judul</h3></strong><small>author</small>
                    <br>
                    <small>tgl</small>
                    <p>
                      ringkasan
                      slug
                    </p>
                  </p>
                </div>
              </div>
            </article>
          </div>
        </div>
    {{-- </div> --}}
  </section>
@endsection
