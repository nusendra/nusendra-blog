@extends('frontend.master')
@section('title','Nusendra.com - DIGIGOV')
@section('description',"Nusendra's Portfolio - DIGIGOV'")

@section('content')
<header class="masthead">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>DIGIGOV</h1>
          <p>
            <span class="subheading">Sebuah Web Company Profile DIGIGOV - Digital Goverment</span>
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
                        <td>DIGIGOV</td>
                    </tr>
                    <tr>
                        <td>Tahun</td>
                        <td>2018 - sekarang</td>
                    </tr>
                    <tr>
                        <td>Kategori Project</td>
                        <td>Website</td>
                    </tr>
                    <tr>
                        <td>Tech Stack</td>
                        <td>Nuxtjs Static Generated</td>
                    </tr>
                </table>
                <p>
                    <h3>Detail Project</h3>
                </p>
                <p>
                    Web company profile sebuah startup yang berkecimpung di dunia pemerintahan. Mempunyai misi untuk mendigitalisasikan sistem yang ada di pemerintahan secara terintegrasi
                </p>
                <p>
                    <h3>Tech Detail</h3>
                </p>
                <p>
                    Web ini dibangung menggunakan Nuxt.js static site dan mengimplementasikan sebagian kecil fungsi dari PWA
                </p>
                <p>
                    <h3>Screenshots</h3>
                </p>
                <p>
                    Tidak ada screenshot, langsung menuju ke halaman web nya saja. <a href='https://digigov.id'>digigov.id</a>
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
