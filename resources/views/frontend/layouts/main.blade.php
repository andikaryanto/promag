<!DOCTYPE html>
<html>
    <head>
        @include('frontend/includes/head')
        @yield('custom_css')
    </head>
    <body>
        @include('frontend/includes/header')
        <!-- <div class="wrapper">
           <div class="page-content"> -->
                @yield('content')
           <!--  </div>
        </div> -->
        @include('frontend/includes/footer')
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