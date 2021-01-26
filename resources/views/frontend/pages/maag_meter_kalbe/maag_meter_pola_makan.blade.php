@extends('frontend/layouts/kalbe')

@section('custom_css')
<link href="{{ asset('assets/plugins/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet" /> 
@endsection

@section('content')
<div class="header-maagmeter">
    <div class="bg-img-banner">
        @include('frontend/pages/maag_meter/banner_maag_meter')
    </div>
    <div class="container mt-5" id="diet">
        <div class="row" >
            <div id="myheader" class="col-12 bg-greendaun myheader-sticky" >
                <div class="row d-flex justify-content-start bx-welcom align-items-end" style=" position: relative;z-index: 1;">
                    <div class="col-2 position-relative icon-maag">
                        <img src="{{asset('assets/img/iconmaagmeter.png')}}" alt="">
                    </div>
                    <div class="col-10">
                        <div class="row welcome-mm bg-younggreen cl-white pl-5 pr-3">
                            <h4 class="ml-3">Hi {{ $user['name']}}!</h4>
                        </div>
                    </div>
                </div>
                <div class="header-form mt-5 d-flex align-items-center justify-content-center">
                    <div class="px-3 cl-white align-middle text-center ">
                        {{$data->question}}
                    </div>
                </div>
                <div class="d-flex justify-content-center remark-maagmeter">
                    <ul class="list-unstyled d-flex justify-content-center">
                        <li><span class="cl-hijautext">1 : </span><span class="cl-white">tidak pernah</span></li>
                        <li><span class="cl-hijautext">2 : </span><span class="cl-white">kadang-kadang</span></li>
                        <li><span class="cl-hijautext">3 : </span><span class="cl-white">sering</span></li>
                    </ul>
                </div>
                <div class="step d-flex justify-content-center px-3 py-3">
                    <div class="in-step current-page"></div>
                    <div class="in-step current-page"></div>
                    <div class="in-step"></div>
                    <div class="in-step"></div>
                    <div class="in-step"></div>
                    <div class="in-step"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
<div class="container">
    <div class="row shadow-box">
        <div class="col-12">
            <div class="box-form mb-4 rounded px-md-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 pt-2 px-md-5">
                    <form action="" method="post">
                        {!! csrf_field() !!}
                            @if ($data->Symptoms)
                                @php
                                    $answers = explode("|", $data->answer);
                                @endphp

                                @php
                                    $diets = session('diet') ? session('diet') : array();
                                @endphp
                                @foreach ($data->Symptoms as $s )
                                <div class="form-group  pl-3 pr-3 pb-3 border-bottom-form">
                                        <div class="label-meter text-center cl-black mt-2 mb-2">
                                            {{ $s->symptom }}
                                        </div>
                                        @php
                                                $jawab_2 ='';
                                            @endphp
                                        <div class="row d-flex justify-content-center ">
                                            
                                            @php
                                                $selected = count($diets)>0 ? $diets[$s->id] : '';
                                            @endphp
                                            @foreach ($answers as $key => $answer)
                                                @if($loop->index == 1)
                                                    @php
                                                        $jawab_2 =$answer;
                                                    @endphp
                                                    <div class="box-pernyataan d-flex align-items-center col-md-2 col-3 pr-0 pl-0">
                                                        <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                                            <input type="radio" value="{{$answer}}" {{ $answer == $selected ? 'checked' : '' }}  required name="PM[{{$s->id}}]">
                                                            {{-- <div> --}}
                                                                    <div class="col-6 pl-2 pr-2 lh-normal text-center cl-hijautext">{{ $jawab_2 }}</div>
                                                                {{-- <div class="col-12"> --}}
                                                                    <div class="checkmark-circle"></div>
                                                                {{-- </div> --}}
                                                               
                                                                {{-- <div class="col-12 cl-hijautext text-center txtkadang lh-normal pl-3">{{ $jawab_2 }}</div> --}}
                                                                
                                                            {{-- </div> --}}
                                                        </label>
                                                    </div>    
                                                
                                                @else
                                                    @if($loop->index == 0)
                                                    <div class="box-pernyataan d-flex align-items-center col-md-2 col-3 pr-0 pl-0">
                                                        <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                                            <input type="radio" value="{{$answer}}" {{ $answer == $selected ? 'checked' : '' }} required name="PM[{{$s->id}}]">
                                                            {{-- <div> --}}
                                                                    <div class="col-6  pl-2 pr-2 lh-normal text-center cl-hijautext">{{$answer }}</div>
                                                                {{-- <div class="col-12"> --}}
                                                                    <div class="checkmark-circle"></div>
                                                                    {{-- </div> --}}
                                                                
                                                                
                                                            {{-- </div> --}}
                                                        </label>
                                                    </div> 
                                                    @else   
                                                    <div class="box-pernyataan d-flex align-items-center col-md-2 col-3 pr-0 pl-0">
                                                        <label class="w-100 align-items-center container-checkmark label-form-checkout d-flex justify-content-center">
                                                            <input type="radio" value="{{$answer}}" {{ $answer == $selected ? 'checked' : '' }}  required name="PM[{{$s->id}}]">
                                                            {{-- <div> --}}
                                                                    <div class="col-6 pl-2 pr-2 lh-normal text-center cl-hijautext">{{$answer }}</div>
                                                                {{-- <div class="col-12"> --}}
                                                                <div class="checkmark-circle"></div>
                                                                {{-- </div> --}}
                                                                
                                                            {{-- </div> --}}
                                                        </label>
                                                    </div> 
                                                    @endif  
                                                @endif  
                                                
                                            @endforeach
                                        
                                        </div>
                                        {{-- <div class="cl-hijautext text-center txtkadang lh-normal pl-3">{{ $jawab_2 }}</div> --}}
                                    </div>
                                @endforeach
                            @endif
                            <div class="form-group w-100 float-left text-center mt-5 mb-5">
                                <a href="{{url('maag-meter-kalbe')}}"><button type="button" class="btn btn-start p-2 cl-white text-center"><img class="pl-1" src="{{asset('assets/img/left-arrow.png')}}"/> Back</button></a>
                                <button type="submit" id="nextone" class="btn btn-start p-2 cl-white text-center">Next <img class="pl-1" src="{{asset('assets/img/right-arrow.png')}}"/></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
<div class="d-md-block d-sm-none d-none">
    <div class="w-100 d-flex justify-content-between box-flower-btm ">
        <div class="bottom-bunga">
            <img src="{{asset('assets/img/group-copy-3.png')}}" alt="">
        </div>
        
        <div class="bottom-bunga text-right">
            <img src="{{asset('assets/img/bunga-right-home.png')}}" alt="">
        </div>
    </div>
</div>
@endsection

@section('custom_js')
<script src="{{ asset('assets/plugins/owl.carousel/dist/owl.carousel.min.js') }}"></script>
<script>
    
// function InvalidMsg(textbox){
//     console.log(textbox.prop("checked"));
//     if (textbox.checked.length == 0) {
        
//         textbox.setCustomValidity('Silakan isi bidang ini.');
//     } else {
//         textbox.setCustomValidity('');
//     }
//     return true;
// }
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:true,
    mouseDrag: true,
    touchDrag: false,
    autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:1,
            mouseDrag: true,
            touchDrag: true
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

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
// Select all links with hashes
$(function() {
  setTimeout(function(e) {
    if (location.hash) {
      /* we need to scroll to the top of the window first, because the browser will always jump to the anchor first before JavaScript is ready, thanks Stack Overflow: http://stackoverflow.com/a/3659116 */
      window.scrollTo(0, 0);
      target = location.hash.split('#');
      smoothScrollTo($('#'+target[1]));
    }
    e.preventDefault();
  }, 1);
  
  // taken from: https://css-tricks.com/snippets/jquery/smooth-scrolling/
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      smoothScrollTo($(this.hash));
      
      return false;
    }
  });
  
  
  function smoothScrollTo(target) {
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    
    if (target.length) {
      $('html,body').animate({
        scrollTop: target.offset().top
      }, 1000);
     
    }
  }
});

    window.onscroll = function() {readscroll(100)};
    var header = document.getElementById("myheader");
    var sticky = header.offsetTop ;
    
    function readscroll(value) {
        // console.log(window.pageYOffset);
        // console.log(header.offsetTop);
        
        var stickyplus= sticky + value;
                
        if (window.pageYOffset > stickyplus) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>


@endsection