<!DOCTYPE html>
<html>
<head>
  @include('frontend.ga')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <meta name="author" content="Nusendra Hanggarawan">
  <meta name="description" content="@yield('description')">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@nusendra_">
  <meta name="twitter:creator" content="@nusendra_">
  <meta name="twitter:title" content="Nusendra - Full Stack Web Developer">
  <meta name="twitter:url" content="https://nusendra.com">
  <meta name="twitter:description" content="indonesian web developer, full stack web developer, web developer, programmer, developer, desktop developer,backend developer, web programmer, frontend developer, laravel, php, vuejs, c#, laravel developer, backend programmer, tutorial website, jasa web aplikasi, jasa web ecommerce, jasa web company profile, jasa setting mikrotik, jasa setting mikrotik surabaya, setting mikrotik gresik, jasa pembuatan website, jasa pembuatan web aplikasi, jasa pembuatan website gresik, jasa pembuatan website surabaya, blogger">
  <meta property="og:title" content="Nusendra - Full Stack Web Developer">
  <meta property="og:description" content="indonesian web developer, full stack web developer, web developer, programmer, developer, desktop developer,backend developer, web programmer, frontend developer, laravel, php, vuejs, c#, laravel developer, backend programmer, tutorial website, jasa web aplikasi, jasa web ecommerce, jasa web company profile, jasa setting mikrotik, jasa setting mikrotik surabaya, setting mikrotik gresik, jasa pembuatan website, jasa pembuatan web aplikasi, jasa pembuatan website gresik, jasa pembuatan website surabaya, blogger">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <meta name="google-site-verification" content="FTUgjnGVYX1mfONGgk5FZkmKgeTti6_LLJ3q_-WiUE0" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link href="{{URL::asset('css/ionicons.css')}}" rel="stylesheet">
	<link href="{{URL::asset('css/styles.css')}}" rel="stylesheet">
  <link href="{{URL::asset('css/responsive.css')}}" rel="stylesheet">
  
</head>
<body>
  <div id="app">
    <header>
      <div class="container-fluid position-relative no-side-padding">
        <a href="#" class="logo"><img src="{{URL::asset('image/logo.png')}}" alt="Logo Image"></a>
        <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>
        <ul class="main-menu visible-on-click" id="main-menu">
          <li><a href="https://nusendra.com">Home</a></li>
          <li><a href="{{route('skills')}}">Skills</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
          <li><a href="{{route('tos')}}">TOS</a></li>
          <li><a href="{{route('disclaimer')}}">Disclaimer</a></li>
          <li><a href="https://github.com/nusendra"><span class="icon"><i class="fa fa-github"></i></span></a></li>
        </ul>
      </div>
    </header>    
  </div>
  @section('content')
  @show
  <br>
</body>

<footer>
  <div class="container" id="el">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="footer-section">
          <a class="logo" href="#"><img src="{{URL::asset('image/logo.png')}}" alt="Logo Image"></a>
          <p class="copyright">Personal web blog yang memuat konten seputar pemrograman (web development) dan opini pribadi.</p>
          </ul>

        </div><!-- footer-section -->
      </div><!-- col-lg-4 col-md-6 -->

      {{-- <div class="col-lg-4 col-md-6">
          <div class="footer-section">
          <h4 class="title"><b>CATAGORIES</b></h4>
          <ul>
            <li><a href="#">BEAUTY</a></li>
            <li><a href="#">HEALTH</a></li>
            <li><a href="#">MUSIC</a></li>
          </ul>
          <ul>
            <li><a href="#">SPORT</a></li>
            <li><a href="#">DESIGN</a></li>
            <li><a href="#">TRAVEL</a></li>
          </ul>
        </div><!-- footer-section -->
      </div><!-- col-lg-4 col-md-6 -->

      <div class="col-lg-4 col-md-6">
        <div class="footer-section">

          <h4 class="title"><b>SUBSCRIBE</b></h4>
          <div class="input-area">
            <form>
              <input class="email-input" type="text" placeholder="Enter your email">
              <button class="submit-btn" type="submit"><i class="icon ion-ios-email-outline"></i></button>
            </form>
          </div>

        </div><!-- footer-section -->
      </div><!-- col-lg-4 col-md-6 --> --}}
      <div class="container">
          <div class="content has-text-centered">
            <p>© 2018 <strong>Nusendra.com</strong> Made with <span style="color:red;margin-right: 5px;">❤️</span> from Gresik, Indonesia.</p>
          </div>
        </div>
    </div><!-- row -->
  </div><!-- container -->
</footer>
</html>
<script src="{{ URL::asset('js/frontend.js') }}" charset="utf-8"></script>
<script>
  var vm = new Vue({
    el:"#el",
    mounted () {
      console.log(" \n========================= \nWELCOME TO MY BLOG \nNusendra.com \n========================= ")
    }
  })
</script>
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
