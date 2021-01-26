@extends('frontend/layouts/main')

@section('custom_css')

@endsection

@section('content')
<div class="container">
@if($products)
    @foreach ($products as $product)
        <div class="row bg-{{ $product->color }}">
            <div class="col-12  position-relative">
                <div class="w-100 list-produk float-left " id="list-produk-{{ $loop->index }}">
                    <div class="box_name_produk">
                        <div class="img-icon-produktype"><img src="{{asset($product->icon)}}" alt=""></div>
                        <div class="img-nm-produk"><img src="{{asset($product->banner)}}" alt=""></div>
                    </div>
                    <a href=""><img src="{{asset($product->picture)}}" class="produk-img produk-first float-left" alt=""></a>
                </div>
                <div class="w-100 komposisi hidden pr-3 pl-3 pb-3 mt-5 mb-5" id="komposisi-{{ $loop->index }}">
                    <div class="title_komposisi cl-younggreen">
                        <h3><span>Komposisi </span><img src="{{asset('assets/img/promag.png')}}" alt=""><span> {{$product->name}}</span></h3>
                    </div>
                    <div class="line-short"></div>
                    {!! $product->composition2 !!}
                </div>
                <div class="plus" id="prod-1"><a href="javascript:;" onclick="show_hide_komposisi({{ $loop->index }})"><img src="{{asset('assets/img/plus.png')}}" alt=""></a></div>
            </div>
        </div>
    @endforeach
@endif
    
</div>
@endsection

@section('custom_js')
<script>
function show_hide_komposisi(id){
    $('#prod-'+id).toggleClass('close_komposisi');
    $('#list-produk-'+id).toggleClass('hidden');
    $('#komposisi-'+id).toggleClass('hidden');
}
</script>
@endsection