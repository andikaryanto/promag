@extends('frontend/layouts/main2')

@section('custom_css')

@endsection

@section('content')

<div class="bg-hijaumuda">
    <div class="bg-bottom-white">
        <div class="container">
            <div class="row  d-flex justify-content-center">
                <div class="col-md-6 mt-5 img-landing mb-4">
                    <img src="{{asset('assets/img/landing.png')}}"/>
                </div>
                <div class="d-flex justify-content-center py-4 mb-4">
                    <a href="{{ url('maag-meter') }}">
                        <button class="btn btn-banner pointer text-center  py-3 px-5">Cek Sekarang</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('custom_js')

@endsection