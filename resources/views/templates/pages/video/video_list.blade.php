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
					<ul class="nav nav-tabs w-100 justify-content-center border-bottom-0 mt-4 mb-4" id="myTab" role="tablist">
					  <li class="nav-item nav-video">
					    <a class="nav-link active px-4" id="video-tab" data-toggle="tab" href="#video-content" role="tab" aria-controls="video-content" aria-selected="true">Video</a>
					  </li>
					  <li class="nav-item nav-video">
					    <a class="nav-link px-4" id="tvc-tab" data-toggle="tab" href="#tvc-content" role="tab" aria-controls="tvc-content" aria-selected="false">TVC</a>
					  </li>
					</ul>
				</div>

				
			</div>
		</div>
	</div>
</div>	

<div class="tab-content" id="myTabContent">

	<!-- Video Content -->

	<div class="tab-pane fade show active" id="video-content" role="tabpanel" aria-labelledby="video-tab">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="title-about mt-3 mb-1">
					 	Video
					</h3>
					<p class="video-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>

				<div class="col-12">
					<a href="#" class="video-btn" data-toggle="modal" data-target="#modal-video" data-toggle="modal" data-src="https://www.youtube.com/embed/gMSknzo37qk">
						<img src="http://img.youtube.com/vi/gMSknzo37qk/hqdefault.jpg" class="w-100 img-video-thumbnail mb-3" alt="">
						<div class="centered">
							<img src="{{ asset('assets/img/play.png') }}" alt="">
						</div>
					</a>
				</div>

				<div class="col-12">
					<a href="#" class="video-btn" data-toggle="modal" data-target="#modal-video" data-toggle="modal" data-src="https://www.youtube.com/embed/GPj9zd6ph7Y">
						<img src="http://img.youtube.com/vi/GPj9zd6ph7Y/hqdefault.jpg" class="w-100 img-video-thumbnail mb-3" alt="">
						<div class="centered">
							<img src="{{ asset('assets/img/play.png') }}" alt="">
						</div>
					</a>
				</div>

				<div class="col-12">
					<a href="#" class="video-btn" data-toggle="modal" data-target="#modal-video" data-toggle="modal" data-src="https://www.youtube.com/embed/w8kCddw0T3I">
						<img src="http://img.youtube.com/vi/w8kCddw0T3I/hqdefault.jpg" class="w-100 img-video-thumbnail mb-3" alt="">
						<div class="centered">
							<img src="{{ asset('assets/img/play.png') }}" alt="">
						</div>
					</a>
				</div>

				<div class="col-12 d-flex justify-content-center pagination-area pt-5 pb-3">
					<ul class="pagination">
					  <li class="page-item"><a class="page-link" href="#">
					  	<i class="fa fa-angle-left" aria-hidden="true"></i>
					  </a></li>
					  <li class="page-item"><a class="page-link" href="#">1</a></li>
					  <li class="page-item active"><a class="page-link" href="#">2</a></li>
					  <li class="page-item"><a class="page-link" href="#">3</a></li>
					  <li class="page-item"><a class="page-link" href="#">
					  	<i class="fa fa-angle-right" aria-hidden="true"></i>
					  </a></li>
					</ul>
				</div>
			</div>
		</div>	
	</div>

	<!-- TVC Content -->

	<div class="tab-pane fade" id="tvc-content" role="tabpanel" aria-labelledby="tvc-tab">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="title-about mt-3 mb-1">
					 	TVC
					</h3>
					<p class="video-text">
						Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing
					</p>
				</div>

				<div class="col-12">
					<a href="#" class="video-btn" data-toggle="modal" data-target="#modal-video" data-toggle="modal" data-src="https://www.youtube.com/embed/gMSknzo37qk">
						<img src="http://img.youtube.com/vi/gMSknzo37qk/hqdefault.jpg" class="w-100 img-video-thumbnail mb-3" alt="">
						<div class="centered">
							<img src="{{ asset('assets/img/play.png') }}" alt="">
						</div>
					</a>
				</div>

				<div class="col-12">
					<a href="#" class="video-btn" data-toggle="modal" data-target="#modal-video" data-toggle="modal" data-src="https://www.youtube.com/embed/GPj9zd6ph7Y">
						<img src="http://img.youtube.com/vi/GPj9zd6ph7Y/hqdefault.jpg" class="w-100 img-video-thumbnail mb-3" alt="">
						<div class="centered">
							<img src="{{ asset('assets/img/play.png') }}" alt="">
						</div>
					</a>
				</div>

				<div class="col-12">
					<a href="#" class="video-btn" data-toggle="modal" data-target="#modal-video" data-toggle="modal" data-src="https://www.youtube.com/embed/w8kCddw0T3I">
						<img src="http://img.youtube.com/vi/w8kCddw0T3I/hqdefault.jpg" class="w-100 img-video-thumbnail mb-3" alt="">
						<div class="centered">
							<img src="{{ asset('assets/img/play.png') }}" alt="">
						</div>
					</a>
				</div>

				<div class="col-12 d-flex justify-content-center pagination-area pt-5 pb-3">
					<ul class="pagination">
					  <li class="page-item"><a class="page-link" href="#">
					  	<i class="fa fa-angle-left" aria-hidden="true"></i>
					  </a></li>
					  <li class="page-item"><a class="page-link" href="#">1</a></li>
					  <li class="page-item active"><a class="page-link" href="#">2</a></li>
					  <li class="page-item"><a class="page-link" href="#">3</a></li>
					  <li class="page-item"><a class="page-link" href="#">
					  	<i class="fa fa-angle-right" aria-hidden="true"></i>
					  </a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>	

<!-- Modal -->
<div class="modal fade" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog mt-4 mx-sm-auto mx-3" role="document">
    <div class="modal-content">
      <div class="modal-body py-4 px-3">
       <button type="button" class="btn-close-modal close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>      
        <!-- 16:9 aspect ratio -->
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
				</div>      
      </div>
    </div>
  </div>
</div>				
@endsection

@section('custom_js')

<script>

$(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;  
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);

  
  
// when the modal is opened autoplay it  
$('#modal-video').on('shown.bs.modal', function (e) {
    
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
})
  


// stop playing the youtube video when I close the modal
$('#modal-video').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',$videoSrc); 
}) 
    
    


  
  
// document ready  
});

</script>

@endsection