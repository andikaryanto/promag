@extends('templates/layouts/main')

@section('custom_css')
<!-- <link href="{{ asset('assets/plugins/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet" /> -->
<link href="{{ asset('assets/plugins/select2/dist/css/select2.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="container">
    <div class="row bg-img-banner">
         <div class="banner-maagmeter w-100 float-left">
             {{-- <div class="owl-carousel owl-theme"> --}}
                 {{-- <div class="item"><a href=""><img src="{{asset('assets/img/banner.jpg')}}"/></a></div> --}}
                 <div class="item"><a href=""><img class="w-100" src="{{asset('assets/img/groupmaagmeter.png')}}"/></a></div>
             {{-- </div> --}}
         </div>
    </div>
    <div class="row">
        <div class="col-12 mt-4 mb-4 text-center cl-green intro-mm">
            <h4>Cek Kondisi Maag Anda Sekarang!</h4>
        </div>
   </div>
   <div class="row">
       <div class="w-100 hf-greenpro">
            <div class="header-form  pl-3 pr-3 d-flex align-items-center justify-content-center">
                <div class="w-100 d-table">
                    <div class="icon-form mr-2 align-middle d-table-cell pr-2">
                        <img src="{{asset('assets/img/lambung.png')}}" alt="">
                    </div>
                    <div class="title-form  cl-white align-middle d-table-cell">
                        Silahkan Isi Sesuai dengan Kondisi Anda
                    </div>
                </div>
            </div>
            <div class="step d-flex justify-content-start px-3 pb-3">
                <div class="in-step current-page"></div>
                <div class="in-step"></div>
                <div class="in-step"></div>
                <div class="in-step"></div>
                <div class="in-step"></div>
                <div class="in-step"></div>
            </div>
        </div>
    </div>
    <div class="row">
       <div class="col-12 ">
             <div class="bodyform pl-3 pr-3">
                <div class="bodyform w-100 float-left pt-2 pl-3 pr-3">
                    <form action="">
                        <div class="form-group">
                            <div class="label-from cl-semiblack mt-2 mb-2">
                                <img src="{{asset('assets/img/profile_1.png')}}" alt="">
                                Nama
                            </div>
                            <input type="text" required class="w-100 txt-form border p-2 rounded from-control"/>
                        </div>
                        <div class="form-group w-100 float-left">
                            <div class="label-from cl-semiblack mt-2 mb-2">
                                <img src="{{asset('assets/img/gender_1.png')}}" alt="">
                                Jenis Kelamin
                            </div>
                            <div class="w-100 float-left">
                                <div class="float-left pr-5">
                                    <label class="container-checkmark label-form-checkout">
                                        <input type="radio" value="" checked required name="gender">
                                        <span class="jl">Male</span>
                                        <span class="checkmark-circle"></span>
                                    </label>
                                </div>
                                <div class="float-left">
                                    <label class="container-checkmark label-form-checkout">
                                        <input type="radio" value="" required  name="gender">
                                        <span class="jl">Female</span>
                                        <span class="checkmark-circle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group w-100 float-left">
                            <div class="label-from cl-semiblack mt-2 mb-2">
                                <img src="{{asset('assets/img/calendar.png')}}" alt="">
                                Usia
                            </div>
                            <input type="text" required class="w-100 txt-form border p-2 rounded from-control"/>
                        </div>
                        
                        <div class="form-group w-100 float-left text-center mt-5 mb-5">
                            <button type="submit" class="btn btn-banner py-3 px-5 text-center">Start</button>
                            {{-- <button type="submit" class="btn btn-start p-2 cl-white text-center">Start</button> --}}
                        </div>
                    </form>
                </div>
            </div>
       </div>
   </div>
</div>
@endsection

@section('custom_js')
<!-- <script src="{{ asset('assets/plugins/owl.carousel/dist/owl.carousel.min.js') }}"></script> -->
<script src="{{ asset('assets/plugins/select2/dist/js/select2.js') }}"></script>
<script>
 $(document).ready(function() {
    $('.select2').select2();
});
// $('.owl-carousel').owlCarousel({
//     loop:true,
//     margin:10,
//     nav:true,
//     dots:true,
//     responsive:{
//         0:{
//             items:1
//         },
//         600:{
//             items:1
//         },
//         1000:{
//             items:1
//         }
//     }
// });
function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

    return true;
}
</script>
@endsection