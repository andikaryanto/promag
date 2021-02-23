@extends('frontend/layouts/main')

@section('content')
<!-- middle -->
<section class="maagmeter-qst maagparallax">
    <div class="obj-maagmenter">
        <span class="circle"></span>
        <span class="circlesm"></span>
        <span class="triangle"></span>
        <span class="triangletwo"></span>
        <span class="dots"></span>
        <span class="objleftstep"></span>
        <span class="his-triangle"></span>
    </div>
    <div class="wrapper">
        <h5>Hallo, {{ $user['name'] }}!!!</h5>
        <form action="{{ url('maag-meter/result') }}" method="post">
        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
        	<input type="hidden" name="user_name" value="{{ $user['name'] }}">
        	<input type="hidden" name="user_age" value="{{ $user['age'] }}">
        	<input type="hidden" name="user_gender" value="{{ $user['gender'] }}">
            <div class="indicator-slidemaagmeter"><span></span></div>
            <div class="slider-maagmeter">
                <div class="list">
                    <p>Pilih <b>pola makan</b> berikut yang paling sesuai dengan kamu (Bisa memilih lebih dari 1)</p>
                    <div class="box-radio-custom">
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step1.png')}}" alt=""></figure>
                            <input type="checkbox" name="makan[1]" value="1">
                            <span>Pola makan<br>tidak teratur</span>
                        </div>
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step2.png')}}" alt=""></figure>
                            <input type="checkbox" name="makan[2]" value="2">
                            <span>Suka konsumsi<br>makanan asam</span>
                        </div>
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step3.png')}}" alt=""></figure>
                            <input type="checkbox" name="makan[3]" value="3">
                            <span>Suka konsumsi<br>makanan pedas</span>
                        </div>
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step4.png')}}" alt=""></figure>
                            <input type="checkbox" name="makan[4]" value="4">
                            <span>Suka konsumsi gorengan</span>
                        </div>
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step5.png')}}" alt=""></figure>
                            <input type="checkbox" name="makan[5]" value="5">
                            <span>Minum kopi</span>
                        </div>
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step6.png')}}" alt=""></figure>
                            <input type="checkbox" name="makan[6]" value="6">
                            <span>Minum alkohol</span>
                        </div>
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step7.png')}}" alt=""></figure>
                            <input type="checkbox" name="makan[7]" value="7">
                            <span>Minum minuman berkarbonasi</span>
                        </div>
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step8.png')}}" alt=""></figure>
                            <input type="checkbox" name="makan[8]" value="8">
                            <span>Makan dalam porsi besar malam hari sebelum tidur</span>
                        </div>
                    </div>
                </div>
                <!-- <div class="list">
                    <p>Pilih <b>pola makan</b> berikut yang paling sesuai dengan kamu (Bisa memilih lebih dari 1)</p>
                    <div class="box-radio-custom">
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step5.png')}}" alt=""></figure>
                            <input type="checkbox" name="makan[5]" value="5">
                            <span>Minum kopi</span>
                        </div>
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step6.png')}}" alt=""></figure>
                            <input type="checkbox" name="makan[6]" value="6">
                            <span>Minum alkohol</span>
                        </div>
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step7.png')}}" alt=""></figure>
                            <input type="checkbox" name="makan[7]" value="7">
                            <span>Minum minuman berkarbonasi</span>
                        </div>
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step8.png')}}" alt=""></figure>
                            <input type="checkbox" name="makan[8]" value="8">
                            <span>Makan dalam porsi besar malam hari sebelum tidur</span>
                        </div>
                    </div>
                </div> -->
                <div class="list">
                    <p>Pilih <b>gaya hidup</b> berikut yang paling sesuai dengan kamu (Bisa memilih lebih dari 1)</p>
                    <div class="box-radio-custom">
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step9.png')}}" alt=""></figure>
                            <input type="checkbox" name="gaya[1]" value="9">
                            <span>Merokok</span>
                        </div>
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step10.png')}}" alt=""></figure>
                            <input type="checkbox" name="gaya[2]" value="10">
                            <span>Kerja tidak kenal waktu</span>
                        </div>
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step11.png')}}" alt=""></figure>
                            <input type="checkbox" name="gayahidup[3]" value="11">
                            <span>Kurang istirahat</span>
                        </div>
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step12.png')}}" alt=""></figure>
                            <input type="checkbox" name="gaya[3]" value="12">
                            <span>Suka minum obat anti radang</span>
                        </div>
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step13.png')}}" alt=""></figure>
                            <input type="checkbox" name="gaya[4]" value="13">
                            <span>Sering minum obat yang mengandung steroid (Contoh pereda nyeri)</span>
                        </div>
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step14.png')}}" alt=""></figure>
                            <input type="checkbox" name="gaya[5]" value="14">
                            <span>Sering terpapar stress berat</span>
                        </div>
                    </div>
                </div>
                <!-- <div class="list">
                    <p>Pilih <b>gaya hidup</b> berikut yang paling sesuai dengan kamu (Bisa memilih lebih dari 1)</p>
                    <div class="box-radio-custom tri-on-tablet">
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step12.png')}}" alt=""></figure>
                            <input type="checkbox" name="gaya[3]" value="12">
                            <span>Suka minum obat anti radang</span>
                        </div>
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step13.png')}}" alt=""></figure>
                            <input type="checkbox" name="gaya[4]" value="13">
                            <span>Sering minum obat yang mengandung steroid (Contoh pereda nyeri)</span>
                        </div>
                        <div class="ls">
                            <figure><img src="{{asset('images/maagmeter/step14.png')}}" alt=""></figure>
                            <input type="checkbox" name="gaya[5]" value="14">
                            <span>Sering terpapar stress berat</span>
                        </div>
                    </div>
                </div> -->

                <!-- type3 -->
                <div class="list">
                    <p>Gejala manakah yang sering kamu rasakan <b>dalam 6 bulan terakhir</b> ini ?</p>
                    <div class="box-radio-custom sidebyside">
                        <div class="ls">
                            <input type="checkbox" name="gejala[1]" checked="" value="15">
                            <span>Kembung dan rasa penuh</span>
                        </div>
                        <div class="ls">
                            <input type="checkbox" name="gejala[2]" value="16">
                            <span>Cepat Kenyang</span>
                        </div>
                        <div class="ls">
                            <input type="checkbox" name="gejala[3]" value="18">
                            <span>Nyeri / perih ulu hati</span>
                        </div>
                        <div class="ls">
                            <input type="checkbox" name="gejala[4]" value="18">
                            <span>Rasa panas di ulu hati</span>
                        </div>
                        <div class="ls">
                            <input type="checkbox" name="gejala[5]" value="19">
                            <span>Mual</span>
                        </div>
                        <div class="ls">
                            <input type="checkbox" name="gejala[6]" value="20">
                            <span>Muntah</span>
                        </div>
                        <!-- <div class="ls">
                            <input type="checkbox" name="gejala[7]" value="21">
                            <span>Mules</span>
                        </div> -->
                        <div class="ls">
                            <input type="checkbox" name="gejala[8]" value="22">
                            <span>Rasa terbakar di dada</span>
                        </div>
                        <!-- <div class="ls">
                            <input type="checkbox" name="gejala[9]" value="23">
                            <span>Pusing</span>
                        </div> -->
                        <div class="ls">
                            <input type="checkbox" name="gejala[10]" value="24">
                            <span>Aliran balik isi lambung ke rongga mulut</span>
                        </div>
                        <!-- <div class="ls">
                            <input type="checkbox" name="gejala[11]" value="25">
                            <span>Rasa terbakar di ulu hati</span>
                        </div> -->
                        <div class="ls">
                            <input type="checkbox" name="gejala[13]" value="27">
                            <span>Rasa pahit di mulut</span>
                        </div>
                        <div class="ls">
                            <input type="checkbox" name="gejala[12]" value="26">
                            <span>Sering sakit tenggorokan</span>
                        </div>
                        <!-- <div class="ls">
                            <input type="checkbox" name="gejala[14]" value="28">
                            <span>Rasa asam di mulut</span>
                        </div> -->
                        <!-- <div class="ls">
                            <input type="checkbox" name="gejala[15]" value="29">
                            <span>Sulit menelan</span>
                        </div> -->
                    </div>
                </div>
                <div class="list">
                    <p>Sudah berapa lama <b>gejala-gejala</b> tersebut dirasakan ?</p>
                    <div class="side-img-qst">
                        <figure>
                            <img src="{{asset('images/maagmeter/kurang3bulan.png')}}" alt="">
                            <div class="box-radio-custom fullside">
                                <div class="ls">
                                    <input type="radio" name="lamagejala" checked="" value="30">
                                    <span>Kurang dari 3 bulan</span>
                                </div>
                            </div>
                        </figure>
                        <figure>
                            <img src="{{asset('images/maagmeter/lebih3bulan.png')}}" alt="">
                            <div class="box-radio-custom fullside">
                                <div class="ls">
                                    <input type="radio" name="lamagejala" value="31">
                                    <span>Lebih dari 3 bulan</span>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="list">
                    <p>Apakah gejala-gejala yang dialami tersebut <b>mengganggu aktivitas</b> kamu?</p>
                    <div class="box-radio-custom sidebyside">
                        <div class="ls">
                            <input type="radio" name="ganggu" checked="" value="Tidak mengganggu, Saya tetap bisa menjalankan aktivitas saya seperti biasa">
                            <div class="desc-radio-custom">
                                <h5>Tidak mengganggu</h5>
                                <p>Saya tetap bisa menjalankan aktivitas saya seperti biasa</p>
                            </div>
                        </div>
                        <div class="ls">
                            <input type="radio" name="ganggu" value="Tidak terlalu mengganggu, Saya masih bisa menjalankan aktivitas walaupun sedikit merasa tidak nyaman">
                            <div class="desc-radio-custom">
                                <h5>Tidak terlalu mengganggu</h5>
                                <p>Saya masih bisa menjalankan aktivitas walaupun sedikit merasa tidak nyaman</p>
                            </div>
                        </div>
                        <div class="ls">
                            <input type="radio" name="ganggu" value="Agak mengganggu, Saya masih bisa menjalankan aktivitas tetapi tidak fokus dan tidak bisa menikmati aktivitas">
                            <div class="desc-radio-custom">
                                <h5>Agak mengganggu</h5>
                                <p>Saya masih bisa menjalankan aktivitas tetapi tidak fokus dan tidak bisa menikmati aktivitas</p>
                            </div>
                        </div>
                        <div class="ls">
                            <input type="radio" name="ganggu" value="Sangat mengganggu, Saya tidak bisa melanjutkan aktivitas setiap kali mengalami gejala tersebut">
                            <div class="desc-radio-custom">
                                <h5>Sangat mengganggu</h5>
                                <p>Saya tidak bisa melanjutkan aktivitas setiap kali mengalami gejala tersebut</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-control btn-control-maagmeter">
                <button type="button" class="btn-rounded btn-mid btn-darkgrey btn-prev">Kembali</button>
                <button type="button" class="btn-rounded btn-mid btn-greenlight btn-next">Selanjutnya</button>
            </div>
        </form>
    </div>
</section>

<script>
    $(function(){
        var slider = $('.slider-maagmeter'),
            countt = slider.find('.list').length;
        slider.slick({
            infinite:false,
            arrows:false,
            swipe:false,
            adaptiveHeight: true,
            fade:true
        });

        // indicator
        var indicator = $('.indicator-slidemaagmeter'),
            countslide = slider.find('.list').length;
            topindd = (1 / countslide) * 100;
        indicator.find('span').css('width',topindd+'%');
        // end indicator

        $('.btn-control-maagmeter .btn-prev').addClass('gone');

        $(slider).on('beforeChange', function(event, slick, currentSlide, nextSlide){
            /*button arrow*/
            var num = nextSlide+1;
            if(nextSlide < 1){
                $('.btn-control-maagmeter .btn-prev').addClass('gone');
            }else{
                $('.btn-control-maagmeter .btn-prev').removeClass('gone');
            }
            console.log(num +' + '+ countt);
            if(num >= countt){
                $('.btn-control-maagmeter .btn-next').html('Lihat Hasil');
                setTimeout(function(){
                    $('.btn-control-maagmeter .btn-next').attr({'type':'submit'});
                },100);
            }else{
                $('.btn-control-maagmeter .btn-next').html('Selanjutnya');
                $('.btn-control-maagmeter .btn-next').attr({'type':'button'});
            }
            /*end button arrow*/

            /*indicator*/
            var indicator = $('.indicator-slidemaagmeter'),
                countslide = slider.find('.list').length;
                topindd = ((nextSlide+1) / countslide) * 100;
            indicator.find('span').css('width',topindd+'%');
            /*end indicator*/
        });


        $('.btn-control .btn-rounded.btn-prev').on('click',function(){
            slider.slick('slickPrev');
        })
        $('.btn-control .btn-rounded.btn-next').on('click',function(){
            slider.slick('slickNext');
        })
    })
</script>
<!-- end of middle -->
@endsection