@extends('templates/layouts/main')

@section('custom_css')
<link href="{{ asset('assets/css/style-brillian.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="w-100 pb-3">
	<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-12 d-flex justify-content-center">
					<h3 class="title-about my-5 text-uppercase" style="color: #01ab52">
						Result
					</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container mt-5">
	<div class="row">
		<div class="col-12">
			<div class="maag-result-area p-3 mt-5 mb-5" style="background-color: #fff5e5; border-color: #fffbf5">
				<div class="maag-result-image-area d-flex justify-content-center">
					<img src="{{ asset('assets/img/lambung-4-gerd-copy.png') }}" class="" alt="">
				</div>

				<div class="maag-result-title-area">
					<h4 style="color: #4a4a4a" class="text-center">Kamu bisa jadi mengalami</h4>
					<h2 style="color: #f5a623" class="text-center mb-3">GERD (Refluks Gastroesofageal )</h2>
					<div class="line-dotted mb-3" style="border-color: #fad48f"></div>
				</div>

				<div class="maag-result-content-area mb-3">
					<p>GERD disebabkan oleh pola makan dan gaya hidup kamu, yaitu :</p>
					<div class="w-100 px-4 pt-4" style="background: #ECF3F0">
						<div class="row row-set7">
							<div class="col-6 p-set7 mb-3">
								<div class="img-result position-relative">
									<div class="coverhijau position-absolute w-100"></div>
									<img src="{{asset('assets/img/imgresult-1.png')}}" alt="">
								</div>
							</div>
							<div class="col-6 p-set7 img-result mb-3">
								<div class="img-result position-relative">
									<div class="coverhijau position-absolute w-100"></div>
									<img src="{{asset('assets/img/imgresult-2.png')}}" alt="">
								</div>
							</div>
							<div class="col-6 p-set7 img-result mb-3">
								<div class="img-result position-relative">
									<div class="coverhijau position-absolute w-100"></div>
									<img src="{{asset('assets/img/imgresult-2.png')}}" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="maag-result-content-area text-center">
					<p>GERD adalah kondisi yang ditandai dengan nyeri pada ulu hati atau sensasi terbakar di dada akibat naiknya asam lambung menuju esofagus. Kondisi GERD dapat menyebakan radang pada Kerongkongan dan saluran pernapasan atas yang berulang sehingga beresiko menjadi kanker.</p>

					<p>Yuk perbaiki gaya hidup kamu dengan :</p>
				</div>
				<div class="maag-result-list-area pt-3 pb-2 pr-3 mb-3" style="background: #FFF9F1">
					<ul>
						<li>Hindari makanan asam</li>
						<li>Hindari makanan pedas</li>
						<li>Hindari gorengan</li>
					</ul>
				</div>
				<div class="maag-result-content-area text-center">
					<p>Gejala Gerd jangan dibiarkan, segera minum obat maag terpercaya cepat redakan sakit maag dan mengontrol produksi asam lambung untuk kembali menangi hari.</p>
				</div>
				
			</div>
		</div>
	</div>
</div>			
<div class="row mb-3">
	<div class="container">
		<div class="col-12 text-center mb-4">
			<a href="#">
				<button type="button" class="btn mx-auto btn-solusi-result cl-white px-3 py-3  text-center">
					Untuk info lebih jelas Baca Artikel GERD disini
				</button>
			</a>
		</div>
		<div class="col-12 mb-4">
			<div class="sort-artikel-result text-center p-3">
				*Test ini hanya merupakan screnning awal, dan bukan untuk penegakan diagnosa. Diagnosa lebih lanjut hubungi dokter. Test ini disusun oleh medical dept. CHD Kalbe Farma, berdasarkan Rome IV Classification of Functional Gastrointestinal Disorders-Disorders of
				Gut-Brain Interaction, NC: The Rome Foundation 2016.
			</div>
		</div>
		<div class="col-12 d-flex justify-content-center">
			<div class="social-share border-bottom-0">
				<ul class="list-inline mb-0">
					<li class="list-inline-item" style="color:#686868;">SHARE WITH</li>
					<li class="list-inline-item">
						<a href="#" title="">
							<img src="{{ asset('assets/img/logo-facebook.png') }}" class="w-100" alt="">
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#" title="">
							<img src="{{ asset('assets/img/logo-twitter.png') }}" class="w-100" alt="">
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#" title="">
							<img src="{{ asset('assets/img/logo-line.png') }}" class="w-100" alt="">
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#" title="">
							<img src="{{ asset('assets/img/logo-wa.png') }}" class="w-100" alt="">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
{{-- <div class="maag-result-slider mb-5">
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
</div>			 --}}



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