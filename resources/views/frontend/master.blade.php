<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <meta name="author" content="Nusendra Hanggarawan">
  <meta name="description" content="Personal web blog yang memuat konten seputar pemrograman (full stack web development), network engineering (mikrotik) dan opini pribadi. ">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@nusendra_">
  <meta name="twitter:creator" content="@nusendra_">
  <meta name="twitter:title" content="Nusendra - Full Stack Web Developer">
  <meta name="twitter:url" content="https://nusendra.com">
  <meta name="twitter:description" content="indonesian web developer, full stack web developer, web developer, programmer, developer, desktop developer,backend developer, web programmer, frontend developer, laravel, php, vuejs, c#, laravel developer, backend programmer, tutorial website, jasa web aplikasi, jasa web ecommerce, jasa web company profile, jasa setting mikrotik, jasa setting mikrotik surabaya, setting mikrotik gresik, jasa pembuatan website, jasa pembuatan web aplikasi, jasa pembuatan website gresik, jasa pembuatan website surabaya, blogger">
  <meta property="og:title" content="Nusendra - Full Stack Web Developer">
  <meta property="og:description" content="indonesian web developer, full stack web developer, web developer, programmer, developer, desktop developer,backend developer, web programmer, frontend developer, laravel, php, vuejs, c#, laravel developer, backend programmer, tutorial website, jasa web aplikasi, jasa web ecommerce, jasa web company profile, jasa setting mikrotik, jasa setting mikrotik surabaya, setting mikrotik gresik, jasa pembuatan website, jasa pembuatan web aplikasi, jasa pembuatan website gresik, jasa pembuatan website surabaya, blogger">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
  <div id="app">
    <section class="hero is-info is-bold">
      <div class="hero-head">
        <nav class="navbar">
          <div class="container">
            <div class="navbar-brand">
              <a class="navbar-item" href="../">
                <img src="/image/logo.png" alt="Logo">
              </a>
              <span class="navbar-burger burger" data-target="navbarMenu">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </div>
            <div id="navbarMenu" class="navbar-menu">
              <div class="navbar-end">
                <a class="navbar-item" href="/">
                  Home
                </a>
                <a class="navbar-item" href="{{route('skills')}}">
                  Skill Set
                </a>
                {{-- <a class="navbar-item" href="{{route('portofolio')}}">
                  Portofolio
                </a> --}}
                <a class="navbar-item" href="{{route('contact')}}">
                  Contact
                </a>
                <a class="navbar-item" href="{{route('tos')}}">
                  ToS
                </a>
                <a class="navbar-item" href="{{route('disclaimer')}}">
                  Disclaimer
                </a>
                <span class="navbar-item">
                  <a class="button is-white is-outlined is-small" href="https://github.com/nusendra">
                    <span class="icon">
                      <i class="fa fa-github"></i>
                    </span>
                    <span>My Github</span>
                  </a>
                </span>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </section>

    <section class="hero is-dark is-bold">
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title">
            @yield('hero-title')
          </h1>
          <h2 class="subtitle">
            <br>
            @yield('hero-description')
          </h2>
        </div>
      </div>
    </section>
    <div class="box cta">
      <p class="has-text-centered">
        <span class="tag is-danger">Info</span> Website ini masih dalam masa pengembangan. Informasi lebih lanjut silakan kirim email ke admin@nusendra.com
      </p>
    </div>
  </div>
  @section('content')
  @show
  <br>
</body>
<footer class="footer">
  <div class="container">
    <div class="columns">
      <div class="column is-4">
        <h1 class="title is-3">
          <strong>Nusendra.com</strong>
        </h1>
        <p>
          Personal web blog yang memuat konten seputar pemrograman (web development), network engineering (mikrotik) dan opini pribadi.
        </p>
        <div class="social-icons">
          <a href="https://www.facebook.com/andraeinstein" class="social-icon"> <i class="fa fa-facebook"></i></a>&nbsp;
          <a href="https://twitter.com/nusendra_" class="social-icon"> <i class="fa fa-twitter"></i></a>&nbsp;
          <a href="https://www.youtube.com/channel/UCPs91pCgbgtcSdnczFSAkdA" class="social-icon"> <i class="fa fa-youtube"></i></a>&nbsp;
          <a href="https://www.linkedin.com/in/nusendra-hanggarawan-79854990/" class="social-icon"> <i class="fa fa-linkedin"></i></a>&nbsp;
          <a href="https://t.me/nusendra" class="social-icon"> <i class="fa fa-telegram"></i></a>
        </div>
      </div>
      <div class="column is-4">
        <h1 class="title is-6">
          <strong>Who am I ?</strong>
        </h1>
        <span class="tag is-dark">Web Dev</span>
        <span class="tag is-danger">Desktop App Dev</span>
        <span class="tag is-primary">Network Engineer</span>
        <span class="tag is-link">Blogger</span>
        <span class="tag is-info">Husband</span>
        <span class="tag is-success">Freelancer</span>
      </div>
      <div class="column is-4">
        <h1 class="title is-6">
          <strong>Contact me !</strong>
        </h1>
        <ul>
          <li><i class="fa fa-home"></i> Gresik, Jawa Timur, Indonesia</li>
          <li><i class="fa fa-envelope-open-o"></i> admin@nusendra.com</li>
          <li><i class="fa fa-mobile"></i> +62 857 3334 5727</li>
        </ul>
      </div>
    </div>
  </div>
  <br><br>
  <div class="container">
    <div class="content has-text-centered">

      <p>
        © 2017 <strong>Nusendra.com</strong> Made with <span style="color:red;margin-right: 5px;">❤️</span> from Gresik, Indonesia.
      </p>
    </div>
  </div>
</footer>
</html>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  if ($navbarBurgers.length > 0) {
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {
        var target = $el.dataset.target;
        var $target = document.getElementById(target);
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
      });
    });
  }
});
</script>
<script src="{{ URL::asset('js/frontend.js') }}" charset="utf-8"></script>