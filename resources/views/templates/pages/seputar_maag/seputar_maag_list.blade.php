@extends('templates/layouts/main')

@section('custom_css')
<link href="{{ asset('assets/css/style-brillian.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="bg-artikel">
	<div class="w-100">
		<div class="page-content">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class="title-about mt-3 mb-3">
							Gejala & Penyebab Maag
						</h3>
						<form action="">
							<div class="input-group search-box mb-3">
								<input type="text" class="search-text border-right-0 form-control" placeholder="Search article" aria-label="Recipient's username" aria-describedby="basic-addon2">
								<div class="input-group-append">
									<button class="btn btn-search  border-left-0" type="button"><img src="{{asset('assets/img/icons8-search-25.png')}}" alt=""></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container mb-5">
		<div class="row">
			<div class="col-12 button-artikel-area d-flex justify-content-between align-items-center">
				<select class="custom-select w-100 select-sort-by">
					<option selected>Sort By</option>
					<option value="1">Latest</option>
					<option value="2">Popular</option>
					<option value="3">Oldest</option>
				</select>
			</div>
			{{-- <div class="col-6 button-artikel-area pl-0 d-flex justify-content-between align-items-center">
				<select class="custom-select w-100 select-category border-left-0">
					<option selected>Category</option>
					<option value="1">Lifestyle</option>
					<option value="2">Tips & Trick</option>
					<option value="3">Etc</option>
				</select>
			</div> --}}
		</div>
	</div>	

	<div class="container bg-white pt-3 pb-1">
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
</div>					
@endsection

@section('custom_js')
@endsection