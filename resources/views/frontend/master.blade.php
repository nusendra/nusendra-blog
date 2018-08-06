<!DOCTYPE html>
<html>
<head>
  @include('frontend.ga')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="Content-Security-Policy" content="default-src 'self'">
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
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
  <link href="{{URL::asset('css/clean-blog.min.css')}}" rel="stylesheet">
  
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
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.bundle.min.js')}}"></script>

<!-- Custom scripts for this template -->
<script src="js/clean-blog.min.js"></script>
<script>
  console.log(" \n========================= \nWELCOME TO MY BLOG \nNusendra.com \n========================= ")
</script>