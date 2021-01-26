@extends('frontend/layouts/main')

@section('content')
<!-- middle -->
<section class="articlebox sctop articleparallax">
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
		<div class="std-content">
			<h5>artikel</h5>
		</div>
		<form method='get'>
			<div class="filter">
				<div class="filter-left">
					<input type="text" placeholder="Cari Artikel" name="keyword" id="search-input">
				</div>
				<div class="filter-right">
					<label for="">Kategori :</label>
					@php
						$article_categories = \App\ArticleCategory::where('type','Article')->get();
					@endphp
					<select name="" id="category">
						<option value="">Semua Artikel</option>
						@foreach ($article_categories as $cat )
						<option {{ $category == $cat->id ? 'selected' : '' }} value="{{ $cat->id }}">{{ $cat->name }}</option>
						@endforeach
					</select>
					<label for="">Urutkan :</label>
					<select name="" id="sorting">
						<option value="1" {{ $sortby == 1 ? 'selected':'' }}>Latest</option>
						<option value="2" {{ $sortby == 2 ? 'selected':'' }}>Popular</option>
						<option value="3" {{ $sortby == 3 ? 'selected':'' }}>Oldest</option>
					</select>
				</div>
			</div>
		</form>

		<div class="article-list">

			@foreach ($articles as $article)
			<a href="{{ url('article/detail/').'/'.$article->slug }}" class="list">
				<figure><img src="{{ asset($article->picture) }}" alt="{{$article->alt_image}}"></figure>
				<div class="desc">
					<span>{{ $article->Category->name }}</span>
					<h4>{{ $article->title }}</h4>
				</div>
			</a>
			@endforeach
	
		</div>

		<div class="pagination">
			<!-- <a href="">01</a>
			<a href="" class="active">02</a>
			<a href="">03</a>
			<a href="">04</a>
			<a href="">05</a> -->
			{{ $articles->appends(request()->query())->links('frontend/pagination/article') }}
		</div>
	</div>
</section>
<!-- end of middle -->		

@endsection

@section('custom_js')
<script type="text/javascript" src="/js/jquery.query-object.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	var url = new URL(document.location);
	var param = url.searchParams;
	var keyword = param.get('keyword');
	if(keyword) {
		$('#search-input').val(keyword)
	}
	$('#sorting').change(function(e) {
		var url = new URL(document.location);
		var search_params = url.searchParams;
		search_params.set('sortby', $('#sorting option:selected').val());
		// change the search property of the main url
		url.search = search_params.toString();

		// the new url string
		var new_url = url.toString();
		return document.location = new_url
	})
	$('#category').change(function(e) {
		var url = new URL(document.location);
		var search_params = url.searchParams;
		search_params.set('category', $('#category option:selected').val());
		// change the search property of the main url
		url.search = search_params.toString();

		// the new url string
		var new_url = url.toString();
		return document.location = new_url
	})

});
</script>
@endsection
