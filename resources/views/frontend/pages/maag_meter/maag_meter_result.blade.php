@extends('frontend/layouts/main')

@section("custom_css")
<style>
 /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1000; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.5); /* Black w/ opacity */
}
.show {
	display: block;
}

/* Modal Content/Box */
.modal-content {
	position: relative;
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
	color: #aaa;
	float: right;
	font-size: 28px;
	font-weight: bold;
	position: absolute;
	top: 10px;
	right: 10px;
	z-index: 1000;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
} 

@media only screen and (max-width: 600px) {
  .modal-content {
    width: 90%;
  }
}
</style>
@endsection

@section('content')
<!-- middle -->
<section class="maagmeter-result maagparallax">
	<div class="obj-maagmenter">
		<span class="circle"></span>
		<span class="circlesm"></span>
		<span class="triangle"></span>
		<span class="triangletwo"></span>
		<span class="dots"></span>
		<span class="objleftstep"></span>
		<span class="his-triangle"></span>
	</div>
	<div class="wrapper">
		<div class="ttl-content std-content">
			<h5>Hallo, {{ $user['name'] }}!!!</h5>
			<h2>{{ $result->label }} <br><b>{{ $result->name }}</b></h2>
		</div>
		<figure class="img-result"><img src="{{ asset('images/content/maagmeter-result.png') }}" alt=""></figure>
		@if($result->id!=6)
			@if(count($polas)>0)
			<div class="cause">
				<p>{{ $result->name }} disebabkan oleh pola makan dan gaya hidup kamu, yaitu :</p>
				<div class="cause-list">

					@foreach ($polas as $key => $pola )
					<div class="list">
						<figure><img src="{{asset($pola['icon'])}}" alt=""></figure>
						<span>{{$pola['symptom']}}</span>
					</div>
					@endforeach

				</div>
			</div>
			@endif
			<div class="quotes-side">
				<div class="left-quotes">
					{!! $result->detail !!} 
				</div>
				<div class="right-quotes">
					@if(count($tips)>0)
					<p><b>Yuk perbaiki gaya hidup kamu dengan :</b></p>
					@endif
					@if(count($tips)>0)
					<ul>
						@foreach ($tips as $key => $tip )
						<li>{{ $tip}}</li>
						@endforeach
					</ul>
					@endif
				</div>
			</div>

			<div class="advice">
				Gejala {{ $result->name }} jangan dibiarkan, segera minum obat maag terpercaya cepat redakan sakit maag dan mengontrol produksi asam lambung untuk kembali menangi hari.
			</div>
		@endif

		<div class="article-list">

			@foreach ($articles as $article )
			<a href="{{ url('article/detail/'.$article->slug) }}" class="list">
				<figure><img src="{{ asset($article->picture) }}" alt=""></figure>
				<div class="desc">
					<span>{{ $article->Category->name }}</span>
					<h4>{{ $article->title }}</h4>
				</div>
			</a>
			@endforeach

		</div>

		<div class="btn-control">
			<a href="{{ url('/') }}" class="btn-rounded btn-mid btn-darkgrey btn-prev">Kembali ke Beranda</a>
			<a href="{{ url($solution) }}" class="btn-rounded btn-mid btn-greenlight btn-next">Cek Solusinya</a>
		</div>
	</div>
</section>
<div id="modal-result" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <a class="close">&times;</a>
    <figure>
		<a href="https://www.instagram.com/p/CHwaiVDh_fI/?utm_source=ig_web_copy_link" target="_blank">
			<img src="{{asset('images/content/pop-upbanner-result-maag-meter.jpg')}}"/>
		</a>
		</figure>
  </div>

</div>
<!-- end of middle -->
@endsection

