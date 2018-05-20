@extends('frontend.master')
{{-- @section('title',$post->judul . ' - Nusendra.com')
@section('description',$post->ringkasan) --}}

@section('content')
<section class="post-area brengsek">
	<div class="jumbotron jumbotron-fluid jumbo">
		<div class="container">
			<div class="row">
				<div class="col-md-1"></div>
					<div class="col-md-10">
						<div class="main-post">
							<div class="post-top-area text-center">
								<h1 class="display-4">{{ $post->judul }}</h1><br>
								<p><h4>{{ $post->tgl_terbit }}</h4></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="main-post">
					<div class="post-top-area">
						{!! $post->isi !!}
						<br>
						<div id="disqus_thread"/>
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
.post-top-area p {
		font-family: "Times New Roman", Times, serif;
		font-size: 22px;
		line-height: 2.3rem;
}
ol li {
	font-family: "Times New Roman", Times, serif;
		font-size: 22px;
		line-height: 2.3rem;
}
</style>