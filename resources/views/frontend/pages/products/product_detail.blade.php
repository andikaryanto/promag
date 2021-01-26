@extends('frontend/layouts/main')

@section('custom_css')
<style>
.detail--product-description p {
	line-height: 25px !important;
}
</style>
@endsection

@section('content')
<!-- middle -->
<section class="variandetialbox">
	<div class="obj-variandet">
		<span class="star-grey"></span>
		<span class="triangle-grey"></span>
		<span class="objright-vardet"></span>
		<span class="dots-grey"></span>
	</div>
	<div class="wrapper">
		<div class="img">
			<figure><img src="{{asset($detail->picture)}}" alt="{{ $detail->picture }}"></figure>
		</div>
		<div class="desc">
			<h3>{{ $detail->name }} </h3>
			<div class="detail--product-description">{!! $detail->description !!}</div>
			<div class="desc-det">
				<h4>KOMPOSISI</h4>
				{!! $detail->composission !!}
			</div>
			<div class="desc-det">
				<h4>DOSIS DAN CARA PEMAKAIAN</h4>
				{!! $detail->howto !!}
			</div>
			<div class="desc-det">
				<p>&nbsp;</p>
				<br>
				<br>
				<a href="{{ url('product/list')}}" class="link-yellow">Lihat Produk Lainnya</a>
			</div>
		</div>
	</div>
</section>

<section class="reccomended-product std-content">
	<div class="wrapper">
		<h5>Produk rekomendasi lainnya</h5>
		<div class="varian-list threelist">
			@foreach ($others as $product )
			<div class="list va-one">
				<figure><img src="{{ asset($product->picture) }}" alt="{{ $product->picture }}"></figure>
				<div class="desc">
					<h5>{{ $article->name }}</h5>
					<a href="{{ url('product/detail').'/'.$product->slug }}">Lihat Detail</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<!-- end of middle -->
@endsection