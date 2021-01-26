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

