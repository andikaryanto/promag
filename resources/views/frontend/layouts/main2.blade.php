<!DOCTYPE html>
<html>
    <head>
        @include('frontend/includes/head')
        @yield('custom_css')
    </head>
    <body>
      
        <div class="wrapper">
           <div class="">
                @yield('content')
            </div>
        </div>
      
    </body>
    
    @yield('custom_js')
</html>