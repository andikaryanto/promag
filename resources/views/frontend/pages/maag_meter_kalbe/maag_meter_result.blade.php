@extends('frontend/layouts/kalbe')

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
<!-- end of middle -->
@endsection