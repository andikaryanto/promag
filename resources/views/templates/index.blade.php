@extends('templates/layouts/main')

@section('custom_css')
<link href="{{ asset('assets/plugins/slick/slick.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/slick/slick-theme.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="w-100 d-flex justify-content-between">
        <div class="top-bunga">
             <img src="{{asset('assets/img/bunga.png')}}" alt="">
        </div>
        
        <div class="top-bunga text-right">
             <img src="{{asset('assets/img/bunga-kanan.png')}}" alt="">
        </div>
    </div>
    {{-- <div class="w-100 d-flex box-text-banner justify-content-center">
        <div class="col-9 d-flex align-items-center justify-content-center ">
            <div class="banner-home text-center">
                <h3>Muda bebas Maagsalah</h3>
                <p>Biarkan kami selalu mendampingi segala aktivitasmu</p>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <div class="row bg-img-banner height-bib">
            <div class="banner-home-slide w-100 float-left">
                <div class="owl-banner">
                    <div class="item"><a href=""><img src="{{asset('assets/img/group-14-copy-maag-meter-copy-mask.png')}}"/></a></div>
                    <div class="item"><a href=""><img src="{{asset('assets/img/group-14-copy-maag-meter-copy-mask.png')}}"/></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="fill">
        <img src="{{asset('assets/img/fill.png')}}" alt="">
    </div>
    <div class="fillout position-relative">
        <img src="{{asset('assets/img/fillout.png')}}" alt="">
    </div>
   <div class="container">
        <div class="row">
            <div class="banner-home-slide w-100 float-left">
                <div class="owl-bebaskan">
                    <div class="item d-flex flex-column">
                        <div class="">
                            <img src="{{asset('assets/img/group-8.png')}}"/>
                        </div>
                        <div class="d-flex justify-content-center py-4">
                            <a href="">
                                <button class="btn btn-banner text-center  py-3 px-5">Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                    <div class="item d-flex flex-column">
                        <div class="">
                            <img src="{{asset('assets/img/group-8.png')}}"/>
                        </div>
                        <div class="d-flex justify-content-center py-4">
                            <a href="">
                                <button class="btn btn-banner text-center py-2 px-5">Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    
        <div class="row mt-3">
            <div class="owl-carousel owl-new-article owl-theme">
                
                <div class="item">
                    <a href="">
                        <div class="item-slide">
                            <div class="imgslide-article mb-2">
                                <img src="{{asset('assets/img/imgarticle.png')}}"/>
                            </div>
                            <div class="caption-article">
                                <div class="title-article-slide text-center mb-2">MITOS ATAU FAKTA</div>
                                <div class="shortdesc-article-slide text-center">Trend GERD di kalangan millenial karena stres</div>
                            </div>
                        </div>
                    </a>
                </div>
               
                <div class="item">
                    <a href="">
                        <div class="item-slide">
                            <div class="imgslide-article mb-2">
                                <img src="{{asset('assets/img/imgarticle.png')}}"/>
                            </div>
                            <div class="caption-article">
                                <div class="title-article-slide text-center mb-2">MITOS ATAU FAKTA</div>
                                <div class="shortdesc-article-slide text-center">Trend GERD di kalangan millenial karena stres</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <div class="item-slide">
                            <div class="imgslide-article mb-2">
                                <img src="{{asset('assets/img/imgarticle.png')}}"/>
                            </div>
                            <div class="caption-article">
                                <div class="title-article-slide text-center mb-2">MITOS ATAU FAKTA</div>
                                <div class="shortdesc-article-slide text-center">Trend GERD di kalangan millenial karena stres</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="fill_bottom">
                {{-- <img src="{{asset('assets/img/fill-1.png')}}" alt=""> --}}
            </div>
        </div>

        {{-- <div class="row">
            <div class="owl-new-article">
                <div class="item-slide"><img src="{{asset('assets/img/imgarticle.png')}}"/></div>
                <div class="item-slide"><img src="{{asset('assets/img/imgarticle.png')}}"/></div>
            </div>
             --}}
            
            {{-- <div class="owl-new-article">
                <div class="item-slide">
                    <div class="imgslide-article mb-2">
                        <img src="{{asset('assets/img/imgarticle.png')}}"/>
                    </div>
                    <div class="caption-article">
                        <div class="title-article-slide text-center mb-2">MITOS ATAU FAKTA</div>
                        <div class="shortdesc-article-slide text-center">Trend GERD di kalangan millenial karena stres</div>
                    </div>
                </div>
                <div class="item-slide ">
                    <div class="imgslide-article mb-2">
                        <img src="{{asset('assets/img/imgarticle.png')}}"/>
                    </div>
                    <div class="caption-article">
                        <div class="title-article-slide text-center mb-2">MITOS ATAU FAKTA</div>
                        <div class="shortdesc-article-slide text-center">Trend GERD di kalangan millenial karena stres</div>
                    </div>
                </div>
                <div class="item-slide ">
                    <div class="imgslide-article mb-2">
                        <img src="{{asset('assets/img/imgarticle.png')}}"/>
                    </div>
                    <div class="caption-article">
                        <div class="title-article-slide text-center mb-2">MITOS ATAU FAKTA</div>
                        <div class="shortdesc-article-slide text-center">Trend GERD di kalangan millenial karena stres</div>
                    </div>
                </div>
                <div class="item-slide ">
                    <div class="imgslide-article mb-2">
                        <img src="{{asset('assets/img/imgarticle.png')}}"/>
                    </div>
                    <div class="caption-article">
                        <div class="title-article-slide text-center mb-2">MITOS ATAU FAKTA</div>
                        <div class="shortdesc-article-slide text-center">Trend GERD di kalangan millenial karena stres</div>
                    </div>
                </div>
            </div> --}}
        {{-- </div> --}}
       {{-- <div class="row pt-5">
            <div id="owl-article" class="owl-carousel owl-article owl-theme">
                <div class="item pl-5 pr-5">
                    <div class="box-img-article position-relative pr-mb-4 mb-3">
                        <div class="backdrop "></div>
                        <img src="{{asset('assets/img/article_1.png')}}" alt="">
                        <div class="category_article text-center">Health</div>
                    </div>
                    <h3 class="title-article-first text-center w-100 float-left mb-4 cl-black"><a href="#">5 Cara Terbaik Mengatasi Asam Lambung Naik, Agar Tidak Sering Kambuh</a></h3>
                </div>
                <div class="item pl-5 pr-5">
                    <div class="box-img-article position-relative pr-mb-4 mb-3">
                        <div class="backdrop "></div>
                        <img src="{{asset('assets/img/article_1.png')}}" alt="">
                        <div class="category_article text-center">Health</div>
                    </div>
                    <h3 class="title-article-first text-center w-100 float-left mb-4 cl-black"><a href="#">5 Cara Terbaik Mengatasi Asam Lambung Naik, Agar Tidak Sering Kambuh</a></h3>
                </div>
            </div>
       </div>

       <div class="row mb-5 pt-5 hidden">
            <div class="col-md-6 col-12 mb-md-0 mb-5">
                <div class="box-img-article pr-mb-4 position-relative mb-3">
                    <div class="backdrop"></div>
                    <img src="{{asset('assets/img/article_1.png')}}" alt="">
                    <div class="category_article text-center">Health</div>
                </div>
                <h3 class="title-article-first text-center w-100 float-left mb-4 cl-black"><a href="#">5 Cara Terbaik Mengatasi Asam Lambung Naik, Agar Tidak Sering Kambuh</a></h3>
                <a href="#">
                    <button class="btn-transparent border-black btn-article cl-black position-relative pointer">
                        <img src="{{asset('assets/img/arrow_right_black.png')}}" alt="" class="arrow-in-btn-article">
                        Read Article
                    </button>
                </a>
            </div>
            <div class="col-md-6 col-12 pl-md-5">
                <div class="row mb-5">
                    <div class="col-md-6 col-12">
                        <div class="box-img-article-right position-relative mb-md-0 mb-3">
                            <div class="backdrop-right"></div>
                            <img src="{{asset('assets/img/article_2.jpg')}}" alt="">
                            <div class="category_article text-center">Lifestyle</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="bx-title d-table">
                            <div class="title-article-right w-100 align-middle my-auto d-table-cell cl-black">
                                <a href="#">Tips Makan pedas tidak menyebabkan perut sakit</a>
                            </div>
                        </div>
                        <div class="w-100 float-left">
                            <a href="#">
                                <button class="btn-transparent border-black btn-article-right cl-black position-relative pointer">
                                    <img src="{{asset('assets/img/arrow_right_black.png')}}" alt="" class="arrow-in-btn-article-right">
                                    Read Article
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 col-12">
                        <div class="box-img-article-right position-relative mb-md-0 mb-3">
                            <div class="backdrop-right"></div>
                            <img src="{{asset('assets/img/article_3.jpg')}}" alt="">
                            <div class="category_article text-center">Lifestyle</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="bx-title d-table">
                            <div class="title-article-right w-100 align-middle my-auto d-table-cell cl-black">
                                <a href="#">
                                    5 Cara Terbaik Mengatasi Asam Lambung Naik,
                                    Agar Tidak Sering Kambuh 
                                </a>
                            </div>
                        </div>
                        <div class="w-100 float-left">
                            <a href="#">
                                <button class="btn-transparent border-black btn-article-right cl-black position-relative pointer">
                                    <img src="{{asset('assets/img/arrow_right_black.png')}}" alt="" class="arrow-in-btn-article-right">
                                    Read Article
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
       </div> --}}
       {{-- <div class="row">
            <div class="col-12 text-center guardian mb-4">
                <div class="title-guardian cl-younggreen mb-2">
                    TEMUKAN PRODUCT KAMI DI :
                </div>
                <div class="line-center-green mx-auto bg-younggreen mb-4"></div>
                <img style="width:154px;" src="{{asset('assets/img/guardian.png')}}" alt="">
            </div>
        </div> --}}
       {{-- <div class="row">
           <div class="col-md-6 col-12">
               <div class="row row-set7">
                   <div class="col-md-6 col-6 p-set7 share-foto">
                       <div class="border-img">
                            <img src="{{asset('assets/img/sosmed_1.jpg')}}" alt="">
                        </div>
                   </div>
                   <div class="col-md-6 col-6 p-set7 pl-2 pr-2 share-foto">
                        <div class="border-img">
                            <img src="{{asset('assets/img/sosmed_2.jpg')}}" alt="">
                        </div>
                   </div>
                   <div class="col-md-6 col-6 p-set7 pl-2 pr-2 share-foto">
                        <div class="border-img">
                            <img src="{{asset('assets/img/sosmed_3.jpg')}}" alt="">
                        </div>
                   </div>
                   <div class="col-md-6 col-6 p-set7 share-foto">
                        <div class="border-img">
                            <img src="{{asset('assets/img/sosmed_4.jpg')}}" alt="">
                        </div>
                   </div>
               </div>
           </div>
           <div class="col-md-6 col-12 pl-md-5 pr-md-5 pl-3 pr-3 box-desc-foto d-table">
                <div class="desc-photos align-middle d-table-cell">
                    <h2><span>Share your photos using</span> <span class="tag"> #SAYANGILAMBUNG</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </p>
                </div>  
           </div>
       </div> --}}
   </div>

@endsection

@section('custom_js')
<script src="{{ asset('assets/plugins/slick/slick.js') }}"></script>
<script src="{{ asset('assets/plugins/owl.carousel/dist/owl.carousel.js') }}"></script>
<script>
$(document).ready(function(){
    $('.owl-banner').slick({
        infinite:true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows:false
    });

    $('.owl-bebaskan').slick({
        infinite:true,
        dots: true,
        autoplay: false,
        autoplaySpeed: 3000,
        arrows:false
    });
    $('.owl-new-article').owlCarousel({
        center: true,
        stagePadding: 50,
        items:2,
        dots: false,
        loop:true,
        margin:20,
        responsive:{
            0:{
                items:1,
                stagePadding: 50
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    });
//     $('.owl-new-article').slick({
//         infinite:true,
//         dots: true,
//         autoplay: false,
//         autoplaySpeed: 3000,
//         arrows:false
//         // centerMode: true,
//         // centerPadding: '60px',
//         // slidesToShow: 3,
//         // responsive: [
//         //     {
//         //         breakpoint: 768,
//         //         settings: {
//         //             arrows: false,
//         //             centerMode: true,
//         //             centerPadding: '40px',
//         //             slidesToShow: 3
//         //         }
//         //     },
//         //     {
//         //         breakpoint: 480,
//         //         settings: {
//         //             arrows: false,
//         //             centerMode: true,
//         //             centerPadding: '40px',
//         //             slidesToShow: 1
//         //         }
//         //     }
//         // ]
//     });
});
// $('.owl-banner').owlCarousel({
//     loop:true,
//     // margin:10,
//     nav:false,
//     dots:false,
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
// })
// $('#owl-article').owlCarousel({
//     loop:true,
//     margin:10,
//     nav:true,
//     navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
//     dots:false,
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
// })
</script>
@endsection