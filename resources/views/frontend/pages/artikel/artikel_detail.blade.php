@extends('frontend/layouts/main')

@section('custom_css')
<style>
.std-content h2 {
	font-weight: 600 !important;
	font-size: 28px;
}
.std-content h2 b {
	color: #000 !important;
	font-weight: 600;	
	font-size: 28px !important;
}
.std-content h2 span {
	font-weight: 600 !important;	
}
.std-content p font {
	font-size: 16px ;
	line-height: 28px !important;
	color: rgba(0,23,31,.8);	
}
.std-content span {
	font-size: 16px ;
	line-height: 28px !important;
	color: rgba(0,23,31,.8);	
}
.std-content h4 {
	margin-bottom: 10px;
	margin-top: 15px;
}

.std-content ul {
	margin-top: 25px !important
}
.std-content ul li {
	margin-bottom: 20px !important;
	font-size: 16px;
}
.std-content ul li{
	font-size: 16px ;
	line-height: 28px !important;
	color: rgba(0,23,31,.8);
}
.std-content h1, h2, h3,h4,h5,h6,p,span,ul,li,ol {
	font-family: 'Lato', sans-serif !important;
}
.std-content h1, h2, h3,h4,h5,h6 {
	margin-bottom: 15px;
	line-height: 1.5;
}
.std-content h3 {
	font-size: 26px;
}
</style>
@endsection
@section('content')
<!-- middle -->
<section class="articledet sctop articleparallax">
	<div class="objsctop">
		<span class="objgrey"></span>
		<span class="objbg"></span>
		<span class="objmd"></span>
		<span class="objsm"></span>
		<span class="circle-green"></span>
	</div>
	<div class="obj-articlebox">
		<span class="circlesm"></span>
		<span class="circle"></span>
		<span class="triangle-green"></span>
		<span class="dots-grey"></span>
		<span class="objright"></span>
	</div>
	<div class="wrapper">
		<div class="box-img">
			<img src="{{ asset($detail->picture) }}" alt="{{ $meta['alt_image'] }}">
		</div>
	</div>
</section>

<section class="article-content">
	<div class="wrapper">
		<div class="ttl-article std-content">
			<h5>{{ $detail->Category->name }}</h5>
			<h1 style="font-size:34px; line-height: 40px;font-weight:300;">{{ $detail->title }}</h1>
			<span>{{ date("d F Y",strtotime($detail->created_at)) }} - 3 menit membaca</span>
		</div>
		<div class="std-content">
			{!! $detail->detail !!}
		</div>

		<div class="share-box">
			<label>Bagikan Artikel</label>
			<a href="{{ url('article/detail/'.$detail->slug) }}" class="fb">Facebook</a>
			<a href="{{ url('article/detail/'.$detail->slug) }}" class="tw">Twitter</a>
			<a href="{{ url('article/detail/'.$detail->slug) }}" class="ig">Instagram</a>
		</div>

		<div class="ttl-article std-content">
			<h5>Artikel Terkait</h5>
		</div>
		<div class="article-list threelist">
			@foreach ($others as $article )
			<a href="article_detail.php" class="list">
				<figure><img src="{{ asset($article->picture) }}" alt="{{ $article->picture }}"></figure>
				<div class="desc">
					<span>{{ $article->Category->name }}</span>
					<h4>{{ $article->title }}</h4>
				</div>
			</a>
			@endforeach

		</div>
	</div>
</section>
<!-- end of middle -->

@endsection