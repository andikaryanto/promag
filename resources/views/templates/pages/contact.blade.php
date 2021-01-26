@extends('templates/layouts/main')

@section('custom_css')
<link href="{{ asset('assets/css/style-brillian.css') }}" rel="stylesheet" />
@endsection

@section('content')

<div class="w-100">
	<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="title-about mt-4 mb-1">
					 	Hubungi Kami
					</h3>

					<p class="cl-p">Ahlinyalambung is more than happy to receive your feedback. Your comments will help us in improving our products and services. If you have comments, proposal, complaints and suggestions, you can use our web-based internet forms.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12">
			<form class="mt-3 mb-5">
			  <div class="form-group form-contact">
			    <label for="kategori-pesan">Kategori Pesan*</label>
			    <select class="custom-select" id="kategori-pesan">
			    	<option selected>Comment</option>
			    	<option value="1">One</option>
			    	<option value="2">Two</option>
			    	<option value="3">Three</option>
			    </select>
			  </div>
			  <div class="form-group form-contact">
			    <label for="judul-pesan">Judul Pesan*</label>
			    <input type="text" class="form-control" required id="judul-pesan">
			  </div>
			  <div class="form-group form-contact">
			    <label for="nama">Nama*</label>
			    <input type="text" class="form-control" required id="nama">
			  </div>
			  <div class="form-group form-contact">
			    <label for="organisasi">Organisasi</label>
			    <input type="text" class="form-control" id="organisasi">
			  </div>
			  <div class="form-group form-contact">
			    <label for="email">Email*</label>
			    <input type="email" class="form-control" required id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
			  </div>
			  <div class="form-group form-contact">
			    <label for="phone-number">Phone Number*</label>
			    <input type="text" class="form-control" required id="phone-number" onkeypress='validate(event)' minlength="6">
			  </div>
			  <div class="form-group form-contact">
			    <label for="message">Message*</label>
			    <textarea name="" class="w-100 p-2" rows="4" required id="message"></textarea>
			  </div>
			  <button type="submit" class="btn btn-primary btn-contact-form-1 px-4 mr-2">Submit</button>
			</form>
		</div>
	</div>
</div>	

<div class="container">
	<div class="row">
		<div class="col-12 d-flex flex-column align-items-center">
			<h3 class="title-temukan mt-3 mb-1 text-uppercase">
			 	TEMUKAN PRODUCT KAMI DI :
			</h3>
			<div class="line-temukan mb-4"></div>
			<a href="#" class="text-center mb-5" title="">
				<img src="{{ asset('assets/img/logo-guardian.png') }}" class="w-75" alt="">
			</a>
		</div>
	</div>
</div>			

@endsection

@section('custom_js')

<script>
	function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>

@endsection