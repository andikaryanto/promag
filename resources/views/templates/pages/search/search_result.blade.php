@extends('templates/layouts/main')

@section('custom_css')
<link href="{{ asset('assets/css/style-brillian.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="w-100">
	<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="title-about mt-3 mb-3">
						Hasil Pencarian
					</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container mb-3">
	<div class="row">
		<div class="col-12">
			<p class="search-result">2 results found for <span class="font-weight-bold">"Lambung"</span></p>
		</div>
	</div>
</div>	

<div class="container">
	<div class="row d-flex align-items-end mb-4 article-area">
		<div class="col-7">
			<img src="{{ asset('assets/img/img-article-1.png') }}" class="w-100" alt="">
		</div>
		<div class="col-5 pl-0 pr-1">
			<a href="#" title="">
				<p class="article-small-text">
					Ahlinya Lambung
				</p>
				<p class="article-title">
					Solusi Aman Atasi Perut Kembung
				</p>
				<p class="article-date">
					24 Okt 2019
				</p>
			</a>
		</div>
	</div>

	<div class="row d-flex align-items-end mb-4 article-area">
		<div class="col-7">
			<img src="{{ asset('assets/img/img-article-2.png') }}" class="w-100" alt="">
		</div>
		<div class="col-5 pl-0 pr-1">
			<a href="#" title="">
				<p class="article-small-text">
					Ahlinya Lambung
				</p>
				<p class="article-title">
					Solusi Aman Atasi Perut Kembung
				</p>
				<p class="article-date">
					24 Okt 2019
				</p>
			</a>
		</div>
	</div>

	<div class="row d-flex align-items-end mb-4 article-area">
		<div class="col-7">
			<img src="{{ asset('assets/img/img-article-2.png') }}" class="w-100" alt="">
		</div>
		<div class="col-5 pl-0 pr-1">
			<a href="#" title="">
				<p class="article-small-text">
					Ahlinya Lambung
				</p>
				<p class="article-title">
					Solusi Aman Atasi Perut Kembung
				</p>
				<p class="article-date">
					24 Okt 2019
				</p>
			</a>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12 d-flex justify-content-center pagination-area pt-5">
			<ul class="pagination">
			  <li class="page-item"><a class="page-link" href="#">
			  	<i class="fa fa-angle-left" aria-hidden="true"></i>
			  </a></li>
			  <li class="page-item"><a class="page-link" href="#">1</a></li>
			  <li class="page-item active"><a class="page-link" href="#">2</a></li>
			  <li class="page-item"><a class="page-link" href="#">3</a></li>
			  <li class="page-item"><a class="page-link" href="#">
			  	<i class="fa fa-angle-right" aria-hidden="true"></i>
			  </a></li>
			</ul>
		</div>
	</div>
</div>					
@endsection

@section('custom_js')
@endsection