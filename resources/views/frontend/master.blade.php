<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <meta name="author" content="Nusendra Hanggarawan">
  <meta name="description" content="indonesian web developer, full stack web developer, web developer, programmer, developer, desktop developer,backend developer, web programmer, frontend developer, laravel, php, vuejs, c#, laravel developer, backend programmer, tutorial website, jasa web aplikasi, jasa web ecommerce, jasa web company profile, jasa setting mikrotik, jasa setting mikrotik surabaya, setting mikrotik gresik, jasa pembuatan website, jasa pembuatan web aplikasi, jasa pembuatan website gresik, jasa pembuatan website surabaya, blogger">
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
    <section class="hero is-dark is-bold">
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
                <a class="navbar-item is-active">
                  Home
                </a>
                <a class="navbar-item">
                  Skillset
                </a>
                <a class="navbar-item">
                  Portofolio
                </a>
                <a class="navbar-item">
                  Contact
                </a>
                <a class="navbar-item">
                  ToS
                </a>
                <a class="navbar-item">
                  Disclaimer
                </a>
                <span class="navbar-item">
                  <a class="button is-white is-outlined is-small" href="https://github.com/dansup/bulma-templates/blob/master/templates/hero.html">
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
      @section('content')
      @show
      <br>
    <footer class="footer">
      <div class="columns">
        <div class="column">
          <font size="8"><strong>Nusendra.com</strong></font>
          <p>
            Personal web blog yang memuat konten seputar pemrograman (web development), network engineering (mikrotik) dan opini pribadi.
          </p>
        </div>
        <div class="column">
          Second column
        </div>
        <div class="column">
          First column
        </div>
        <div class="column">
          Second column
        </div>
      </div>
      <div class="container">
        <div class="content has-text-centered">
          <p>
            <strong>Nusendra.com</strong> This Web is built with Laravel & VueJS
          </p>
          <p>
            2017
          </p>
        </div>
      </div>
    </footer>
  </div>
</body>
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
<script src="js/frontend.js" charset="utf-8"></script>
