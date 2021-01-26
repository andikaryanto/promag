@extends('templates/layouts/main')

@section('custom_css')
<link rel="stylesheet" href="{{asset('assets/plugins/aos/aos.css')}}">
<link href="{{ asset('assets/css/style-brillian.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="container mb-4">
    <div class="row">
        <div class="col-12 text-center mt-4 mb-3">
            <h3 class="title-about mt-3 mb-3">
                Seputar Maag
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="box-desc-about desc-seputar-maag py-4 px-4 text-center mb-4">
                <span class="kutip">“</span>
                <span class="cl-greenold"> Sakit maag dapat terjadi kapan saja pada siapa saja. Segera atasi agar kondisinya tidak semakin parah. Temukan informasi seputar Maag, GERD serta cara mengatasinya disini. </span>
                <span class="kutip k-kanan">“</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="{{url('frontend/seputar-maag/list')}}">
                <div class="bg-hijau award position-relative mb-3">
                    <div class="media pr-3 p-3">
                        <img class="align-self-center mr-4" src="{{asset('assets/img/stomach-5.png')}}" alt="">
                        <div class="media-body list-seputarmaag pl-4 align-self-center">
                            <h4 class="mt-0 cl-white">Gejala & Penyebab Maag</h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{url('frontend/seputar-maag/list')}}">
                <div class="bg-hijau award position-relative mb-3">
                    <div class="media pr-3 p-3">
                        <img class="align-self-center mr-4" src="{{asset('assets/img/mind.png')}}" alt="">
                        <div class="media-body list-seputarmaag pl-4 align-self-center">
                            <h4 class="mt-0 cl-white">Fakta & Mitos Maag</h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{url('frontend/seputar-maag/faq')}}">
                <div class="bg-hijau award position-relative ">
                    <div class="media pr-3 p-3">
                        <img class="align-self-center mr-4" src="{{asset('assets/img/information-1.png')}}" alt="">
                        <div class="media-body list-seputarmaag pl-4 align-self-center">
                            <h4 class="mt-0 cl-white">Pertanyaan Umum Seputar Maag</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="w-100 d-flex justify-content-between mt-5 mb-flower-btm">
    <div class="bottom-bunga">
        <img src="{{asset('assets/img/group-copy-3.png')}}" alt="">
    </div>
    
    <div class="bottom-bunga text-right">
        <img src="{{asset('assets/img/group-copy-2.png')}}" alt="">
    </div>
</div>
@endsection

@section('custom_js')

@endsection