<nav class="menubar">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-4">
                <div class="logo pt-3 pb-3 text-center">
                    <a href="{{url('frontend')}}"><img src="{{asset('assets/img/logo_new.png')}}"/></a>
                </div>
            </div>
            <div class="col-sm-8 col-5"></div>
            <div class="col-sm-2 col-3">
                <div class="berger-menu pt-4 pb-3 text-center">
                    <a href="#" onclick="show_menu()"><img src="{{asset('assets/img/menu.png')}}"/></a>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar position-fixed d-flex flex-column">
        <div class="box-head-side-menu d-flex justify-content-between py-2 mb-5">
            <div class="col-4"></div>
            <div class="col-4 logo">
                <a href="{{url('frontend')}}"><img src="{{asset('assets/img/logo_new.png')}}"/></a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <div class="close_menu pr-3"><a href="#" onclick="close_menu()"><img src="{{asset('assets/img/close.png')}}" alt=""></a></div>
            </div>
        </div>
        <div class="box-menu w-100">
            <ul class="list-unstyled menu-sidebar pl-4 pr-4 cl-white">
                <li><a href="{{url('frontend/about')}}">TENTANG PROMAG</a></li>
                <li><a href="{{url('frontend/product/list')}}">VARIAN PROMAG</a></li>
                <li><a href="{{url('frontend/maag-meter/user')}}">MAAG METER</a></li>
                <li><a href="{{url('frontend/seputar-maag/submenu')}}">SEPUTAR MAAG</a></li>
                <li><a href="{{url('frontend/artikel/list')}}">ARTIKEL & BERITA</a></li>
                <li><a href="{{url('frontend/video/list')}}">VIDEO</a></li>
                {{-- <li><a href="{{url('frontend/contact')}}">HUBUNGI KAMI</a></li> --}}
            </ul>
        </div>
    </div>
</nav>