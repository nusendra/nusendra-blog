@extends('frontend.master')
@section('title','Nusendra.com - Portfolio')
@section('description','Portfolio Nusendra')

@section('content')
<header class="masthead">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>PORTFOLIO</h1>
          <p/>
          <span class="subheading">Software yang pernah saya buat / kerjakan</span>
        </div>
      </div>
    </div>
  </div>
</header>
<article>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
        <p>
          <h2>SIDE PROJECT</h2>
          <hr>
          <a href="/portfolio/vre-price-manager">VRE - Price Manager </a><code>*Desktop</code><br>
          <a href="/portfolio/vre-gtalk-center-sender">VRE - Gtalk Center & Sender </a><code>*Desktop</code><br>
          <a href="/portfolio/vre-ddcounter">VRE - DDCounter </a><code>*Desktop</code><br>
          VRE - DDCounter Operator <code>*Desktop</code><br>
          VRE - Jabber Client <code>*Desktop</code><br>
        </p>
        <p>
          <h2>MAIN PROJECT</h2>
          <hr>
          Ahtefe Counter Reload <code>*Desktop</code><br>
          Webmap Peruntukan Lahan Permukiman <code>*Web</code><br>
          Nusendra.com <code>*Web</code><br>
          ERP PT. Benteng Api Technic <code>*Web</code><br>
          Ahtefe Pulsa Reload <code>*Mobile</code><br>
        </p>
        <hr>
        <p>
          Dan lainnya... (Sayang nya tidak terdokumentasi)
        </p>
      </div>
    </div>
	</div>
</article>
@endsection

<style>
	.col-lg-8 p {
		line-height: 2.3rem;
	}
</style>