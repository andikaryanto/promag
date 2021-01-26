@extends('frontend/layouts/main')

@section('content')
<!-- middle -->
<section class="varianbox">
    <div class="obj-varian">
        <span class="circle-grey"></span>
        <span class="circlesm-grey"></span>
        <span class="triangle-grey"></span>
        <span class="trianglesm-grey"></span>
        <span class="dost-grey"></span>
        <span class="lines-grey"></span>
        <span class="objleftvar"></span>
        <span class="objrightvar"></span>
    </div>
    <div class="wrapper">
        <div class="ttl-content std-content">
            <h5>Varian Produk</h5>
            <h2>Dosis pas dan cepat redakan sakit maag dan kembung</h2>
        </div>
        <div class="varian-list">

            @if($products)

                @foreach ($products as $product)
                <div class="list va-one">
                    <figure><img src="{{asset($product->picture)}}" alt="{{ $product->picture }}"></figure>
                    <div class="desc">
                        <h5>{{ $product->name }}</h5>
                        <a href="{{ url('product/detail').'/'.$product->slug }}">Lihat Detail</a>
                    </div>
                </div>
                @endforeach

            @endif
            
        </div>
    </div>
</section>
<!-- end of middle -->

@endsection