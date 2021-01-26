@extends('frontend/layouts/main')

@section('custom_css')
<link href="{{ asset('assets/css/style-brillian.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="bg-artikel p-2">
	<div class="w-100">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="title-about mt-3 mb-3">
						Hasil Pencarian
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<p class="search-result">{{ $total }} hasil ditemukan untuk kata kunci <span class="font-weight-bold">"{{ $keyword }}"</span></p>
				</div>
			</div>
		</div>
	</div>


	<div class="container bg-white pt-4 pb-1 box-art">
		<div class="row">
			@foreach ($articles as $article)
			<div class="col-md-6 col-sm-6 col-12 pl-md-5 pr-md-5">
				<div class="row d-flex  mb-4 article-area">
					<div class="col-7 col-7 d-flex align-items-start">
						<div><a href="{{ url('article/detail/').'/'.$article->slug }}"><img src="{{ asset($article->picture) }}" class="w-100" alt=""></a></div>
					</div>
					<div class="col-5 pl-0 pr-1 d-flex align-items-end">
						<div>
							<a href="{{ url('article/detail/').'/'.$article->slug }}" title="">
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
@endsection

@section('custom_js')
@endsection