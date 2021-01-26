@extends('frontend/layouts/main')

@section('custom_css')
<link href="{{ asset('assets/css/style-brillian.css') }}" rel="stylesheet" />
@endsection

@section('content')
<input type="hidden" id="response_message" value="{{ (\Session::has('message')) ? \Session::get('message') : '' }}" data-status="{{ \Session::get('status') }}">
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
			<form class="mt-3 mb-5" method="post">
				{!! csrf_field() !!}
                        <div class="form-group">
			  <div class="form-group form-contact">
			    <label for="kategori-pesan">Kategori Pesan*</label>
			    <select class="custom-select" name="category" id="kategori-pesan">
			    	<option selected>Komentar</option>
			    	<option >Pertanyaan</option>
			    	
			    </select>
			  </div>
			  <div class="form-group form-contact">
			    <label for="judul-pesan">Judul Pesan*</label>
			    <input type="text" class="form-control" name="title" required id="judul-pesan">
			  </div>
			  <div class="form-group form-contact">
			    <label for="nama">Nama*</label>
			    <input type="text" class="form-control" name="name" required id="nama">
			  </div>
			  <div class="form-group form-contact">
			    <label for="organisasi">Organisasi</label>
			    <input type="text" class="form-control" id="organisasi" name="organization">
			  </div>
			  <div class="form-group form-contact">
			    <label for="email">Email*</label>
			    <input type="email" class="form-control" required id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
			  </div>
			  <div class="form-group form-contact">
			    <label for="phone-number">No. Telp*</label>
			    <input type="text" class="form-control" required id="phone-number" name="phone" onkeypress='validate(event)' minlength="6">
			  </div> 
			  <div class="form-group form-contact">
			    <label for="message">Pesan*</label>
			    <textarea name="message" class="w-100 p-2" rows="4" required id="message"> </textarea>
			  </div>
			  <button type="submit" name="submit" value="send" class="btn btn-primary btn-contact-form-1 px-4 mr-2">Kirim</button>
			</form>
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
<script src="{{ asset('js/sweetalert.js')}}"></script>


<script>
		var msg = $('#response_message').val();
		var status = $('#response_message').data('status');
		if(msg){
			swal('Contact Us',msg,status);
		}
</script>
@endsection