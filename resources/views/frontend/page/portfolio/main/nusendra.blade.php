@extends('frontend.master')
@section('title','Nusendra.com - Nusendra.com')
@section('description',"Personal Web Blog")

@section('content')
<header class="masthead">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Nusendra.com</h1>
          <p>
            <span class="subheading">Personal Website dan Blog</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</header>
<article>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
                <table class="table table-hover">
                    <tr>
                        <td width="30%">Nama</td>
                        <td>Nusendra.com</td>
                    </tr>
                    <tr>
                        <td>Tahun</td>
                        <td>2017 - sekarang</td>
                    </tr>
                    <tr>
                        <td>Kategori Project</td>
                        <td>Web App</td>
                    </tr>
                    <tr>
                        <td>Tech Stack</td>
                        <td>PHP (Laravel Framework), JavaScript (Vue.js), OneSignal, Bootstrap 4, PWA, Highlight.js</td>
                    </tr>
                </table>
                <p>
                    <h3>Detail Project</h3>
                </p>
                <p>
                    Website / Blog pribadi yang berisi opini pribadi dan membahas beberapa hal teknis mengenai pemrograman
                </p>
                <p>
                    <h3>Tech Detail</h3>
                </p>
                <p>
                    Website ini dibangun menggunakan PHP (Laravel Framework) sebagai core app nya. Backend dan Frontend di handle oleh PHP (karena masih pakai cloud hosting, bukan VPS). Untuk Admin panel nya sendiri menggunakan Vuejs.
                    Selain itu web blog ini sudah support PWA (Progressive Web App) untuk pengalaman pengguna yang lebih baik, yakni bisa di akses secara offline (second load) dan mengandalkan cache first untuk load halaman yang cepat dan responsive. Selain itu untuk desain saya serahkan kepada bootstrap untuk handling web responsive nya
                </p>
                <p>
                    <h3>Screenshots</h3>
                </p>
                <p>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="row">
                                <a href="https://farm2.staticflickr.com/1975/45226201311_1a2e5853ba.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-sm-3">
                                    <img src="https://farm2.staticflickr.com/1975/45226201311_1a2e5853ba.jpg" class="img-fluid" alt="nusendra-pwa-splash">
                                </a>
                                <a href="https://farm2.staticflickr.com/1953/45226201641_7a9c5a2147.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-sm-3">
                                    <img src="https://farm2.staticflickr.com/1953/45226201641_7a9c5a2147.jpg" class="img-fluid" alt="nusendra-pwa-addtohomescreen">
                                </a>
                                <a href="https://farm2.staticflickr.com/1915/30286919887_c65e25c957.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-sm-3">
                                    <img src="https://farm2.staticflickr.com/1915/30286919887_c65e25c957.jpg" class="img-fluid" alt="nusendra-pwa-a2hs">
                                </a>
                                <a href="https://farm2.staticflickr.com/1963/30286919827_331204482f.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-sm-3">
                                    <img src="https://farm2.staticflickr.com/1963/30286919827_331204482f.jpg" class="img-fluid" alt="nusendra-pwa-notification">
                                </a>
                                <a href="https://farm2.staticflickr.com/1924/45226200861_3996d4cbf4.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-sm-3">
                                    <img src="https://farm2.staticflickr.com/1924/45226200861_3996d4cbf4.jpg" class="img-fluid" alt="nusendra-pwa-nowoffline">
                                </a>
                                <a href="https://farm2.staticflickr.com/1932/30286919617_5ddcdcb3f7.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-sm-3">
                                    <img src="https://farm2.staticflickr.com/1932/30286919617_5ddcdcb3f7.jpg" class="img-fluid" alt="nusendra-pwa-offlineaccess">
                                </a>
                                <a href="https://farm2.staticflickr.com/1913/45226200611_9f73ae4253.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-sm-3">
                                    <img src="https://farm2.staticflickr.com/1913/45226200611_9f73ae4253.jpg" class="img-fluid" alt="nusendra-pwa-offlinehome">
                                </a>
                                <a href="https://farm2.staticflickr.com/1904/44315463185_c44457a88b.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-sm-3">
                                    <img src="https://farm2.staticflickr.com/1904/44315463185_c44457a88b.jpg" class="img-fluid" alt="nusendra-pwa-permission-notification">
                                </a>
                                <a href="https://farm2.staticflickr.com/1933/45226200061_c37cbca8fe.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-sm-3">
                                    <img src="https://farm2.staticflickr.com/1933/45226200061_c37cbca8fe.jpg" class="img-fluid" alt="nusendra-pwa-homepage">
                                </a>
                                
                            </div>
                        </div>
                    </div>
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