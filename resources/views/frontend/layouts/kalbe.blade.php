<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Maag Meter</title>
		<link rel="icon" href="favicon.ico">

		<link rel="stylesheet" href="{{ asset('/css/styles.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
		<script type="text/javascript" src="{{ asset('js/main.min.js') }}"></script>



        @yield('custom_css')
    </head>
    <body>
        <!-- <div class="wrapper">
           <div class="page-content"> -->
                @yield('content')
           <!--  </div>
        </div> -->
        <footer style="padding: 140px 0 70px">
            <div class="wrapper">
                <div class="copyright">Copyright © 2019 - Kalbe. All Right Reserved.</div>
            </div>
        </footer>
    </body>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-105670580-15"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-105670580-15');
    </script>
    @yield('custom_js')
</html>