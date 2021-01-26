@extends('templates/layouts/main')

@section('custom_css')
<!-- <link href="{{ asset('assets/plugins/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet" /> -->
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="w-100 float-left rounded mb-4">
                <div class="header-result w-100 cl-white text-center bg-hijau-daun rounded-top mt-4 p-3">
                    Gejala yang Anda alami
                </div>
                <ul class="list-unstyle list-result w-100 float-left rounded-bottom">
                    <li>Kembung dan rasa penuh </li>
                    <li>Cepat kenyang pada yang lebih kecil dari biasanya</li>
                    <li>Kembung dan rasa penuh </li>
                    <li>Kembung dan rasa penuh </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row bg-redlight">
        <div class="col-12">
            <div class="box-mag pt-3 d-flex justify-content-center">
                <div class="expresion-mag ">
                    <img src="{{asset('assets/img/emoji_sad.png')}}" alt=""> 
                </div>
                <div class=" ml-2 jenis-mag ">
                    <p>Anda mengalami</p>
                    <h3>Maag Akut</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row bg-abu">
        <div class="w-100 tag-produk pl-3 pr-3 text-center mt-4">
            <p>Jangan khawatir!</p>
            <p>Atasi maag akut Anda dengan</p>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="img-product w-100 text-center mb-2">
                    <img src="{{asset('assets/img/group-7.png')}}" alt="">
                </div>
                <div class="name-product cl-younggreen w-100 text-center mb-5">
                    <img src="{{asset('assets/img/promag.png')}}" alt="">
                    <span>Double Action</span>
                </div>
                <div class="w-100 float-left text-center">
                    <a href=""><button type="button" class="btn mx-auto btn-start p-2 cl-white text-center  mb-5">Liat detail</button></a>
                </div>
            </div>
            <div class="item">
                <div class="img-product w-100 text-center mb-2">
                    <img src="{{asset('assets/img/promag_1.png')}}" alt="">
                </div>
                <div class="name-product cl-younggreen w-100 text-center mb-5">
                    <img src="{{asset('assets/img/promag.png')}}" alt="">
                    <span>Tablet</span>
                </div>
                <div class="w-100 float-left text-center">
                    <a href=""><button type="button" class="btn mx-auto btn-start p-2 cl-white text-center  mb-5">Liat detail</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_js')
<!-- <script src="{{ asset('assets/plugins/owl.carousel/dist/owl.carousel.js') }}"></script> -->
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