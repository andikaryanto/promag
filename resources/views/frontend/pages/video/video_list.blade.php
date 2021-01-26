@extends('frontend/layouts/main')

@section('custom_css')
<link href="{{ asset('assets/css/style-brillian.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="bg-artikel">
	<div class="d-md-block d-sm-none d-none">
		<div class="d-flex justify-content-between ">
				<div class="top-bunga">
						<img src="{{asset('assets/img/bunga.png')}}" alt="">
				</div>
				
				<div class="top-bunga text-right">
						<img src="{{asset('assets/img/bunga-kanan.png')}}" alt="">
				</div>
		</div>
	</div>
	<div class="w-100">
		<div class="container"> 
			<div class="row">
				<div class="col-12">
					<ul class="nav nav-tabs w-100 justify-content-center border-bottom-0 mt-4 mb-4" id="myTab" >
						<li class="nav-item nav-video">
							<a class="nav-link {{ $type=='Video' ? 'active' : ''}} px-4" href="{{ url('video/list/?type=Video') }}" id="video-tab"  role="tab" aria-controls="video-content" aria-selected="{{ $type=='Video' ? 'true' : 'false'}}">Video</a>
						</li>
						<li class="nav-item nav-video">
							<a class="nav-link {{ $type=='TVC' ? 'active' : ''}} px-4" href="{{ url('video/list/?type=TVC') }}" id="tvc-tab"   role="tab" aria-controls="tvc-content" aria-selected="{{ $type=='TVC' ? 'true' : 'false'}}">TVC</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="tab-content" id="myTabContent">

				<!-- Video Content -->
		
				<div class="tab-pane fade show active" id="video-content" role="tabpanel" aria-labelledby="video-tab">
						<div class="py-5 px-6 bg-white">
							<div class="row">
								<div class="col-12">
									<h3 class="title-about title-video  mb-3">
										{{ $type }}
									</h3>
									<div class="video-text text-center">
										{!! $video_setting[strtolower($type).'_content'] !!}
									</div>
								</div>
							</div>
							<div class="row d-flex justify-content-lg-center">
								@foreach ($videos as $data )
			
										@php
											if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $data->video, $match)) {
														$video_id = $match[1];
												}
										@endphp
											<div class="col-lg-5 col-md-6 col-sm-12 col-12">
												<a href="#" class="video-btn" data-toggle="modal" data-target="#modal-video" data-toggle="modal" data-src="https://www.youtube.com/embed/{{ $video_id }}">
													<img src="http://img.youtube.com/vi/{{ $video_id }}/hqdefault.jpg" class="img-video-thumbnail mb-3" alt="">
													<div class="centered">
														<img src="{{ asset('assets/img/play.png') }}" alt="">
													</div>
													<div class="caption-video mb-4">{{ $data->title }}</div>
												</a>
											</div>
									@endforeach
							</div>
							
						</div>
						<div class="row">
							<div class="col-12 d-flex justify-content-center pagination-area pt-5 pb-3 mb-5">
								{{ $videos->appends(request()->query())->links('frontend/pagination/article') }}
							</div>
						</div>
				</div>
		
				<!-- TVC Content -->
			</div>

		</div>
	
	</div>	
	<div class="d-md-block d-sm-none d-none">
		<div class="w-100 d-flex justify-content-between ">
				<div class="bottom-bunga mt-4">
						<img src="{{asset('assets/img/group-copy-3.png')}}" alt="">
				</div>
				
				<div class="bottom-bunga text-right">
						<img src="{{asset('assets/img/group-copy-2.png')}}" alt="">
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