<meta charset="UTF-8">
<title>{{ $meta['meta_title'] ? ''. $meta['meta_title']  : 'Promag' }}</title>
<script>
    var path = "{{ asset('') }}";
</script>
<meta name="description" content="{{ $meta['meta_description'] }}">
<meta name="robot" content="{{ $meta['meta_robot'] }}">
<meta name="keyword" content="{{ $meta['meta_keyword'] }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
@if($share)
<meta property="og:title" content="Aku sudah berhasil mengecek kondisi lambungku">
<meta property="og:image" content="{{ asset('assets/img/share.jpg') }}">
<meta property="og:description" content="Ayo kenali juga kondisi lambungmu">
<meta property="og:url" content="{{ url('share') }}">
<meta name="twitter:card" content="{{ asset('assets/img/share.jpg') }}">
@endif
<link rel="canonical" href="{{ url()->current() }}" />
<!-- <link href="{{ asset('assets/plugins/bootstrap4/css/bootstrap.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/hamberger-css/hamburgers.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" /> -->

<link rel="icon" href="{{ asset('favicon.ico') }}">

<!--Style-->
<!--build:css css/styles.min.css--> 
<!-- <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/desktop.css') }}">
<link rel="stylesheet" href="{{ asset('css/tablet.css') }}">
<link rel="stylesheet" href="{{ asset('css/mobile.css') }}"> -->
<link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
<!--endbuild-->

<!--js-->
<!--build:js js/main.min.js -->
<!-- <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/TweenMax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/select2.full.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js_lib.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js_run.js') }}"></script> -->
 <script type="text/javascript" src="{{ asset('js/main.min.js') }}"></script>
<!--endbuild-->


