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
                    Apakah gejala-gejala yang dialami tersebut mengganggu aktivitas Anda ?
                </div>
            </div>
            <div class="step d-flex justify-content-start px-3 py-3">
                <div class="in-step current-page"></div>
                <div class="in-step current-page"></div>
                <div class="in-step current-page"></div>
                <div class="in-step current-page"></div>
                <div class="in-step current-page"></div>
                <div class="in-step current-page"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12  box-form  mb-4">
            <form action="">
                <div class="form-group w-100">
                    <div class="w-100 waktu-gejala mt-1 mb-1">
                        <label class="container-checkmark label-form-checkout">
                            <input type="radio" value="" checked required name="kondisi">
                            <div class="img-segitiga-hijau position-relative">
                                <img src="{{asset('assets/img/path-2.png')}}" alt="">
                            </div>
                            <div class="bx-img-gejala d-flex justify-content-start align-items-center">
                                <div class="img-gejala">
                                    <img src="{{asset('assets/img/dampak-gejala-1.png')}}" alt="">
                                </div>
                                <div class="label-meter height-lbl-dampak-dejala pl-4">
                                    <h4>Tidak mengganggu</h4>
                                    <div class="desc-lbl-meter">Saya tetap bisa menjalankan aktivitas saya seperti biasa</div>
                                </div>
                            </div>
                            <span class="checkmark-circle ml-2"></span>
                        </label>
                    </div>
                </div>

                <div class="form-group w-100">
                    <div class="w-100 waktu-gejala mt-1 mb-1">
                        <label class="container-checkmark label-form-checkout">
                            <input type="radio" value=""  required name="kondisi">
                            <div class="img-segitiga-hijau position-relative">
                                <img src="{{asset('assets/img/path-2.png')}}" alt="">
                            </div>
                            <div class="bx-img-gejala d-flex justify-content-start align-items-center">
                                <div class="img-gejala">
                                    <img src="{{asset('assets/img/dampak-gejala-2.png')}}" alt="">
                                </div>
                                <div class="label-meter height-lbl-dampak-dejala pl-4">
                                    <h4>Tidak terlalu mengganggu</h4>
                                    <div class="desc-lbl-meter">Saya masih bisa menjalankan aktivitas walaupun sedikit merasa tidak nyaman</div>
                                </div>
                            </div>
                            <span class="checkmark-circle ml-2"></span>
                        </label>
                    </div>
                </div>

                <div class="form-group w-100">
                    <div class="w-100 waktu-gejala mt-1 mb-1">
                        <label class="container-checkmark label-form-checkout">
                            <input type="radio" value=""  required name="kondisi">
                            <div class="img-segitiga-hijau position-relative">
                                <img src="{{asset('assets/img/path-2.png')}}" alt="">
                            </div>
                            <div class="bx-img-gejala d-flex justify-content-start align-items-center">
                                <div class="img-gejala">
                                    <img src="{{asset('assets/img/dampak-gejala-3.png')}}" alt="">
                                </div>
                                <div class="label-meter height-lbl-dampak-dejala pl-4">
                                    <h4>Agak mengganggu</h4>
                                    <div class="desc-lbl-meter">Saya masih bisa menjalankan aktivitas tetapi tidak fokus dan tidak bisa menikmati aktivitas</div>
                                </div>
                            </div>
                            <span class="checkmark-circle ml-2"></span>
                        </label>
                    </div>
                </div>

                <div class="form-group w-100">
                    <div class="w-100 waktu-gejala mt-1 mb-1">
                        <label class="container-checkmark label-form-checkout">
                            <input type="radio" value=""  required name="kondisi">
                            <div class="img-segitiga-hijau position-relative">
                                <img src="{{asset('assets/img/path-2.png')}}" alt="">
                            </div>
                            <div class="bx-img-gejala d-flex justify-content-start align-items-center">
                                <div class="img-gejala">
                                    <img src="{{asset('assets/img/dampak-gejala-4.png')}}" alt="">
                                </div>
                                <div class="label-meter height-lbl-dampak-dejala pl-4">
                                    <h4>Sangat mengganggu</h4>
                                    <div class="desc-lbl-meter">Saya tidak bisa melanjutkan aktivitas setiap kali mengalami gejala tersebut</div>
                                </div>
                            </div>
                            <span class="checkmark-circle ml-2"></span>
                        </label>
                    </div>
                </div>

                <div class="form-group w-100 text-center mt-5 mb-5">
                    <a href="{{url('frontend/maag-meter/waktu-gejala')}}"><button type="button" class="btn btn-start p-2 cl-white text-center"><img class="pl-1" src="{{asset('assets/img/left-arrow.png')}}"/> Back</button></a>
                    <button type="submit"  class="btn btn-start p-2 cl-white text-center">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('custom_js')

@endsection