@extends('templates/layouts/main')

@section('custom_css')
<link href="{{ asset('assets/css/style-brillian.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="w-100">
	<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-12 d-flex justify-content-center">
					<h3 class="title-about my-5 text-uppercase" style="color: #eb8201">
						Result
					</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="maag-result-area p-3 mt-5 mb-5" style="background-color: #fff5e5; border-color: #fffbf5">
				<div class="maag-result-image-area d-flex justify-content-center">
					<img src="{{ asset('assets/img/akut-gerd.png') }}" class="" alt="">
				</div>

				<div class="maag-result-title-area">
					<h4 style="color: #4a4a4a" class="text-center">Kamu menderita</h4>
					<h2 style="color: #eb8201
" class="text-center mb-3">Sakit Maag akut yang disertai GERD</h2>
					<div class="line-dotted mb-3" style="border-color: #e8d0ab"></div>
				</div>

				<div class="maag-result-content-area">
					<p>Sakit maag akut yang disebabkan GERD disebabkan oleh pola makan dan gaya hidup kamu, yaitu :</p>

					<div class="maag-result-list-area pt-3 pb-2 pr-3 mb-3" style="background: #FFF9F1">
						<ul>
							<li>suka konsumsi makanan asam</li>
							<li>suka konsumsi makanan pedas</li>
							<li>suka konsumsi gorengan</li>
						</ul>
					</div>

					<p>Sakit maag Akut jangan dibiarkan agar tidak meningkat menjadi kronis. Kondisi GERD dapat menyebabkan luka pada kerongkongan akibat tingginya derajat keasaman dari asam lambung yang naik tersebut bila tidak segera ditangani akan menganggu aktivitas sehari-hari bahkan bisa menyebabkan penyakit yang lebih parah contohnya kanker.</p>

					<p>Segera minum obat maag H2 Blocker dengan aksi ganda, Antasida yang berfungsi menetralkan asam lambung dan meredakan sakit maag dan Acid Blocker untuk menghentikan produksi asam lambung.</p>

					<p>Tips, yaitu :</p>

					<div class="maag-result-list-area pt-3 pb-2 pr-3 mb-3" style="background: #FFF9F1">
						<ul>
							<li>Hindari makanan asam</li>
							<li>Hindari makanan pedas</li>
							<li>Hindari gorengan</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>			

<div class="maag-result-slider mb-5">
	<div class="container">
		<div class="row">
			<div class="owl-carousel owl-theme owl-maag-meter">
	            <div class="item">
	                <div class="img-product w-100 text-center mb-2">
	                    <img src="{{asset('assets/img/group-7.png')}}" alt="">
	                </div>
	                <div class="maag-result-name-product cl-younggreen w-100 d-flex justify-content-center mb-4">
	                    <img src="{{asset('assets/img/promag.png')}}" class="mr-2" alt="">
	                    <span>Double Action</span>
	                </div>
	                <div class="w-100 float-left text-center">
	                    <a href=""><button type="button" class="btn mx-auto btn-maag-result py-2 px-3 cl-white text-center  mb-5">Lihat Detail</button></a>
	                </div>
	            </div>

	            <div class="item">
	                <div class="img-product w-100 text-center mb-2">
	                    <img src="{{asset('assets/img/group-7.png')}}" alt="">
	                </div>
	                <div class="maag-result-name-product cl-younggreen w-100 d-flex justify-content-center mb-4">
	                    <img src="{{asset('assets/img/promag.png')}}" class="mr-2" alt="">
	                    <span>Double Action</span>
	                </div>
	                <div class="w-100 float-left text-center">
	                    <a href=""><button type="button" class="btn mx-auto btn-maag-result py-2 px-3 cl-white text-center  mb-5">Lihat Detail</button></a>
	                </div>
	            </div>
	        </div>
		</div>
	</div>
</div>			

@endsection

@section('custom_js')

<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>

@endsection