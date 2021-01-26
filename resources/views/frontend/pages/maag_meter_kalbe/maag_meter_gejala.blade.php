@extends('frontend/layouts/kalbe')

@section('custom_css')
<link href="{{ asset('assets/plugins/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="bg-img-banner">
    @include('frontend/pages/maag_meter/banner_maag_meter')
</div>
<div class="container mt-5" id="symptom">
    <div class="row">
        <div class="col-12 bg-greendaun mb-4">
            <div class="row d-flex justify-content-start bx-welcom align-items-end" style=" position: relative;
    z-index: 1;">
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
            <div class="step d-flex justify-content-center px-3 py-3">
                <div class="in-step current-page"></div>
                <div class="in-step current-page"></div>
                <div class="in-step current-page"></div>
                <div class="in-step current-page"></div>
                <div class="in-step"></div>
                <div class="in-step"></div>
            </div>
        </div>
    </div>
     <div class="row shadow-box">
        <div class="col-12 bodyform mb-4">
            <form action="" method="post">
                {!! csrf_field() !!}
                
                <div class="row">
                    @if ($data->Symptoms)
                        @php
                            $symptoms = session('symptom') ? session('symptom') : [];
                            
                        @endphp
                        @foreach ($data->Symptoms as $s )
                            <div class="col-md-4 col-6 mb-4">
                                <div class="item-gejala position-relative">
                                    <div class="checked-gejala position-relative">
                                        <label class="container-checkmark label-form-checkout">
                                            <input type="checkbox" value="{{ $s->id }}" {{ in_array($s->id,$symptoms) ? 'checked' : '' }}   name="S[]">
                                            <span class="label-meter cl-black"></span>
                                            <span class="checkmark"></span>
                                            <div class="img-segitiga-hijau">
                                                <img src="{{asset('assets/img/path-2.png')}}" alt="">
                                            </div>
                                        </label>
                                    </div>
                                    <img src="{{asset($s->icon)}}" alt="">
                                    <div class="caption-gejala w-100 position-absolute p-3 text-center">{{ $s->symptom }}</div>
                                </div>
                            </div>
                            
                        @endforeach
                    @endif
                    
                </div>
                <div class="row">
                    <div class="col-12 text-center mt-5 mb-5">
                        <a href="{{url('maag-meter-kalbe/lifestyle')}}"><button type="button" class="btn btn-start p-2 cl-white text-center"><img class="pl-1" src="{{asset('assets/img/left-arrow.png')}}"/> Back</button></a>
                        <button type="submit" data-target="#maagmeter" data-slide-to="3" class="btn btn-start p-2 cl-white text-center">Next <img class="pl-1" src="{{asset('assets/img/right-arrow.png')}}"/></button>
                    </div>
                </div>
            </form>
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
$(function() {
  setTimeout(function() {
    if (location.hash) {
      /* we need to scroll to the top of the window first, because the browser will always jump to the anchor first before JavaScript is ready, thanks Stack Overflow: http://stackoverflow.com/a/3659116 */
      window.scrollTo(0, 0);
      target = location.hash.split('#');
      smoothScrollTo($('#'+target[1]));
    }
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
// $('a[href*="#"]')
//   // Remove links that don't actually link to anything
//   .not('[href="#"]')
//   .not('[href="#0"]')
//   .click(function(event) {
//     // On-page links
//     if (
//       location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
//       && 
//       location.hostname == this.hostname
//     ) {
//       // Figure out element to scroll to
//       var target = $(this.hash);
//       target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//       // Does a scroll target exist?
//       if (target.length) {
//         // Only prevent default if animation is actually gonna happen
//         event.preventDefault();
//         $('html, body').animate({
//           scrollTop: target.offset().top
//         }, 1000, function() {
//           // Callback after animation
//           // Must change focus!
//           var $target = $(target);
//           $target.focus();
//           if ($target.is(":focus")) { // Checking if the target was focused
//             return false;
//           } else {
//             $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
//             $target.focus(); // Set focus again
//           };
//         });
//       }
//     }
// });
</script>
@endsection