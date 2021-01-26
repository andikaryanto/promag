<!DOCTYPE html>
<html>
    <head>
        @include('templates/includes/head')
        @yield('custom_css')
    </head>
    <body>
        @include('templates/includes/header')
        <div class="wrapper">
           <div class="page-content">
                @yield('content')
            </div>
        </div>
        @include('templates/includes/footer')
    </body>
    <script src="{{ asset('assets/plugins/jquery/dist/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/owl.carousel/dist/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap4/js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/hamberger.js') }}"></script> --}}
    <script>
        function show_menu(){
            $('.sidebar').addClass('active');
        }
        function close_menu(){
            $('.sidebar').removeClass('active');
        }
        $('.owl-footer').owlCarousel({
            loop:true,
            margin:15,
            nav:false,
            stagePadding: 30,
            dots:false,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
    @yield('custom_js')
</html>