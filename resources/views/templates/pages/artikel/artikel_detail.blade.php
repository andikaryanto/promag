@extends('templates/layouts/main')

@section('custom_css')
<link href="{{ asset('assets/css/style-brillian.css') }}" rel="stylesheet" />
@endsection

@section('content')

<div class="bg-artikel p-2">
	<div class="w-100">
		<div class="page-content  mt-0">
			<div class="container">
				<div class="row">
					<div class="col-12 my-3">
						<a href="#" class="back-to" title="">< Back to article list</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container bg-white pt-3">
		<div class="row">
			<div class="col-12 artikel-detail">
				<img src="{{ asset('assets/img/img-article-1.png') }}" class="w-100 mb-4" alt="">
				<p class="article-title cl-greenold">
					Solusi Aman Atasi Perut Kembung
				</p>
				<p class="article-date-detail text-left mb-4">
					24 Okt 2019
				</p>

				<div class="content-area mb-4">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>

					<p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>

					<p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p>
				</div>		

				<div class="tagcloud01 mb-3">
					<ul>
						<li><a href="#">Ahlinya Lambung</a></li>
						<li><a href="#">Tag 2</a></li>
					</ul>
				</div>		

				<div class="social-share pb-2 mb-5">
					<ul class="list-inline">
						<li class="list-inline-item">SHARE WITH</li>
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
		<div class="row artikel-terkait mb-3">
			<div class="col-5 pr-0">
				<a href="#">
					<img src="{{ asset('assets/img/img-article-1.png') }}" class="w-100" alt="">
				</a>
			</div>
			<div class="col-7">
				<a href="#">
					<p class="article-title">
						Perut Sering Kembung? Bisa Jadi Ini Penyebabnya
					</p>
					<div class="article-excerpt">
						<p>Asam lambung akan meningkat jika seseorang mengalami stress, sehingga jika ada luka yang dalam, tentunya peningkatan asam lambung akan memperhebat keluhannya.</p>
					</div>
				</a>
			</div>
			<div class="col-12">
				<div class="artikel-terkait-line w-100 mt-2"></div>
			</div>
		</div>

		<div class="row artikel-terkait mb-3">
			<div class="col-5 pr-0">
				<a href="#">
					<img src="{{ asset('assets/img/img-article-2.png') }}" class="w-100" alt="">
				</a>
			</div>
			<div class="col-7">
				<a href="#">
					<p class="article-title">
						Banyak Gas di Perut Bikin Tak Nyaman, Ini Cara Mengatasinya
					</p>
					<div class="article-excerpt">
						<p>Gas dalam perut adalah hal yang normal terjadi. Tapi, bila jumlahnya banyak dan tak dapat dikeluarkan, bisa bikin tidak nyaman. Ini cara mengatasinya. </p>
					</div>
				</a>
			</div>
			<div class="col-12">
				<div class="artikel-terkait-line w-100 mt-2"></div>
			</div>
		</div>

		<div class="row artikel-terkait mb-3">
			<div class="col-5 pr-0">
				<a href="#">
					<img src="{{ asset('assets/img/article_1.png') }}" class="w-100" alt="">
				</a>
			</div>
			<div class="col-7">
				<a href="#">
					<p class="article-title">
					Sakit Maag Tak Kunjung Sembuh? Ini Penjelasannya
					</p>
					<div class="article-excerpt">
						<p>Sakit Maag sering kali menimbulkan perasaan tidak nyaman pada ulu hati, yang dapat berupa rasa nyeri, kembung, mual, hingga muntah</p>
					</div>
				</a>
			</div>
			<div class="col-12">
				<div class="artikel-terkait-line w-100 mt-2"></div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('custom_js')
@endsection