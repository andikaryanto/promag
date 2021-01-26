@extends('frontend/layouts/main')

@section('custom_css')
<link href="{{ asset('assets/css/style-brillian.css') }}" rel="stylesheet" />




@endsection

@section('content')
<div class="bg-artikel p-2">
	<div class="w-100">
		<div class="container">
			<div class="row">
				<div class="col-12 my-3">
					<a href="{{ url('/') }}" class="back-to" title="">< Back to Home</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container bg-white pt-3">
		<div class="row">
			<div class="col-12 artikel-detail">
				
				<div class="article-title">
					<h1> {{ $title }} </h1>
				</div>
				<p class="article-date-detail text-left mb-4">
                </p>
				<div class="content-area mb-4">
					{!! $detail->content !!}
				</div>		

				

						
			</div>
		</div>
	</div>
	
@endsection

@section('custom_js')
<script async src="https://static.addtoany.com/menu/page.js"></script>
@endsection