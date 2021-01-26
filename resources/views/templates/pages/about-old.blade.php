@extends('templates/layouts/main')

@section('custom_css')
<link rel="stylesheet" href="{{asset('assets/plugins/aos/aos.css')}}">
@endsection

@section('content')
    <div class="container mb-4">
        <div class="row">
            <div class="col-12 text-center mt-4 mb-3">
                <div class="mb-2"><img src="{{asset('assets/img/promag.png')}}" alt=""></div>
                <h3 class="title-about">Milestone</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="box-desc-about text-center mb-3">
                    <span class="kutip">“</span><span class="cl-greenold"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam </span> <span class="kutip k-kanan">“</span>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-down">
            <div class="col-12 position-relative">
                <div class="row section-about" data-aos="fade-down">
                    <div class="line-vertical"></div>
                    <div class="col-6 position-relative">
                        <div class="aosbox position-absolute" >
                            <div class="bold_green"></div>
                            <div class="year cl-younggreen text-right">1971</div>
                            <div class="box-item-about poition-relative">
                                {{-- <button type="button" id="sdet-1" class="btn-detail-info position-absolute" onclick="show_achive(1)" ></button>
                                <button type="button" id="cdet-1" class="closedet hidden position-absolute" onclick="hidden_achive(1)"></button> --}}
                                <div class="img-item-about text-center">
                                    <img src="{{asset('assets/img/milestone/1971.png')}}" alt="">
                                </div>
                                {{-- <div class="desc-item-about mt-2 text-right cl-semiblack">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div id="achive-1" class="box-detail-about-item d-table position-relative mt-5 mb-4">
                            {{-- <div class="segitiga_hijau position-absolute"><img src="{{asset('assets/img/triangle.png')}}" alt=""></div> --}}
                            {{-- <div class="title-dbi text-center mb-2">WHAT WE ACHIEVE</div> --}}
                            <div class="desc-detail-about d-table-cell align-middle ">
                                <p>Promag hadir untuk pertama kali di Pasar obat bebas Indonesia</p>
                            </div>
                                    
                            {{-- <div class="desc-detail-about">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img class="icon-about" src="{{asset('assets/img/award.png')}}" alt="">
                                        <div class="title-item-detail">10 Years</div>
                                        <div class="subdesc-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                    </div>
                                </div>
                            </div>
                            <div class="desc-detail-about">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img class="icon-about" src="{{asset('assets/img/quality.png')}}" alt="">
                                        <div class="title-item-detail">100%</div>
                                        <div class="subdesc-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="row section-about" data-aos="fade-down">
                    {{-- jika yang terakhir hilangkan aja link-verticalnya --}}
                    {{-- <div class="line-vertical"></div> --}}
                    <div class="col-6">
                        <div id="achive-2"  class="box-detail-about-item d-table position-relative mt-5 mb-4">
                            {{-- <div class="segitiga_hijau segitiga_hijau_right position-absolute"><img src="{{asset('assets/img/triangle.png')}}" alt=""></div>
                            <div class="title-dbi text-center mb-2">WHAT WE ACHIEVE</div> --}}
                            <div class="desc-detail-about d-table-cell align-middle ">
                                <p>Promag melakukan promosi melalui media TV untuk pertama kalinya dengan menggandeng Brand Ambassador Deddy Mizwar.</p>
                            </div>
                            {{-- <div class="desc-detail-about">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img class="icon-about" src="{{asset('assets/img/award.png')}}" alt="">
                                        <div class="title-item-detail">10 Years</div>
                                        <div class="subdesc-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                    </div>
                                </div>
                            </div>
                            <div class="desc-detail-about">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img class="icon-about" src="{{asset('assets/img/quality.png')}}" alt="">
                                        <div class="title-item-detail">100%</div>
                                        <div class="subdesc-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-6 position-relative">
                        <div class="aosbox position-absolute" >
                            <div class="bold_green bold_green_left"></div>
                            <div class="year cl-younggreen text-left">1991</div>
                            <div class="box-item-about poition-relative">
                                {{-- <button type="button" id="sdet-2" class="btn-detail-info btn-info-right position-absolute" onclick="show_achive(2)" ></button>
                                <button type="button" id="cdet-2" class="closedet btn-info-right hidden position-absolute" onclick="hidden_achive(2)"></button> --}}
                                <div class="img-item-about text-center">
                                    <img src="{{asset('assets/img/milestone/1991.png')}}" alt="">
                                </div>
                                {{-- <div class="desc-item-about mt-2 text-left cl-semiblack">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
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
</script>
@endsection