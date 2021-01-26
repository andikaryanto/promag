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
        <div class="col-12 bg-greendaun">
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
                    Isi pertanyaan-pertanyaan berikut sesuai dengan pola makan yang kamu miliki saat ini
                </div>
            </div>
            <div class="step d-flex justify-content-start px-3 py-3">
                <div class="in-step current-page"></div>
                <div class="in-step current-page"></div>
                <div class="in-step"></div>
                <div class="in-step"></div>
                <div class="in-step"></div>
                <div class="in-step"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="box-form w-100 float-left mb-4 rounded">
                <div class="w-100 float-left pt-2 ">
                    <form action="">
                        <div class="form-group w-100 float-left pl-3 pr-3 pb-3 border-bottom-form">
                            <div class="label-meter text-center cl-black mt-2 mb-2">
                                Makan tidak teratur
                            </div>
                            <div class="row d-flex justify-content-center ">
                                <div class="box-pernyataan d-flex align-items-center col-4 pr-0">
                                    <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                        <input type="radio" value=""  required text-center name="pernyataan-1">
                                        <div class="col-8 pl-0 pr-2 lh-normal text-center cl-hijautext">Tidak Pernah</div>
                                        <div class="checkmark-circle"></div>
                                    </label>
                                </div>

                                <div class="box-pernyataan d-flex align-items-center col-4">
                                    <label class="w-100 container-checkmark label-form-checkout  d-flex flex-column align-items-center">
                                        <input type="radio" value="" required  name="pernyataan-1">
                                        <div class="checkmark-circle"></div>
                                        {{-- <div class="cl-hijautext lh-normal">Kadang-Kadang</div> --}}
                                    </label>
                                </div>

                                <div class="box-pernyataan d-flex align-items-center col-4 pl-0">
                                    <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                        <input type="radio" value="" required  name="pernyataan-1">
                                        <div class="checkmark-circle"></div>
                                        <div class="col-8 pr-0 pl-2 lh-normal cl-hijautext">Sering</div>
                                    </label>
                                </div>
                            </div>
                            <div class="cl-hijautext text-center txtkadang lh-normal">Kadang-Kadang</div>
                        </div>

                        <div class="form-group w-100 float-left pl-3 pr-3 pb-3 border-bottom-form">
                            <div class="label-meter text-center cl-black mt-2 mb-2">
                                Suka konsumsi makanan asam
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="box-pernyataan d-flex align-items-center col-4 pr-0">
                                    <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                        <input type="radio" value=""  required name="pernyataan-2">
                                        <div class="col-8 pl-0 pr-2 lh-normal text-center cl-hijautext">Tidak Pernah</div>
                                        <div class="checkmark-circle"></div>
                                    </label>
                                </div>

                                <div class="box-pernyataan d-flex align-items-center col-4">
                                    <label class="w-100 container-checkmark label-form-checkout  d-flex flex-column align-items-center">
                                        <input type="radio" value="" required  name="pernyataan-2">
                                        <div class="checkmark-circle"></div>
                                        {{-- <div class="cl-hijautext lh-normal">Kadang-Kadang</div> --}}
                                    </label>
                                </div>

                                <div class="box-pernyataan d-flex align-items-center col-4 pl-0">
                                    <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                        <input type="radio" value="" required  name="pernyataan-2">
                                        <div class="checkmark-circle"></div>
                                        <div class="col-8 pr-0 pl-2 lh-normal cl-hijautext">Sering</div>
                                    </label>
                                </div>
                            </div>
                            <div class="cl-hijautext text-center txtkadang lh-normal">Kadang-Kadang</div>
                        </div>

                        <div class="form-group w-100 float-left pl-3 pr-3 pb-3 border-bottom-form">
                            <div class="label-meter text-center cl-black mt-2 mb-2">
                                Suka konsumsi makanan pedas
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="box-pernyataan d-flex align-items-center col-4 pr-0">
                                    <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                        <input type="radio" value=""  required name="pernyataan-3">
                                        <div class="col-8 pl-0 pr-2 lh-normal text-center cl-hijautext">Tidak Pernah</div>
                                        <div class="checkmark-circle"></div>
                                    </label>
                                </div>

                                <div class="box-pernyataan d-flex align-items-center col-4">
                                    <label class="w-100 container-checkmark label-form-checkout  d-flex flex-column align-items-center">
                                        <input type="radio" value="" required  name="pernyataan-3">
                                        <div class="checkmark-circle"></div>
                                        {{-- <div class="cl-hijautext lh-normal">Kadang-Kadang</div> --}}
                                    </label>
                                </div>

                                <div class="box-pernyataan d-flex align-items-center col-4 pl-0">
                                    <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                        <input type="radio" value="" required  name="pernyataan-3">
                                        <div class="checkmark-circle"></div>
                                        <div class="col-8 pr-0 pl-2 lh-normal cl-hijautext">Sering</div>
                                    </label>
                                </div>
                            </div>
                            <div class="cl-hijautext text-center txtkadang lh-normal">Kadang-Kadang</div>
                        </div>

                        <div class="form-group w-100 float-left pl-3 pr-3 pb-3 border-bottom-form">
                            <div class="label-meter text-center cl-black mt-2 mb-2">
                                Suka konsumsi gorengan
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="box-pernyataan d-flex align-items-center col-4 pr-0">
                                    <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                        <input type="radio" value=""  required name="pernyataan-4">
                                        <div class="col-8 pl-0 pr-2 lh-normal text-center cl-hijautext">Tidak Pernah</div>
                                        <div class="checkmark-circle"></div>
                                    </label>
                                </div>

                                <div class="box-pernyataan d-flex align-items-center col-4">
                                    <label class="w-100 container-checkmark label-form-checkout  d-flex flex-column align-items-center">
                                        <input type="radio" value="" required  name="pernyataan-4">
                                        <div class="checkmark-circle"></div>
                                        {{-- <div class="cl-hijautext lh-normal">Kadang-Kadang</div> --}}
                                    </label>
                                </div>

                                <div class="box-pernyataan d-flex align-items-center col-4 pl-0">
                                    <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                        <input type="radio" value="" required  name="pernyataan-4">
                                        <div class="checkmark-circle"></div>
                                        <div class="col-8 pr-0 pl-2 lh-normal cl-hijautext">Sering</div>
                                    </label>
                                </div>
                            </div>
                            <div class="cl-hijautext text-center txtkadang lh-normal">Kadang-Kadang</div>
                        </div>

                        <div class="form-group w-100 float-left pl-3 pr-3 pb-3 border-bottom-form">
                            <div class="label-meter text-center cl-black mt-2 mb-2">
                                Minum kopi
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="box-pernyataan d-flex align-items-center col-4 pr-0">
                                    <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                        <input type="radio" value=""  required name="pernyataan-5">
                                        <div class="col-8 pl-0 pr-2 lh-normal text-center cl-hijautext">Tidak Pernah</div>
                                        <div class="checkmark-circle"></div>
                                    </label>
                                </div>

                                <div class="box-pernyataan d-flex align-items-center col-4">
                                    <label class="w-100 container-checkmark label-form-checkout  d-flex flex-column align-items-center">
                                        <input type="radio" value="" required  name="pernyataan-5">
                                        <div class="checkmark-circle"></div>
                                        {{-- <div class="cl-hijautext lh-normal">Kadang-Kadang</div> --}}
                                    </label>
                                </div>

                                <div class="box-pernyataan d-flex align-items-center col-4 pl-0">
                                    <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                        <input type="radio" value="" required  name="pernyataan-5">
                                        <div class="checkmark-circle"></div>
                                        <div class="col-8 pr-0 pl-2 lh-normal cl-hijautext">Sering</div>
                                    </label>
                                </div>
                            </div>
                            <div class="cl-hijautext text-center txtkadang lh-normal">Kadang-Kadang</div>
                        </div>

                        <div class="form-group w-100 float-left pl-3 pr-3 pb-3 border-bottom-form">
                            <div class="label-meter text-center cl-black mt-2 mb-2">
                                Minum alkohol
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="box-pernyataan d-flex align-items-center col-4 pr-0">
                                    <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                        <input type="radio" value=""  required name="pernyataan-6">
                                        <div class="col-8 pl-0 pr-2 lh-normal text-center cl-hijautext">Tidak Pernah</div>
                                        <div class="checkmark-circle"></div>
                                    </label>
                                </div>

                                <div class="box-pernyataan d-flex align-items-center col-4">
                                    <label class="w-100 container-checkmark label-form-checkout  d-flex flex-column align-items-center">
                                        <input type="radio" value="" required  name="pernyataan-6">
                                        <div class="checkmark-circle"></div>
                                        {{-- <div class="cl-hijautext lh-normal">Kadang-Kadang</div> --}}
                                    </label>
                                </div>

                                <div class="box-pernyataan d-flex align-items-center col-4 pl-0">
                                    <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                        <input type="radio" value="" required  name="pernyataan-6">
                                        <div class="checkmark-circle"></div>
                                        <div class="col-8 pr-0 pl-2 lh-normal cl-hijautext">Sering</div>
                                    </label>
                                </div>
                            </div>
                            <div class="cl-hijautext text-center txtkadang lh-normal">Kadang-Kadang</div>
                        </div>

                        <div class="form-group w-100 float-left pl-3 pr-3 pb-3 border-bottom-form">
                            <div class="label-meter text-center cl-black mt-2 mb-2">
                                Makan dalam porsi besar malam hari sebelum tidur
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="box-pernyataan d-flex align-items-center col-4 pr-0">
                                    <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                        <input type="radio" value=""  required name="pernyataan-7">
                                        <div class="col-8 pl-0 pr-2 lh-normal text-center cl-hijautext">Tidak Pernah</div>
                                        <div class="checkmark-circle"></div>
                                    </label>
                                </div>

                                <div class="box-pernyataan d-flex align-items-center col-4">
                                    <label class="w-100 container-checkmark label-form-checkout  d-flex flex-column align-items-center">
                                        <input type="radio" value="" required  name="pernyataan-7">
                                        <div class="checkmark-circle"></div>
                                        {{-- <div class="cl-hijautext lh-normal">Kadang-Kadang</div> --}}
                                    </label>
                                </div>

                                <div class="box-pernyataan d-flex align-items-center col-4 pl-0">
                                    <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                        <input type="radio" value="" required  name="pernyataan-7">
                                        <div class="checkmark-circle"></div>
                                        <div class="col-8 pr-0 pl-2 lh-normal cl-hijautext">Sering</div>
                                    </label>
                                </div>
                            </div>
                            <div class="cl-hijautext text-center txtkadang lh-normal">Kadang-Kadang</div>
                        </div>

                        <div class="form-group w-100 float-left pl-3 pr-3 pb-3 border-bottom-form">
                            <div class="label-meter text-center cl-black mt-2 mb-2">
                                Makan dalam porsi besar malam hari sebelum tidur
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="box-pernyataan d-flex align-items-center col-4 pr-0">
                                    <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                        <input type="radio" value=""  required name="pernyataan-8">
                                        <div class="col-8 pl-0 pr-2 lh-normal text-center cl-hijautext">Tidak Pernah</div>
                                        <div class="checkmark-circle"></div>
                                    </label>
                                </div>

                                <div class="box-pernyataan d-flex align-items-center col-4">
                                    <label class="w-100 container-checkmark label-form-checkout  d-flex flex-column align-items-center">
                                        <input type="radio" value="" required  name="pernyataan-8">
                                        <div class="checkmark-circle"></div>
                                        {{-- <div class="cl-hijautext lh-normal">Kadang-Kadang</div> --}}
                                    </label>
                                </div>

                                <div class="box-pernyataan d-flex align-tems-center col-4 pl-0">
                                    <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                        <input type="radio" value="" required  name="pernyataan-8">
                                        <div class="checkmark-circle"></div>
                                        <div class="col-8 pr-0 pl-2 lh-normal cl-hijautext">Sering</div>
                                    </label>
                                </div>
                            </div>
                            <div class="cl-hijautext text-center txtkadang lh-normal">Kadang-Kadang</div>
                        </div>

                        <div class="form-group w-100 float-left text-center mt-5 mb-5">
                            <a href="{{url('frontend/maag-meter/user')}}"><button type="button" class="btn btn-start p-2 cl-white text-center"><img class="pl-1" src="{{asset('assets/img/left-arrow.png')}}"/> Back</button></a>
                            <button type="submit" id="nextone" class="btn btn-start p-2 cl-white text-center">Next <img class="pl-1" src="{{asset('assets/img/right-arrow.png')}}"/></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_js')
<script>
// validation
// $('#nextone').click(function(){
//     // alert('ini...');
//     if ($('input[name="pernyataan-1"]:checked').length == 0 && $('input[name="pernyataan-2"]:checked').length == 0)) {
//         alert('please...');
//         return false;  
//     } else {
//         $('#nextone').attr('data-target','#maagmeter');
//         $('#nextone').attr('data-slide-to','1');
//         return true;
//     }
//     return false;
// });
$(function () {
    $('#nextone').click(function () {

        //Make groups
        var names = []
        $('input:radio').each(function () {
            var rname = $(this).attr('name');
            if ($.inArray(rname, names) == -1) names.push(rname);
        });

        $.each(names, function (i, name) {
            if ($('input[name="' + name + '"]:checked').length == 0) {
                console.log('Please check ' + name);
                // if(name =='pernyataan-1'){
                //     $('#validate-1').append('Please select this input')
                //     return false; 
                // }else if(name =='pernyataan-2'){
                //     $('#validate-2').append('Please select this input')
                //     return false; 
                // }else if(name =='pernyataan-3'){
                //     $('#validate-3').append('Please select this input')
                //     return false; 
                // }else if(name =='pernyataan-4'){
                //     $('#validate-4').append('Please select this input')
                //     return false; 
                // }else if(name =='pernyataan-5'){
                //     $('#validate-5').append('Please select this input')
                //     return false; 
                // }else if(name =='pernyataan-6'){
                //     $('#validate-6').append('Please select this input')
                //     return false; 
                // }
                return false; 
            }else{
                $('#nextone').attr('data-target','#maagmeter');
                $('#nextone').attr('data-slide-to','1');
                return true;
            }
            return false;
        });
        
    });
});
$('.carousel').carousel({
    interval: false
}); 

$(document).ready(function() {
    $('#maagmeter').carousel({
        pause: true,
        interval: false
    });
    // $('#maagmeter').on('slid.bs.carousel', function() {
    // 	// alert("slid");
    // });
    // // $('.carousel-control-prev').hide();
    // $('#maagmeter').on('slid.bs.carousel', '', function() {
    //     var $this = $(this);

    //     // $this.children('.carousel-control-prev').hide();
    //     // $this.children('.carousel-control').show();
        
    //     if($('.carousel-inner .carousel-item:first').hasClass('active')) {
    //         // alert('first');
    //         $this.children('.carousel-control-prev').hide();
    //         $this.children('.carousel-control-next').show();
    //     } else if($('.carousel-inner .carousel-item:last').hasClass('active')) {
    //         // alert('last');
    //         $this.children('.carousel-control-prev').show();
    //         $this.children('.carousel-control-next').hide();
    //     }
    // });
});
</script>


@endsection