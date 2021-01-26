@extends('frontend/layouts/main')

@section('custom_css')
<link href="{{ asset('assets/css/style-brillian.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="bg-artikel">
<div class="w-100">
	
	<div class="container mb-5">
		<div class="row">
			<div class="col-12">
				<h3 class="title-about title-splist mt-3 mb-3">
					Fakta & Mitos Maag
				</h3>
				<form action="{{ url('search') }}">
				<input type="hidden" name="type" value='Fact'>
					<div class="input-group search-box mb-3">
						
						<input type="text" name="keyword" class="search-text border-right-0 form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-search  border-left-0" type="submit"><img src="{{asset('assets/img/icons8-search-25.png')}}" alt=""></button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-6 button-artikel-area  d-flex justify-content-between align-items-center">
				<select class="custom-select w-100 select-sort-by" id="sortby">
					<option selected value=''>Sort By</option>
					<option value="1" {{ $sortby == 1 ? 'selected':'' }}>Latest</option>
					<option value="2" {{ $sortby == 2 ? 'selected':'' }}>Popular</option>
					<option value="3" {{ $sortby == 3 ? 'selected':'' }}>Oldest</option>
				</select>
			</div>
			<div class="col-6 button-artikel-area  d-flex justify-content-between align-items-center">
				<select id="cat" name="category" class="custom-select w-100 select-category ">
					<option selected value=''>Category</option>
					@php
						$article_categories = \App\ArticleCategory::where('type','Fact')->get();
					@endphp
					@foreach ($article_categories as $cat )
						<option {{ $category == $cat->id ? 'selected' : '' }} value="{{ $cat->id }}">{{ $cat->name }}</option>
						
					@endforeach
				</select>
			</div>
		</div>
	</div>
</div>

{{-- <div class="container mb-5">
	<div class="row">
		<div class="col-12 button-artikel-area d-flex justify-content-between align-items-center">
			<select id="sortby" name="sortby" class="custom-select w-100 select-sort-by">
				<option selected value=''>Sort By</option>
				<option value="1" {{ $sortby == 1 ? 'selected':'' }}>Latest</option>
				<option value="2" {{ $sortby == 2 ? 'selected':'' }}>Popular</option>
				<option value="3" {{ $sortby == 3 ? 'selected':'' }}>Oldest</option>
			</select>
		</div>
		
	</div>
</div> --}}
<div id="article_list_data">
	<div id="ajax">
		<div class="container bg-white pt-3 pb-1">
			<div class="row">
				@foreach ($articles as $article)
				<div class="col-md-6 col-sm-6 col-12 pl-md-5 pr-md-5">
					<div class="row d-flex align-items-end mb-4 article-area">
						<div class="col-7">
							<a href="{{ url('seputar-maag/fact/detail/').'/'.$article->slug }}"><img src="{{ asset($article->picture) }}" class="w-100" alt=""></a>
						</div>
						<div class="col-5 pl-0 pr-1">
							<a href="{{ url('seputar-maag/fact/detail/').'/'.$article->slug }}" title="">
								<p class="article-small-text">
									{{ $article->Category->name }}
								</p>
								<p class="article-title">
									{{ $article->title }}
								</p>
								<p class="article-date">
									{{ date("d F Y",strtotime($article->created_at)) }}
								</p>
							</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12 d-flex justify-content-center pagination-area pt-5">
					{{ $articles->appends(request()->query())->links('frontend/pagination/article') }}
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection

@section('custom_js')

	<script>

		$(document).on('change', '#sortby, #cat', function() {
			loadMobile();
		});

		function loadMobile() {
			var category = $("#cat").val();
			var sortby = $("#sortby").val();
			var current_url = location.protocol + '//' + location.host + location.pathname;
			var newurl = current_url + "?category="+category+"&sortby=" + sortby ;

			window.history.pushState('Object', 'Title', newurl);

			$("#article_list_data").load(newurl+' #ajax');
		}
		
	</script>

@endsection