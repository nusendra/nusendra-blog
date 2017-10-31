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
          <a class="navbar-item is-tab is-hidden-mobile">Features</a>
          <a class="navbar-item is-tab is-hidden-mobile">Pricing</a>
          <a class="navbar-item is-tab is-hidden-mobile">About</a>

          <button class="button navbar-burger" data-target="navMenu">
            <span></span>
            <span></span>
            <span></span>
          </button>

        </div>


        <div class="navbar-menu navbar-end" id="navMenu">
          <a class="navbar-item is-tab is-hidden-tablet is-active">Home</a>
          <a class="navbar-item is-tab is-hidden-tablet">Features</a>
          <a class="navbar-item is-tab is-hidden-tablet">Pricing</a>
          <a class="navbar-item is-tab is-hidden-tablet">About</a>
          <a class="navbar-item nav-tag">
            <span class="icon is-small">
              <i class="fa fa-envelope-o"></i>
            </span>
            <span class="tag is-primary tag-notif">6</span>
          </a>
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              <figure class="image is-32x32" style="margin-right:.5em;">
                {{-- <img src="https://avatars1.githubusercontent.com/u/7221389?v=4&s=32"> --}}
              </figure>
              Nusendra
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
            General
          </p>
          <ul class="menu-list">
            <router-link to="/su">Home</router-link>
            <li><a class="is-active" href="#"><span class="icon is-small"><i class="fa fa-tachometer"></i></span> Dashboard</a></li>
          </ul>
          <p class="menu-label">
            Administration
          </p>
          <ul class="menu-list">
            <li><a href="/bulma-admin-dashboard-template/forms.html"><span class="icon is-small"><i class="fa fa-pencil-square-o"></i></span> Forms</a></li>
            <li><a href="/bulma-admin-dashboard-template/ui-elements.html"><span class="icon is-small"><i class="fa fa-desktop"></i></span> UI Elements</a></li>
            <li><a href="/bulma-admin-dashboard-template/tables.html"><span class="icon is-small"><i class="fa fa-table"></i></span> Tables</a></li>
            <li><a href="/bulma-admin-dashboard-template/presentations.html"><span class="icon is-small"><i class="fa fa-bar-chart"></i></span> Presentations</a></li>

            <li>
              <a class=""><i class="fa fa-cog"></i> Settings</a>
              <ul>
                <li><a>Members</a></li>
                <li><a>Plugins</a></li>
                <li><a>Add a member</a></li>
              </ul>
            </li>
          </ul>
          <p class="menu-label">
            Live On
          </p>
          <ul class="menu-list">
            <li><a><span class="icon is-small"><i class="fa fa-bug"></i></span> Additional Pages</a></li>
            <li><a><span class="icon is-small"><i class="fa fa-windows"></i></span> Extras</a></li>
            <li><a><span class="icon is-small"><i class="fa fa-laptop"></i></span> Landing Page</a></li>
          </ul>
        </nav>
      </aside>
      <router-view></router-view>
    </div>
  </div>
</body>

</html>

<script src="js/app.js" charset="utf-8"></script>
