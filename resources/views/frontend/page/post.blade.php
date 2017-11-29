@extends('frontend.master')
@section('title','Nusendra.com - Blog Post')
@section('description',$post->ringkasan)
@section('hero-title',$post->judul)
@section('hero-description',$post->ringkasan)
@section('content')

<section class="container section">
	<div class="content columns">
		<div class="column is-three-quarters">
			{!! $post->isi !!}
			<hr>
			<div id="disqus_thread"></div>
		</div>
		<div class="column">
			<nav class="panel">
				<p class="panel-heading">Kategori Blog</p>
				@foreach ($kategori as $value)
				<a class="panel-block" href="/kategori/{{$value->kategori}}">
					<span class="panel-icon">
						<i class="fa fa-check"></i>
					</span> {{$value->kategori}}</a>
				@endforeach
			</nav>
		</div>
	</div>
</section>

@endsection

<script type="text/javascript">
	(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://https-nusendra-com.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();

</script>
