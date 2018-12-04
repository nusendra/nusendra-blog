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
          <a href="/portfolio/vre-ddcounter-operator">VRE - DDCounter Operator </a><code>*Desktop</code><br>
          <a href="/portfolio/vre-xmpp-client">VRE - XMPP Client </a><code>*Desktop</code><br>
        </p>
        <p>
          <h2>MAIN PROJECT</h2>
          <hr>
          <a href="/portfolio/ahtefe-counter-reload">Ahtefe Counter Reload </a><code>*Desktop</code><br>
          <a href="/portfolio/webmap-peruntukan-lahan-permukiman">Webmap Peruntukan Lahan Permukiman </a><code>*Web</code><br>
          <a href="/portfolio/nusendra-blog">Nusendra.com </a><code>*Web</code><br>
          <a href="/portfolio/bat-monitoring-project">Monitoring Project PT. Benteng Api Technic</a><code> *Web</code><br>
          <a href="/portfolio/payroll-and-man-power">Payroll and Man Power Control</a><code> *Web</code><br>
          <a href="/portfolio/e-pelaporan">e-Pelaporan Kab. Mojokerto</a><code> *Web</code><br>
          <a href="/portfolio/digigov">Digigov.id</a><code> *Web</code><br>
          <hr>
          <h2>ON PROGRESS</h2>
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
