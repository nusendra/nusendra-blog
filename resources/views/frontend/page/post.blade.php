@extends('frontend.master')
{{-- @section('title',$post->judul . ' - Nusendra.com')
@section('description',$post->ringkasan) --}}

@section('content')
<section class="post-area brengsek">
		<div class="container">
			<div class="row">
					<pre>{{$post}}</pre>
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="main-post">
						<div class="post-top-area">
						<div class="judul">
							<h2>{{ $post->judul }}</h2>
							{{ $post->tgl_terbit }}
						</div>
							{!! $post->isi !!}
						</div><!-- post-top-area -->
					</div><!-- main-post -->
				</div><!-- col-lg-8 -->
			</div><!-- row -->
		</div><!-- container -->
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

<style>
.judul {
	font-family: "Times New Roman", Times, serif;
	margin-top: 5%;
	margin-bottom: 5%;
}
.post-top-area p {
		font-family: "Times New Roman", Times, serif;
		font-size: 22px;
		line-height: 2.3rem;
}
</style>