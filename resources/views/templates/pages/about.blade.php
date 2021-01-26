@extends('templates/layouts/main')

@section('custom_css')
<link rel="stylesheet" href="{{asset('assets/plugins/aos/aos.css')}}">
<link href="{{ asset('assets/css/style-brillian.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="bg-artikel">
    <div class="container ">
        <div class="row d-flex justify-content-between ">
            <div class="top-bunga">
                <img src="{{asset('assets/img/bunga.png')}}" alt="">
            </div>
            
            <div class="top-bunga text-right">
                <img src="{{asset('assets/img/bunga-kanan.png')}}" alt="">
            </div>
        </div>
        <div class="row mt-milstone">
            <div class="col-12 text-center mt-4 mb-2">
                <div class="mb-2"><img src="{{asset('assets/img/logo_new.png')}}" alt=""></div>
                <h3 class="title-about">Milestone</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="box-desc-about text-center mb-3 pt-0">
                    <span class="cl-younggreen"> Promag dipercaya redakan sakit maag dan kembung dari generasi ke generasi. </span>
                    <!-- <div class="text-center cl-younggreen titiktiga mb-5">...</div> -->
                    <div class="d-flex justify-content-center my-3">
                        <div class="vr-line"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-down">
            <div class="col-1 bg-oval"></div>
            <div class="col-11 position-relative ">
                {{-- Ganjil --}}
                <div class="row section-about" data-aos="fade-down">
                    {{-- <div class="line-vertical"></div> --}}
                    <div class="col-12 position-relative">
                        <div class="aosbox" >
                            {{-- <div class="bold_green"></div> --}}
                            <div class="year text-left">1971</div>
                            <div class="box-item-about poition-relative px-5">
                                <div class="title-item-about mb-4">Promag hadir sejak tahun 1971</div>
                                <div class="img-item-about text-center">
                                    <img src="{{asset('assets/img/promag-lama.png')}}" alt="">
                                </div>
                                <div class="desc-item-about mt-3 text-left cl-semiblack">
                                    <p>mendukung aktivitas sehari-hari masyarakat Indonesia dan melindungi lambung dari generasi ke generasi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-down">
            <div class="col-1 bg-oval"></div>
            <div class="col-11 position-relative mb-4">
                {{-- Ganjil --}}
                <div class="row section-about" data-aos="fade-down">
                    {{-- <div class="line-vertical"></div> --}}
                    <div class="col-12 position-relative">
                        <div class="aosbox" >
                            {{-- <div class="bold_green"></div> --}}
                            <div class="year text-left">2006</div>
                            <div class="box-item-about poition-relative px-5">
                                <div class="title-item-about mb-4">Promag terus berinovasi menghadirkan produk- produk berkualitas</div>
                                <div class="img-item-about text-center">
                                    <img src="{{asset('assets/img/group-5-copy-10.png')}}" alt="">
                                </div>
                                <div class="desc-item-about mt-3 text-left cl-semiblack">
                                    <p>Promag terus berinovasi menghadirkan produk- produk berkualitas, Promag Double Action tahun 2006 dan Promag dalam bentuk sachet untuk yang menyukai format cair di tahun 2013.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-down">
            <div class="col-1 bg-oval"></div>
            <div class="col-11 position-relative mb-4">
                {{-- Ganjil --}}
                <div class="row section-about" data-aos="fade-down">
                    {{-- <div class="line-vertical"></div> --}}
                    <div class="col-12 position-relative">
                        <div class="aosbox" >
                            {{-- <div class="bold_green"></div> --}}
                            <div class="year text-left">2019</div>
                            <div class="box-item-about poition-relative px-5">
                                <div class="title-item-about mb-4">Gejala maag cepat pergi kembali nikmati harimu.</div>
                                <div class="img-item-about text-center">
                                    <img src="{{asset('assets/img/group-19-copy.png')}}" alt="">
                                </div>
                                <div class="desc-item-about mt-3 text-left cl-semiblack">
                                    <p>Promag hadir untuk pertama kali di Pasar obat bebas Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center my-3">
            <div class="vr-line"></div>
        </div>
    </div>

    <div class="w-100 d-flex justify-content-between ">
        <div class="bottom-bunga">
            <img src="{{asset('assets/img/group-copy-3.png')}}" alt="">
        </div>
        
        <div class="bottom-bunga text-right">
            <img src="{{asset('assets/img/group-copy-2.png')}}" alt="">
        </div>
    </div>
    <div class="mt-ijo">
        <div class="w-100 bg-ijo pt-5 pb-5">
            <div class="container ">
                <div class="row">
                    <div class="col-12 text-center mt-5 mb-3">
                        <h3 class="title-about cl-white">Awards</h3>
                    </div>
                    <div class="col-12 ">
                        <div class="row">
                            <div id="owl-awards" class="owl-carousel owl-article owl-theme">
                                <div class="item w-100 float-left pt-4 px-5 ">
                                    <a href="javascript:;" data-toggle="modal" data-target="#modal-award">
                                        <div class="w-100 pl-3 pr-3 bg-yellow-gradient float-left award position-relative d-flex justify-content-center">
                                            <img class="awardicon" src="{{asset('assets/img/award_icon.png')}}" alt="">
                                            <div class="title-award text-center pt-3 mt-4 pb-3 cl-white">Best Brand Platinum 2015</div>
                                        </div>
                                    </a>
                                    <div class="w-100 text-center img-award float-left mt-5">
                                        <img class="mx-auto" src="{{asset('assets/img/group-43.png')}}" id="picture-award" alt="">
                                    </div>
                                </div>
                                <div class="item w-100 float-left pt-4 px-5 ">
                                    <a href="javascript:;" data-toggle="modal" data-target="#modal-award">
                                        <div class="w-100 pl-3 pr-3 bg-yellow-gradient float-left award position-relative d-flex justify-content-center">
                                            <img class="awardicon" src="{{asset('assets/img/award_icon.png')}}" alt="">
                                            <div class="title-award text-center pt-3 mt-4 pb-3 cl-white">Best Brand Platinum 2015</div>
                                        </div>
                                    </a>
                                    <div class="w-100 text-center img-award float-left mt-5">
                                        <img class="mx-auto" src="{{asset('assets/img/group-43.png')}}" id="picture-award" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</div>

@include('templates/includes/modals/modal_award')
@endsection

@section('custom_js')
<!-- <script src="{{ asset('assets/plugins/owl.carousel/dist/owl.carousel.js') }}"></script> -->
<script src="{{asset('assets/plugins/aos/aos.js')}}"></script>

<script>
    AOS.init();
    function show_achive(id){
        $('#sdet-'+id).addClass('hidden');
        $('#cdet-'+id).removeClass('hidden');
        $('#achive-'+id).addClass('active');
        // $('#achive-'+id).attr('data-aos','fade-down');
    }
    function hidden_achive(id){
        $('#sdet-'+id).removeClass('hidden');
        $('#cdet-'+id).addClass('hidden');
        $('#achive-'+id).removeClass('active');
        // $('#achive-'+id).removeAttr('data-aos');
    }
 $('#owl-awards').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
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