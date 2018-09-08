@extends('frontend.master')
@section('title','Nusendra.com - VRE XMPP Client')
@section('description',"Nusendra's portfolio - VRE XMPP Client")

@section('content')
<header class="masthead">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>VRE XMPP CLIENT</h1>
          <p>
            <span class="subheading">Mini app untuk menerima order transaksi dari customer dan juga mengirim pesan transaksi pembelian / order ke supplier</span>
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
                        <td>VRE - XMPP Client</td>
                    </tr>
                    <tr>
                        <td>Tahun</td>
                        <td>2016</td>
                    </tr>
                    <tr>
                        <td>Kategori Project</td>
                        <td>Desktop App (Windows)</td>
                    </tr>
                    <tr>
                        <td>Client</td>
                        <td>DD-Tronik</td>
                    </tr>
                    <tr>
                        <td>Tech Stack</td>
                        <td>C#.NET, MySQL, Node.js, XMPP Library</td>
                    </tr>
                </table>
                <p>
                    <h3>Detail Project</h3>
                </p>
                <p>
                    Dalam melakukan pembelian atau penjualan (transaksi) pulsa bisa melalui banyak cara, bisa melalui IP (XML), SMS dan Yahoo Messenger (sekarang sudah tidak bisa). Salah satu cara yang paling efektif adalah dengan melalui internet, karena bebas biaya SMS.
                </p>
                <p>
                    Jika melakukan transaksi menggunakan tembak ke IP public (XML), disisi kita juga harus ada IP Static Public, jika tidak maka tidak bisa pakai metode ini. Maka dari itu kita memanfaatkan protokol xmpp untuk bertukar data (transaksi), dulu kita biasa pakai YM namun karena YM sudah tidak beroperasi, maka harus cari alternatif lain. Yakni xmpp yang sekarang ini berhasil menggantikan posisi YM.
                </p>
                <p>
                    <h3>Tech Detail</h3>
                </p>
                <p>
                    Awalnya aplikasi ini dibangun menggunakan C#.NET dengan library <code>agsXMPP SDK</code>, namun karena sudah banyak provider xmpp yang melakukan upgrade sistem, library ini sudah tidak bisa mengikuti lagi dan memang seperti nya sudah <i>outdated</i>
                </p>
                <p>
                    Maka saya membuat XMPP client yang saya buat menggunakan Node.js dan library <code>node-simple-xmpp</code>. Sampai saat ini (2018) berjalan dengan sempurna dan ringan.
                </p>
                <p>
                    <h3>Screenshots</h3>
                </p>
                <p>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="row">
                                <a href="https://farm6.staticflickr.com/5513/30214610936_229e30a2c5_c.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-sm-3">
                                    <img src="https://farm6.staticflickr.com/5513/30214610936_229e30a2c5_q.jpg" class="img-fluid" alt="VRE XMPP Client">
                                </a>
                                <a href="https://farm2.staticflickr.com/1885/42736371610_cba1a006d0_z.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-sm-3">
                                    <img src="https://farm2.staticflickr.com/1885/42736371610_cba1a006d0_q.jpg" class="img-fluid" alt="VRE XMPP Client">
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