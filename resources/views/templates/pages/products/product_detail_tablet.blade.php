@extends('templates/layouts/main')

@section('custom_css')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="title_product_detail pt-3 pl-3 pr-3 cl-younggreen mb-3">
                <img class="img-icon-type mr-3" src="{{asset('assets/img/Group_16.png')}}" alt="">
                <img class="icon-promag" src="{{asset('assets/img/promag.png')}}" alt="">
                Tablet
            </div>
            <div class="container-detail-product">
                <div class="img-product-detail text-center">
                    <img src="{{asset('assets/img/obat_tablet.png')}}" alt="">
                </div>
                <div class="desc_detail pl-4 pr-4 mb-2">
                    PROMAG obat maag dengan <img src="{{asset('assets/img/formula.png')}}" alt="">
                    Magnesium Hydroxide dan simethicone redakan sakit maag & kembung dengan aman dan cepat.
                    Jika diminum sesuai dosis anjuran.
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div id="accordion" class="accordion-detail mb-3">
                <div class="card border-0">
                  <div class="card-header bg-younggreen" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h5 class="mb-0">
                        <img src="{{asset('assets/img/idea.png')}}" alt=""> <span>FACTS</span> <i class="fa fa-angle-down"></i>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <div class="w-100 pl-3 pr-3 mb-3 list-fact">
                            <div class="title_fact cl-younggreen mb-3">
                                <img src="{{asset('assets/img/pola_makan.png')}}" alt=""> POLA MAKAN
                            </div>
                            <div class="desc-list-fact"> 
                               <p>Selain akibat asam lambung, peradangan pada dinding lambung seringkali terjadi karena pola makan yang tidak teratur. Misalnya, sering telat makan, sering, mengonsumsi makanan pedas asam dan bersantan.</p>
                            </div>
                        </div>
                        <div class="w-100 pl-3 pr-3 mb-3 list-fact">
                            <div class="title_fact cl-younggreen mb-3">
                                <img src="{{asset('assets/img/bakteri.png')}}" alt=""> BAKTERI
                            </div>
                            <div class="desc-list-fact"> 
                               <p>Asam lambung akan meningkat jika seseorang mengalami stress, sehingga jika ada luka yang dalam, tentunya peningkatan asam lambung akan memperhebat keluhannya.</p>
                            </div>
                        </div>
                        <div class="w-100 pl-3 pr-3 mb-3 list-fact">
                            <div class="title_fact cl-younggreen mb-3">
                                <img src="{{asset('assets/img/pola_hidup.png')}}" alt=""> POLA HIDUP
                            </div>
                            <div class="desc-list-fact"> 
                               <p>Gaya hidup yang tidak sehat juga bisa meningkatkan resiko penyakit maag. Kopi dan soda yang sering diminum, merokok, konsumsi minuman keras, stres dan kurang istirahat memberi kontribusi pada masalah lambung.</p>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card border-0">
                  <div class="card-header bg-younggreen collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h5 class="mb-0">
                        <img src="{{asset('assets/img/composition.png')}}" alt=""><span>KOMPOSISI</span> <i class="fa fa-angle-down"></i>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body komposisi">
                        <p style="text-align: center;"><img src="{{asset('assets/img/hydro_gede.png')}}" alt=""></p>
                        <p style="text-align:left">Hydrotalcite adalah senyawa kompleks yang mengandung aluminium dan magnesium.</p>
                        <p style="text-align:left">Hydrotalcite bekerja untuk melindungi lambung lebih lama, kombinasi Hydrotalcite
                         dan Magnesium hidroksida merupakan antasida yang bekerja untuk menetralkan asam lambung
                         sehingga meringankan gejala dispepsia seperti nyeri ulu hati dan mual akibat iritasi oleh asam lambung dan pepsin.</p>
                         <p style="text-align:left">Sementara, Simethicon mengurangi gelembung-gelembung gas yang berlebihan dalam lambung sehingga meringankan rasa kembung.</p>
                    </div>
                  </div>
                </div>
                <div class="card border-0">
                  <div class="card-header bg-younggreen collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h5 class="mb-0">
                        <img src="{{asset('assets/img/medicine.png')}}" alt=""><span>ATURAN PAKAI</span> <i class="fa fa-angle-down"></i>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class="w-100 pl-3 pr-3 float-left mt-3 mb-4 aturan-pakai">
                            <p style="text-align:center">
                                <img  src="{{asset('assets/img/Group_14.png')}}" alt="">
                            </p>
                            {{-- <div class="bg-younggreen p-3 text-center cl-white aturan rounded-circle">
                                <h4>Aturan Pakai</h4>
                                <h5>Dewasa</h5>
                                <p>1-2 tablet kunyah sehari 3-4 kali</p>
                                <h5>Anak</h5>
                                <p>1-2 tablet kunyah sehari 3-4 kali</p>
                            </div> --}}
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="w-100 float-left mb-3 banner-detail-tablet">
            <img src="{{asset('assets/img/Group_12.png')}}" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center guardian mb-2">
            <div class="title-guardian cl-younggreen mb-2">
                TEMUKAN PRODUCT KAMI DI :
            </div>
            <div class="line-center-green mx-auto bg-younggreen mb-5"></div>
            <img src="{{asset('assets/img/guardian.png')}}" alt="">
        </div>
    </div>
</div>
@endsection

@section('custom_js')

@endsection