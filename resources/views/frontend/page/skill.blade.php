@extends('frontend.master')
@section('title','Nusendra.com - Skills')
@section('hero-title','Skill Set')
@section('hero-description','Full Stack Web Developer | Desktop App Developer | Network Engineer | Blogger')

@section('content')
  <section class="container section">
    <p>
      Saya gak akan sebutin berapa persen skill saya di bidang ini dan di bidang itu seperti kebanyakan orang ketika bikin CV.
      Yang jelas, <i> I'm good enough with PHP and Javascript</i>. Untuk PHP sendiri saya pakai framework <code>Laravel</code> (untuk full stack) dan <code>Lumen</code> (microservice) sebagai backend nya.
      Untuk backend di javaScript, saya pakai <code>nodeJS</code> dengan <code>ExpressJS</code> sebagai framework nya. Kalau urusan frontend, saya memakai javascript juga dengan <code>VueJS</code> sebagai framework utama saya.
      Lebih jauh lagi, saya menggunakan <code>NuxtJS</code> untuk handle SSR dan mempermudah dalam ngoding vuejs. Sebagai catatan, saya gak begitu jago kalau urusan design / styling (CSS).
    </p>
    <p>
      Database sendiri saya lebih kearah <i>relational database</i> karena udah terbiasa ngerjain project yang butuh relasi antar banyak table. Untuk noSQL sendiri (MongoDB) saya tidak terlalu mendalami.
    </p>
    <p>
      <code>#FYI</code> saya sekarang sedang mengerjakan sistem ERP untuk perusahaan tempat saya bekerja, menggunakan teknologi NuxtJS sebagai frontendnya dan Lumen sebagai backend nya.
    </p>
  </section>
@endsection

<style>
  .container p {
      font-family: "Times New Roman", Times, serif;
      font-size: 20px;
      line-height: 2.3rem;
      margin-bottom : 3%;
  }
  </style>