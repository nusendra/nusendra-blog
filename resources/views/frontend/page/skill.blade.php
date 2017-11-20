@extends('frontend.master')
@section('title','Nusendra.com - Skills')
@section('hero-title','Skill Set')
@section('hero-description','Full Stack Web Developer | Desktop App Developer | Network Engineer | Blogger')

@section('content')
  <section class="container section">
    <div class="columns">
      <div class="column">
        <h1 class="title is-4">
          <strong>Web Development</strong>
        </h1>
        PHP - Laravel
        <progress class="progress is-success" value="90" max="100">90%</progress>
        PHP - CodeIgniter
        <progress class="progress is-info" value="70" max="100">70%</progress>
        ASP.NET
        <progress class="progress is-warning" value="55" max="100">55%</progress>
        Javascript - Vue.JS
        <progress class="progress is-info" value="80" max="100">80%</progress>
        Javascript - JQuery
        <progress class="progress is-info" value="85" max="100">85%</progress>
        Javascript - Progressive Web Apps
        <progress class="progress is-danger" value="40" max="100">40%</progress>
        CSS - Bootstrap & Bulma
        <progress class="progress is-info" value="78" max="100">78%</progress>
        SEO
        <progress class="progress is-info" value="70" max="100">70%</progress>
      </div>
      <div class="column">
        <h1 class="title is-4">
          <strong>Desktop App Development</strong>
        </h1>
        C#.NET - Visual Studio
        <progress class="progress is-success" value="90" max="100">89%</progress>
        VB.NET - Visual Studio
        <progress class="progress is-success" value="95" max="100">95%</progress>
        WPF - Visual Studio
        <progress class="progress is-warning" value="65" max="100">65%</progress>
      </div>
      <div class="column">
        <h1 class="title is-4">
          <strong>Other Skills</strong>
        </h1>
        Design - Photoshop
        <progress class="progress is-success" value="85" max="100">85%</progress>
        Design - Corel Draw
        <progress class="progress is-info" value="60" max="100">60%</progress>
        Geographic Information System - ArcGIS
        <progress class="progress is-info" value="70" max="100">70%</progress>
        Networking - Mikrotik
        <progress class="progress is-info" value="85" max="100">85%</progress>
        Spread Sheet - Microsoft Office / Libre Office
        <progress class="progress is-success" value="98" max="100">98%</progress>
      </div>
    </div>
  </section>
@endsection
