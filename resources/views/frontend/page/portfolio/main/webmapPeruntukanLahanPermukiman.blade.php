@extends('frontend.master')
@section('title','Nusendra.com - Webmap Peruntukan Lahan Permukiman')
@section('description',"Nusendra's portfolio - Webmap Peruntukan Lahan Permukiman")

@section('content')
<header class="masthead">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>WEBMAP PERUNTUKAN LAHAN PERMUKIMAN</h1>
          <p>
            <span class="subheading">Aplikasi pencarian keputusan untuk menentukan peruntukan lahan permukiman di Gresik</span>
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
                        <td>Webmap Peruntukan Lahan Permukiman</td>
                    </tr>
                    <tr>
                        <td>Tahun</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <td>Kategori Project</td>
                        <td>Web App</td>
                    </tr>
                    <tr>
                        <td>Client</td>
                        <td>Kementrian Tata Kota Gresik</td>
                    </tr>
                    <tr>
                        <td>Tech Stack</td>
                        <td>ASP.NET with C#.NET, ArcGIS 10.2, PostgreSQL</td>
                    </tr>
                </table>
                <p>
                    <h3>Detail Project</h3>
                </p>
                <p>
                    Aplikasi ini berfungsi untuk menentukan lokasi yang paling cocok untuk tempat bermukim para masyarakat Gresik. Penentuan lokasi ini dihitung berdasarkan kontur tanah, kemiringan lahan, ketinggian lahan, jarak akses ke jalan raya, akses ke rumah sakit, akses ke sekolah, dll.
                </p>
                <p>
                    <h3>Tech Detail</h3>
                </p>
                <p>
                    Aplikasi ini dibangun menggunakan ASP.NET dengan C#.NET sebagai <i>code behind</i> nya. Untuk urusan data spatial saya menggunakan ArcGIS dengan versi 10.2. Untuk database saya menggunakan PostgreSQL, karena di PostgreSQL ini sudah mendukung data spatial.
                </p>
                <p>
                    <h3>Screenshots</h3>
                </p>
                <p>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="row">
                                <a href="https://farm9.staticflickr.com/8400/28298289152_d801d8f6e3_c.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-sm-3">
                                    <img src="https://farm9.staticflickr.com/8400/28298289152_d801d8f6e3_q.jpg" class="img-fluid" alt="Webmap Peruntukan Lahan Permukiman">
                                </a>
                                <a href="https://farm9.staticflickr.com/8778/28324027891_1e14b37030_c.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-sm-3">
                                    <img src="https://farm9.staticflickr.com/8778/28324027891_1e14b37030_q.jpg" class="img-fluid" alt="Webmap Peruntukan Lahan Permukiman">
                                </a>
                                <a href="https://farm9.staticflickr.com/8753/28298288582_1c2660da91_z.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-sm-3">
                                    <img src="https://farm9.staticflickr.com/8753/28298288582_1c2660da91_q.jpg" class="img-fluid" alt="Webmap Peruntukan Lahan Permukiman">
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