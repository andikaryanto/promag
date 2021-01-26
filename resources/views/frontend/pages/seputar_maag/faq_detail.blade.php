@extends('frontend/layouts/main')

@section('custom_css')
<link href="{{ asset('assets/css/style-brillian.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="bg-artikel p-2">
	<div class="w-100">
		<div class="container">
			<div class="row">
				<div class="col-12 mt-4 mb-4">
					<a href="{{ url('article/list') }}" class="back-to" title="">< Back to article list</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container bg-white pt-3">
		<div class="row">
			<div class="col-12 artikel-detail">
				<img src="{{ asset($detail->picture) }}" class="mb-4" alt="">
				<div class="article-title">
					<h1> {{ $detail->title }} </h1>
				</div>
				<p class="article-date text-left mb-4">
					{{ date("d F Y",strtotime($detail->created_at)) }}
				</p>

				<div class="content-area mb-4">
					{!! $detail->detail !!}
				</div>		

				<div class="tagcloud01 mb-3">
					@php
						$tags = explode('|',$detail->tags);
					@endphp
					@if(count($tags))
					<ul>
						@foreach ($tags as $key => $tag )
							<li><a href="{{ url('article/list')."?tag=".$tag }}">{{ $tag }}</a></li>
						@endforeach
						
					</ul>
					@endif
				</div>		

				<div class="social-share pb-2 mb-5">
					<ul class="list-inline a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="{{ url('article/detail/'.$detail->slug) }}">
						<li class="list-inline-item">SHARE WITH</li>
						<li class="list-inline-item">
							<a href="#" title="" class="a2a_button_facebook">
								<img src="{{ asset('assets/img/logo-facebook.png') }}" class="w-100" alt="">
							</a>
						</li>
						<li class="list-inline-item" >
							<a href="#" title="" class="a2a_button_twitter">
								<img src="{{ asset('assets/img/logo-twitter.png') }}" class="w-100" alt="">
							</a>
						</li>
						
					</ul>
				</div>			
			</div>
		</div>
	</div>
	@if(count($others)>0)

	<div class="container bg-white">
		<div class="row ">
			<div class="col-12">
				<h3 class="title-about mb-4">
					Artikel Terkait
				</h3>
			</div>
		</div>
	</div>

	<div class="container bg-white pb-1 mb-4">
		<div class="row">
			@foreach ($others as $article )
				<div class="col-lg-4 col-md-6 col-sm-6 col-12">
					<a href="{{ url('article/detail/'.$article->slug) }}">
					<div class="row artikel-terkait mb-3">
						<div class="col-5 pr-0">
							<img src="{{ asset($article->picture) }}" class="w-100" alt="">
						</div>
						<div class="col-7">
							<p class="article-title">
								{{ $article->title }}
							</p>
							<div class="article-excerpt">
								{!! $article->description !!}
							</div>
						</div>
						<div class="col-12">
							<div class="artikel-terkait-line w-100 mt-2"></div>
						</div>
					</div>
					</a>	
				</div>
			@endforeach
		</div>
	</div>
</div>
@endif
@endsection

@section('custom_js')
<script async src="https://static.addtoany.com/menu/page.js"></script>
@endsection