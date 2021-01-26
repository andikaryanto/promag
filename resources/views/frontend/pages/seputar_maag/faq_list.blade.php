@extends('frontend/layouts/main')

@section('custom_css')
<link href="{{ asset('assets/css/style-brillian.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="bg-artikel">
    <div class="container">
        <div class="title-about title-splist pl-3 pt-5 mb-5">
            <h3>Pertanyaan Umum Seputar Maag</h3>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="bg-white p-3 mb-5">
                    <ol type="1" class="faq">
				
						@foreach($faqs as $q)
							<li>
								<div class="item-faq pl-3">
									<h4>{{ $q->question }}</h4>
									{!! $q->answer !!}
								</div>
							</li>
						@endforeach
                        
                       
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_js')



@endsection