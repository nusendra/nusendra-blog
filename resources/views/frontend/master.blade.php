<!DOCTYPE html>
<html>
<head>
  @include('frontend.onesignal')
  @include('frontend.ga')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#b0c5e8">
  <meta name="description" content="@yield('description')">
  <meta name="robots" content="index,follow">
  <meta name="googlebot" content="index,follow">
  <meta name="google-site-verification" content="FTUgjnGVYX1mfONGgk5FZkmKgeTti6_LLJ3q_-WiUE0" />
  <title>@yield('title')</title>
  <meta name="author" content="Nusendra Hanggarawan">

  <meta name="mobile-web-app-capable" content="yes">

  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@nusendra_">
  <meta name="twitter:creator" content="@nusendra_">
  <meta name="twitter:url" content="https://twitter.com/nusendra_">
  <meta name="twitter:title" content="Nusendra">
  <meta name="twitter:description" content="Personal web blog yang memuat konten seputar kehidupan programmer dan aktifitas ngoding">

  <meta name="google" content="nositelinkssearchbox">
  <meta name="google" content="notranslate">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <link rel="apple-touch-icon" sizes="57x57" href='/image/icons/apple-icon-57x57.png'>
  <link rel="apple-touch-icon" sizes="60x60" href='/image/icons/apple-icon-60x60.png'>
  <link rel="apple-touch-icon" sizes="72x72" href='/image/icons/apple-icon-72x72.png'>
  <link rel="apple-touch-icon" sizes="76x76" href='/image/icons/apple-icon-76x76.png'>
  <link rel="apple-touch-icon" sizes="114x114" href='/image/icons/apple-icon-114x114.png'>
  <link rel="apple-touch-icon" sizes="120x120" href='/image/icons/apple-icon-120x120.png'>
  <link rel="apple-touch-icon" sizes="144x144" href='/image/icons/apple-icon-144x144.png'>
  <link rel="apple-touch-icon" sizes="152x152" href='/image/icons/apple-icon-152x152.png'>
  <link rel="apple-touch-icon" sizes="180x180" href='/image/icons/apple-icon-180x180.png'>
  <link rel="icon" type="image/png" sizes="192x192"  href='/image/icons/android-icon-192x192.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href='/image/icons/favicon-32x32.png'>
  <link rel="icon" type="image/png" sizes="96x96" href='/image/icons/favicon-96x96.png'>
  <link rel="icon" type="image/png" sizes="16x16" href='/image/icons/favicon-16x16.png'>
  <meta name="msapplication-TileColor" content="#b0c5e8">
  <meta name="msapplication-TileImage" content='/image/icons/ms-icon-144x144.png'>
  <link rel="shortcut icon" href="'/image/icons/favicon.ico' type="image/x-icon">
  <link rel="icon" href='/image/icons/favicon.ico' type="image/x-icon">
  @include('feed::links')

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
  <link href='/css/clean-blog.min.css' rel="stylesheet">
  <link href='/css/styles/default.css' rel="stylesheet">
  
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="/">Nusendra.com</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('now')}}">Now</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('skills')}}">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('portfolio')}}">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('tos')}}">TOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('disclaimer')}}">Disclaimer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/nusendra"><span class="icon"><i class="fa fa-github"></i> My Github</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    @section('content')
    @show

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="https://nusendra.com/feed">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-rss fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://twitter.com/nusendra_">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/andraeinstein">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/nusendra">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Nusendra H. 2018</p>
          </div>
        </div>
      </div>
    </footer>
</body>

</html>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src='/js/jquery.min.js'></script>
<script type="text/javascript" src='/js/bootstrap.bundle.min.js'></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/locale/id.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
<script type="text/javascript" src='/js/highlight.pack.js'></script>

<!-- Custom scripts for this template -->
<script src="/js/clean-blog.min.js"></script>
<script>
console.log(" \n========================= \nWELCOME TO MY BLOG \nNusendra.com \n========================= ")
$(document).ready(function(){$('.moment').each(function(){date = moment(new Date($(this).attr('data-date')));$(this).html('<span>' + date.fromNow() + '</span>');});});
if($('#typed').length === 1){new Typed('#typed',{stringsElement: '#typed-strings',typeSpeed:100,backSpeed:40,loop:true,loopCount:Infinity});}
hljs.initHighlightingOnLoad();
</script>
<script>
  if ('serviceWorker' in navigator ) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
            // Registration was successful
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
        });
    });
}
</script>