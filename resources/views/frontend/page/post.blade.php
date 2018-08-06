@extends('frontend.master')
@section('title',$post->judul . ' - Nusendra.com')
@section('description',$post->ringkasan)

@section('content')
<header class="masthead">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="post-heading">
					<h1>{{ $post->judul }}</h1>
					<h2 class="subheading">{{ $post->ringkasan }}</h2>
					<span class="meta">
						on {{ $post->tgl_terbit }}
					</span>
				</div>
			</div>
		</div>
	</div>
</header>
<article>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				{!! $post->isi !!}
			</div>
		</div>
	</div>
</article>
@endsection

<script type="text/javascript">
	(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://https-nusendra-com.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();

</script>

<style>
	.col-lg-8 p {
		line-height: 2.3rem;
	}
</style>