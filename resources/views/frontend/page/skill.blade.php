@extends('frontend.master')
@section('title','Nusendra.com - Skills')
@section('description','Skillset nusendra')

@section('content')
<header class="masthead">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>SKILLS</h1>
          <p/>
          <span class="subheading">Apa saja dan bagaimana dengan keahlian saya ..</span>
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
          Saya gak akan sebutin berapa persen skill saya di bidang ini dan di bidang itu seperti kebanyakan orang ketika bikin CV.
          Yang jelas, <i> I'm good enough with PHP and Javascript</i>. Untuk PHP sendiri saya pakai framework <code>Laravel</code> (untuk full stack) dan <code>Lumen</code> (microservice) sebagai backend nya.
          Untuk backend di javaScript, saya pakai <code>nodeJS</code> dengan <code>ExpressJS</code> sebagai framework nya. Kalau urusan frontend, saya memakai javascript juga dengan <code>VueJS</code> sebagai framework utama saya.
          Lebih jauh lagi, saya menggunakan <code>NuxtJS</code> untuk handle SSR dan mempermudah dalam ngoding vuejs. Sebagai catatan, saya gak begitu jago kalau urusan design / styling (CSS).
        </p>
        <p>
          Untuk mobile development, saya memilih <code>React Native</code>. Karena sudah terbiasa dengan bahasa js, jadi untuk mempercepat development dengan performa yang baik, saya pilih React Native ini.
        </p>
        <p>
          Database sendiri saya lebih kearah <i>relational database</i> karena udah terbiasa ngerjain project yang butuh relasi antar banyak table. Untuk noSQL sendiri (MongoDB) saya tidak terlalu mendalami.
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