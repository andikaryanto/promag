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
                Cair
            </div>
            <div class="container-detail-product">
                <div class="img-product-detail text-center">
                    <img src="{{asset('assets/img/promag_2.png')}}" alt="">
                </div>
                <div class="desc_detail pl-4 pr-4 mb-2">
                    <h4 style="text-align: center;">Takaran Pas Langsung Minum</h4>
                    <p>obat maag dengan  <img src="{{asset('assets/img/formula.png')}}" alt="">
                    Magnesium Hydroxide, dan Simethicone
                    redakan  sakit maag & kembung dengan cepat komposisi pas.</p>
                    <div class="media ">
                        <img class="align-self-center mr-4" src="{{asset('assets/img/positive-vote.png')}}" alt="">
                        <div class="media-body">
                            <h4 class="mt-0" style="color:#82be42;text-align: left;">KOMPOSISI PAS</h4>
                            <p><i>Dosis pas cepat redakan sakit maag</i></p>
                        </div>
                    </div>
                    <div class="media">
                        <img class="align-self-center mr-4" src="{{asset('assets/img/insurance.png')}}" alt="">
                        <div class="media-body">
                            <h4 class="mt-0" style="color:#82be42;text-align: left;">AMAN</h4>
                            <p><i>Jika diminum seusai dosis anjuran</i></p>
                        </div>
                    </div>
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
                        <p style="text-align: center;"><img src="{{asset('assets/img/promag_cair_hd.png')}}" alt=""></p>
                        <h5 style="text-align: left;color:#036242;">Informasi aturan pakai:</h5>
                        <p style="text-align: left;color:#82be42;">Dewasa 1 - 2 sachet sehari 3 - 4 kali
                        <br/>    
                        Anak ½ - 1 sachet sehari 3 – 4 kali</p>
                        <p style="text-align: center;"><img src="{{asset('assets/img/hydro_gede.png')}}" alt=""></p>
                        <p style="text-align:left">Hydrotalcite adalah senyawa kompleks yang mengandung aluminium dan magnesium.</p>
                        <p style="text-align:left">Hydrotalcite bekerja untuk melindungi lambung lebih lama, kombinasi Hydrotalcite
                         dan Magnesium hidroksida merupakan antasida yang bekerja untuk menetralkan asam lambung
                         sehingga meringankan gejala dispepsia seperti nyeri ulu hati dan mual akibat iritasi oleh asam lambung dan pepsin.</p>
                         <p style="text-align:left">Sementara, Simethicon mengurangi gelembung-gelembung gas yang berlebihan dalam lambung sehingga meringankan rasa kembung.</p>
                         <h3 style="color:#82be42"><b>Magnesium Hydroxite</b></h3>
                         <p style="text-align:left">Hydrotalcite adalah senyawa kompleks yang mengandung aluminium dan magnesium.</p>
                         <p style="text-align:left">Hydrotalcite bekerja untuk melindungi lambung lebih lama, kombinasi Hydrotalcite
                             dan Magnesium hidroksida merupakan antasida yang bekerja untuk menetralkan asam lambung sehingga meringankan
                              gejala dispepsia seperti nyeri ulu hati dan mual akibat iritasi oleh asam lambung dan pepsin.</p>
                        <p style="text-align:left">Sementara, Simethicon mengurangi gelembung-gelembung gas yang berlebihan dalam lambung sehingga meringankan rasa kembung.</p>
                        <h3 style="color:#82be42"><b>Simethicone</b></h3>
                        <p>Simethicone berguna menghilangkan rasa kembung dan rasa tidak enak di dalam perut.</p>
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
                        <p><img src="{{asset('assets/img/DETAIL_PRODUCT_2.png')}}" alt=""></p>
                        <h4 style="color:#006341"><b>Dewasa & Anak diatas 12 tahun : </b></h4>
                        <h4 style="color:#8ac649">2 x 1 tablet kunyah perhari,</h4>
                        <p>diminum jika timbul gejala atau 1 jam sebelum makanan yang dapat merangsang produksi asam lambung, maksimum 2 tablet/hari (2 tablet dalam 24 jam)
                            sebaiknya tidak diminum bersama dengan makanan
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
                <div class="card border-0">
                  <div class="card-header bg-younggreen collapsed" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                    <h5 class="mb-0">
                        <img src="{{asset('assets/img/rounded-add-button.png')}}" alt=""><span>KEUNGGUAN</span> <i class="fa fa-angle-down"></i>
                    </h5>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        <div class="w-100 pl-3 pr-3 float-left mt-3 mb-4 keunggulan">
                            <div class="media mb-4">
                                <img class="align-self-center mr-4" src="{{asset('assets/img/clock_copy.png')}}" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0" style="color:#036141">Mula kerja cepat</h5>
                                    <p>Mengatasi gejala kelebihan asam lambung, memberi kenyamanan pada penderita dengan cepat</p>
                                </div>
                            </div>
                            <div class="media mb-4">
                                <img class="align-self-center mr-4" src="{{asset('assets/img/fast_copy.png')}}" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0" style="color:#036141">Mula kerja lama</h5>
                                    <p>Melindungi dan memberi kenyamanan peningkatan asam lambunglebih lama sampai 12 Jam</p>
                                </div>
                            </div>
                            <div class="media mb-4">
                                <img class="align-self-center mr-4" src="{{asset('assets/img/pills.png')}}" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0" style="color:#036141">2 aksi dalam 1 Tablet</h5>
                                    <p>Menetralisir asam lambung sekaligus menekan produksi asam lambung, dan menjaga kenyamanan lebih lama</p>
                                </div>
                            </div>
                            <div class="media mb-4">
                                <img class="align-self-center mr-4" src="{{asset('assets/img/calcium.png')}}" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0" style="color:#036141">Mengandung Kalsium</h5>
                                    <p>Membantu memenuhi kebutuhan Kalsium tubuh</p>
                                </div>
                            </div>
                            <div class="media mb-4">
                                <img class="align-self-center mr-4" src="{{asset('assets/img/mudah_didapatkan.png')}}" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0" style="color:#036141">Mudah didapatkan</h5>
                                    <p>Membantu memenuhi kebutuhan Kalsium tubuh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row hidden">
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