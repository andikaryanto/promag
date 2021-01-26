@extends('templates/layouts/main')

@section('custom_css')

@endsection

@section('content')
<div class="container">
    <div class="row bg-img-banner">
        <div class="banner-maagmeter banner-quest w-100 float-left">
            <div class="item"><img class="w-100" src="{{asset('assets/img/groupmaagmeter.png')}}"/></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 bg-greendaun mb-4">
            <div class="row d-flex justify-content-start bx-welcom">
                <div class="col-3 position-relative icon-maag">
                    <img src="{{asset('assets/img/iconmaagmeter.png')}}" alt="">
                </div>
                <div class="col-9">
                    <div class="row welcome-mm bg-younggreen cl-white pl-5 pr-3">
                        <h4>Hi Sharon Angela</h4>
                    </div>
                </div>
            </div>
            <div class="header-form d-flex align-items-center justify-content-center">
                <div class="px-3 cl-white align-middle text-center ">
                    Gejala manakah yang sering Anda rasakan dalam 6 bulan terakhir ini?
                </div>
            </div>
            <div class="step d-flex justify-content-start px-3 py-3">
                <div class="in-step current-page"></div>
                <div class="in-step current-page"></div>
                <div class="in-step current-page"></div>
                <div class="in-step current-page"></div>
                <div class="in-step"></div>
                <div class="in-step"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 bodyform mb-4">
            <form action="">
                <div class="row">
                    <div class="col-md-4 col-6 mb-4">
                        <div class="item-gejala position-relative">
                            <div class="checked-gejala position-relative">
                                <label class="container-checkmark label-form-checkout">
                                    <input type="checkbox" value=""  required name="gejala-1">
                                    <span class="label-meter cl-black"></span>
                                    <span class="checkmark"></span>
                                    <div class="img-segitiga-hijau">
                                        <img src="{{asset('assets/img/path-2.png')}}" alt="">
                                    </div>
                                </label>
                            </div>
                            <img src="{{asset('assets/img/img-gejala-1.png')}}" alt="">
                            <div class="caption-gejala w-100 position-absolute p-3 text-center">Kembung & Rasa Penuh</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6  mb-4">
                        <div class="item-gejala position-relative">
                            <div class="checked-gejala position-relative">
                                <label class="container-checkmark label-form-checkout">
                                    <input type="checkbox" value=""  required name="gejala-2">
                                    <span class="label-meter cl-black"></span>
                                    <span class="checkmark"></span>
                                    <div class="img-segitiga-hijau">
                                        <img src="{{asset('assets/img/path-2.png')}}" alt="">
                                    </div>
                                </label>
                            </div>
                            <img src="{{asset('assets/img/img-gejala-2.png')}}" alt="">
                            <div class="caption-gejala w-100 position-absolute p-3 text-center">Cepat Kenyang</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6  mb-4">
                        <div class="item-gejala position-relative">
                            <div class="checked-gejala position-relative">
                                <label class="container-checkmark label-form-checkout">
                                    <input type="checkbox" value=""  required name="gejala-3">
                                    <span class="label-meter cl-black"></span>
                                    <span class="checkmark"></span>
                                    <div class="img-segitiga-hijau">
                                        <img src="{{asset('assets/img/path-2.png')}}" alt="">
                                    </div>
                                </label>
                            </div>
                            <img src="{{asset('assets/img/img-gejala-3.png')}}" alt="">
                            <div class="caption-gejala w-100 position-absolute p-3 text-center">Nyeri / perih ulu hati</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6  mb-4">
                        <div class="item-gejala position-relative">
                            <div class="checked-gejala position-relative">
                                <label class="container-checkmark label-form-checkout">
                                    <input type="checkbox" value=""  required name="gejala-4">
                                    <span class="label-meter cl-black"></span>
                                    <span class="checkmark"></span>
                                    <div class="img-segitiga-hijau">
                                        <img src="{{asset('assets/img/path-2.png')}}" alt="">
                                    </div>
                                </label>
                            </div>
                            <img src="{{asset('assets/img/img-gejala-4.png')}}" alt="">
                            <div class="caption-gejala w-100 position-absolute p-3 text-center">Rasa panas di ulu hati</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6  mb-4">
                        <div class="item-gejala position-relative">
                            <div class="checked-gejala position-relative">
                                <label class="container-checkmark label-form-checkout">
                                    <input type="checkbox" value=""  required name="gejala-5">
                                    <span class="label-meter cl-black"></span>
                                    <span class="checkmark"></span>
                                    <div class="img-segitiga-hijau">
                                        <img src="{{asset('assets/img/path-2.png')}}" alt="">
                                    </div>
                                </label>
                            </div>
                            <img src="{{asset('assets/img/img-gejala-5.png')}}" alt="">
                            <div class="caption-gejala w-100 position-absolute p-3 text-center">Mual</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 mb-4">
                        <div class="item-gejala position-relative">
                            <div class="checked-gejala position-relative">
                                <label class="container-checkmark label-form-checkout">
                                    <input type="checkbox" value=""  required name="gejala-6">
                                    <span class="label-meter cl-black"></span>
                                    <span class="checkmark"></span>
                                    <div class="img-segitiga-hijau">
                                        <img src="{{asset('assets/img/path-2.png')}}" alt="">
                                    </div>
                                </label>
                            </div>
                            <img src="{{asset('assets/img/img-gejala-6.png')}}" alt="">
                            <div class="caption-gejala w-100 position-absolute p-3 text-center">Muntah</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6  mb-4">
                        <div class="item-gejala position-relative">
                            <div class="checked-gejala position-relative">
                                <label class="container-checkmark label-form-checkout">
                                    <input type="checkbox" value=""  required name="gejala-7">
                                    <span class="label-meter cl-black"></span>
                                    <span class="checkmark"></span>
                                    <div class="img-segitiga-hijau">
                                        <img src="{{asset('assets/img/path-2.png')}}" alt="">
                                    </div>
                                </label>
                            </div>
                            <img src="{{asset('assets/img/img-gejala-7.png')}}" alt="">
                            <div class="caption-gejala w-100 position-absolute p-3 text-center">Mules </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6  mb-4">
                        <div class="item-gejala position-relative">
                            <div class="checked-gejala position-relative">
                                <label class="container-checkmark label-form-checkout">
                                    <input type="checkbox" value=""  required name="gejala-8">
                                    <span class="label-meter cl-black"></span>
                                    <span class="checkmark"></span>
                                    <div class="img-segitiga-hijau">
                                        <img src="{{asset('assets/img/path-2.png')}}" alt="">
                                    </div>
                                </label>
                            </div>
                            <img src="{{asset('assets/img/img-gejala-8.png')}}" alt="">
                            <div class="caption-gejala w-100 position-absolute p-3 text-center">Keringat dingin</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6  mb-4">
                        <div class="item-gejala position-relative">
                            <div class="checked-gejala position-relative">
                                <label class="container-checkmark label-form-checkout">
                                    <input type="checkbox" value=""  required name="gejala-9">
                                    <span class="label-meter cl-black"></span>
                                    <span class="checkmark"></span>
                                    <div class="img-segitiga-hijau">
                                        <img src="{{asset('assets/img/path-2.png')}}" alt="">
                                    </div>
                                </label>
                            </div>
                            <img src="{{asset('assets/img/img-gejala-9.png')}}" alt="">
                            <div class="caption-gejala w-100 position-absolute p-3 text-center">Aliran balik isi lambung ke rongga mulut</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 mb-4">
                        <div class="item-gejala position-relative">
                            <div class="checked-gejala position-relative">
                                <label class="container-checkmark label-form-checkout">
                                    <input type="checkbox" value=""  required name="gejala-10">
                                    <span class="label-meter cl-black"></span>
                                    <span class="checkmark"></span>
                                    <div class="img-segitiga-hijau">
                                        <img src="{{asset('assets/img/path-2.png')}}" alt="">
                                    </div>
                                </label>
                            </div>
                            <img src="{{asset('assets/img/img-gejala-10.png')}}" alt="">
                            <div class="caption-gejala w-100 position-absolute p-3 text-center">Rasa pahit di mulut</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 mb-4">
                        <div class="item-gejala position-relative">
                            <div class="checked-gejala position-relative">
                                <label class="container-checkmark label-form-checkout">
                                    <input type="checkbox" value=""  required name="gejala-11">
                                    <span class="label-meter cl-black"></span>
                                    <span class="checkmark"></span>
                                    <div class="img-segitiga-hijau">
                                        <img src="{{asset('assets/img/path-2.png')}}" alt="">
                                    </div>
                                </label>
                            </div>
                            <img src="{{asset('assets/img/img-gejala-11.png')}}" alt="">
                            <div class="caption-gejala w-100 position-absolute p-3 text-center">Sering sakit tenggorokan</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 mb-4">
                        <div class="item-gejala position-relative">
                            <div class="checked-gejala position-relative">
                                <label class="container-checkmark label-form-checkout">
                                    <input type="checkbox" value=""  required name="gejala-12">
                                    <span class="label-meter cl-black"></span>
                                    <span class="checkmark"></span>
                                    <div class="img-segitiga-hijau">
                                        <img src="{{asset('assets/img/path-2.png')}}" alt="">
                                    </div>
                                </label>
                            </div>
                            <img src="{{asset('assets/img/img-gejala-12.png')}}" alt="">
                            <div class="caption-gejala w-100 position-absolute p-3 text-center">Rasa pahit di mulut</div>
                    </div>
                    </div>
                    <div class="col-md-4 col-6 mb-4">
                        <div class="item-gejala position-relative">
                            <div class="checked-gejala position-relative">
                                <label class="container-checkmark label-form-checkout">
                                    <input type="checkbox" value=""  required name="gejala-13">
                                    <span class="label-meter cl-black"></span>
                                    <span class="checkmark"></span>
                                    <div class="img-segitiga-hijau">
                                        <img src="{{asset('assets/img/path-2.png')}}" alt="">
                                    </div>
                                </label>
                            </div>
                            <img src="{{asset('assets/img/img-gejala-13.png')}}" alt="">
                            <div class="caption-gejala w-100 position-absolute p-3 text-center">Rasa asam di mulut</div>
                        </div>
                 </div>
                    <div class="col-md-4 col-6 mb-4">
                        <div class="item-gejala position-relative">
                            <div class="checked-gejala position-relative">
                                <label class="container-checkmark label-form-checkout">
                                    <input type="checkbox" value=""  required name="gejala-14">
                                    <span class="label-meter cl-black"></span>
                                    <span class="checkmark"></span>
                                    <div class="img-segitiga-hijau">
                                        <img src="{{asset('assets/img/path-2.png')}}" alt="">
                                    </div>
                                </label>
                            </div>
                            <img src="{{asset('assets/img/img-gejala-14.png')}}" alt="">
                            <div class="caption-gejala w-100 position-absolute p-3 text-center">Sulit menelan</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center mt-5 mb-5">
                        <a href="{{url('frontend/maag-meter/pola-hidup')}}"><button type="button" class="btn btn-start p-2 cl-white text-center"><img class="pl-1" src="{{asset('assets/img/left-arrow.png')}}"/> Back</button></a>
                        <button type="submit" data-target="#maagmeter" data-slide-to="3" class="btn btn-start p-2 cl-white text-center">Next <img class="pl-1" src="{{asset('assets/img/right-arrow.png')}}"/></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('custom_js')
<script>
    $(".caption-gejala").fitText(0.38);
</script>
@endsection