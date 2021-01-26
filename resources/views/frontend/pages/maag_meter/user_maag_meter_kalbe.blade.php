@section('custom_css')
<style>
.logo-mobile {
    /* display: none; */
    float: right;
    padding-left: 40px;
    /* margin-left: 120px; */
    /* display: inline-block; */
}
.logo-wrapper {
    display: flex;
    align-items: center;
}
.maagmeter-logo , .logo-mobile {
    display: flex;
    flex: 1;
    align-items: center;
}
.logo-mobile img {
    width: 100px
}
.logo-mobile p {
    margin-bottom: 0 !important;
}
.logo-mobile img {max-width: 220px;}
@media only screen and (max-width: 1016px) {
    .logo-mobile img {max-width: 220px !important;}
}
</style>
@endsection

@extends('frontend/layouts/kalbe')

@section('content')
<!-- middle -->
<section class="banner-home maagmeterlanding">
    <div class="objbanner">
        <span class="ovalhome-green"></span>
        <span class="objtriangle-grey"></span>
        <span class="objcirclelg-grey"></span>
        <span class="objcirclesm-grey"></span>
    </div>
    <div class="wrapper">
        <div class="text">
            <div class="">
                <div class="logo-wrapper">
                <div class="maagmeter-logo md">
                    <img src="{{asset('images/material/maagmeter-green.png')}}" alt="">
                    <span style="display: block;">MAAG<br><b>METER</b></span>
                </div>
                <div class="logo-mobile">
                    <span>
                    <img src="{{asset('images/material/logo-idi.png')}}" alt="">
                    </span>
                    <p style=" max-width: 100px; margin-left: 5px; line-height: 1.5">Perhimpunan Dokter Emergensi Indonesia</p>
                </div>
                </div>
                <div>
                    <br><br>
                </div>
                <div style="max-width: 360px">
                <p>Kenali gejala yang kamu rasakan pada lambungmu!</p>
                <form action="{{ url('maag-meter-kalbe/step-by-step') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="box-form">
                        <div class="col col_5_md">
                            <label for="name">Nama Lengkap</label>
                            <input required type="text" id="name" name="name">
                        </div>
                        <div class="col col_5 col_25_md">
                            <label for="age">Usia</label>
                            <input required type="text" id="age" name="age" onkeypress="if(this.value.length>=2) return false;" min="0">
                        </div>
                        <div class="col col_5 col_25_md">
                            <label for="gender">Jenis Kelamin</label>
                            <div class="box-radio">
                                <input type="radio" name="gender" value="pria" checked="">
                                <span>Pria</span>
                            </div>
                            <div class="box-radio">
                                <input type="radio" name="gender" value="wanita">
                                <span>Wanita</span>
                            </div>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn-rounded btn-lambung">Cek Lambungmu Sekarang</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <figure>
            <img src="{{asset('images/content/banner-maagmeter-right.png')}}" alt="">
            <div class="obj">
                <!-- <span class="objtop-green"></span> -->
                <span class="objbot-green"></span>
                <span class="linebanner-home"></span>
                <span class="objcircle-green"></span>
                <span class="starhome-yellow"></span>
            </div>
        </figure>
    </div>
</section>
<!-- end of middle -->
@endsection