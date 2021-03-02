@extends('frontend/layouts/main')


@section("custom_css")
<style>
 /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1000; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.5); /* Black w/ opacity */
}
.show {
	display: block;
}

/* Modal Content/Box */
.modal-content {
	position: relative;
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
	color: #aaa;
	float: right;
	font-size: 28px;
	font-weight: bold;
	position: absolute;
	top: 10px;
	right: 10px;
	z-index: 1000;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
} 

@media only screen and (max-width: 600px) {
  .modal-content {
    width: 90%;
  }
}
</style>
@endsection

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
            <div class="in-text">
                <div class="maagmeter-logo md">
                    <img src="{{asset('images/material/maagmeter-green.png')}}" alt="maagmeter-green">
                    <span>MAAG<br><b>METER</b></span>
                </div>
                <p>Kenali gejala yang kamu rasakan pada lambungmu!</p>
                <form action="{{ url('maag-meter/step-by-step') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="box-form">
                        <div class="col col_5_md">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div class="col col_5 col_25_md">
                            <label for="age">Usia</label>
                            <input type="text" id="age" name="age" onkeypress="if(this.value.length>=2) return false;" min="0">
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
        <figure>
            <img src="{{asset('images/content/banner-maagmeter-right.png')}}" alt="banner-maagmeter-right">
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

<div class="container-promag wrapper">
    <div class="container-promag-content">
        <h1>Promag Ampuh Atasi Sakit Maag, Nyeri Lambung dan Perut Kembung</h1>
        <p>Promag hadir di Indonesia sejak tahun 1971 dan telah melindungi lambung yang dipercaya dari generasi ke generasi. Seiring perkembangan zaman, Promag terus berinovasi untuk menghadirkan produk-produk berkualitas untuk meredakan nyeri lambung dan perut kembung akibat maag. Kini Promag hadir dengan lebih banyak varian produk yang terbagi menjadi Promag tablet, Promag Double Action, Promag cair dalam kemasan sachet dan kemasan botol serta Promag Herbal.</p>
        <p>Promag merupakan solusi cepat atasi dan redakan sakit maag, nyeri lambung serta perut kembung. Dengan kandungan bahan aktif antasida, seperti kalsium karbonat, magnesium hidroksida, dan hydrotalcite, Promag terbukti efektif menetralkan asam lambung sehingga gejala maag seperti perut kembung, mual, perih saat sebelum atau setelah makan bisa teratasi.</p>
        <h2>Promag Aman Bagi Anak-anak, Ibu Hamil dan Menyusui</h2>
        <p>Apakah Promag aman dikonsumsi oleh ibu hamil, menyusui serta anak-anak?. Promag tablet, cair, dan Double Action terbukti secara klinis aman bagi ibu hamil dan menyusui karena kandungannya tidak diserap ASI. Begitu juga dengan anak-anak yang dapat dengan aman mengkonsumsi Promag. Meskipun demikian, sangat disarankan untuk berkonsultasi terlebih dahulu dengan dokter untuk mendapatkan informasi lebih lanjut</p>
    </div>
</div>
<div class="wrapper">
    <div class="button-wrapper">
        <button class="btn-showmore" onclick="document.querySelector('.container-promag').classList.add('expanded'); this.classList.add('d-none');document.querySelector('.btn-showless').classList.remove('d-none');">Read More<i class="arrow down"></i></button>
        <button class="btn-showless d-none" onclick="document.querySelector('.container-promag').classList.remove('expanded'); document.querySelector('.btn-showmore').classList.remove('d-none');this.classList.add('d-none');">Read Less<i class="arrow up"></i></button>
    </div>
</div>
<!-- end of middle -->
<div id="modal-result" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <a class="close">&times;</a>
    <figure>
		<a href="https://www.instagram.com/p/CHwaiVDh_fI/?utm_source=ig_web_copy_link" target="_blank">
			<img src="{{asset('images/content/popup-banner-user-maag-meter.jpg')}}"/>
		</a>
		</figure>
  </div>

</div>
@endsection

