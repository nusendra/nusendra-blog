<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=7">

  <meta name="language" content="en-EN" />
  <meta name="author" content="Irfan Maulana" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Nusendra.com</title>

  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.min.css"> --}}
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- GOOGLE ANALYTICS AND FRIENDS -->
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5442972248172818",
    enable_page_level_ads: true
  });
  </script>

</head>

<body>

  <header class="hero is-light">
    <div class="hero-head">
      <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">

          <a class="navbar-item">
            <img src="/" alt="Nusendra.com">
          </a>
          <a class="navbar-item is-tab is-hidden-mobile is-active"><span class="icon is-medium"><i class="fa fa-home"></i></span>Home</a>
          <a class="navbar-item is-tab is-hidden-mobile">Front End</a>

          <button class="button navbar-burger" data-target="navMenu">
            <span></span>
            <span></span>
            <span></span>
          </button>

        </div>

        <div class="navbar-menu navbar-end" id="navMenu">
          <a class="navbar-item is-tab is-hidden-tablet is-active">Home</a>
          <a class="navbar-item is-tab is-hidden-tablet">Front End</a>
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              <figure class="image is-32x32" style="margin-right:.5em;">
                {{-- <img src="https://avatars1.githubusercontent.com/u/7221389?v=4&s=32"> --}}
              </figure>
              {{ Auth::user()->name }}
            </a>

            <div class="navbar-dropdown is-right">
                <a class="navbar-item">
                  <span class="icon is-small">
                    <i class="fa fa-user-o"></i>
                  </span>
                  Profile
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                  <span class="icon is-small">
                    <i class="fa fa-power-off"></i>
                  </span>
                  Logout
                </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <div class="section" id="app">
    <div class="columns">
      <aside class="column is-2">
        <nav class="menu">
          <p class="menu-label">
            UTAMA
          </p>
          <ul class="menu-list">
            <router-link to="/">Dashboard</router-link>
          </ul>
          <p class="menu-label">
            MASTER DATA
          </p>
          <ul class="menu-list">
            <router-link to="/kategori">Kategori</router-link>
            <router-link to="/tag">Tag</router-link>
            <router-link to="/gambar">Gambar</router-link>
          </ul>
          <p class="menu-label">
            BLOGGING
          </p>
          <ul class="menu-list">
            <router-link to="/blog">Blog</router-link>
            <router-link to="/komentar">Komentar</router-link>
          </ul>
        </nav>
      </aside>
      <router-view></router-view>
    </div>
  </div>
</body>

</html>

<script src="js/app.js" charset="utf-8"></script>
