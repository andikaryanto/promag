{{-- <div class="temukan-produk-kami py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center mb-4">
                    TEMUKAN PRODUK KAMI DI
                </h3>
            </div>
        </div> --}}

        {{-- <div class="row d-flex justify-content-center">
            <div class="col-6 d-flex justify-content-center mb-4">
                <a href="#">
                    <img src="{{ asset('assets/img/klik dokter BW.png') }}" class="img-fluid object-fit-contain" alt="">
                </a>
            </div>
            <div class="col-6 d-flex justify-content-center mb-4">
                <a href="#">
                    <img src="{{ asset('assets/img/kal care BW (1).png') }}" class="img-fluid object-fit-contain" alt="">
                </a>
            </div>
            <div class="col-6 d-flex justify-content-center mb-4">
                <a href="#">
                    <img src="{{ asset('assets/img/kalbe store BW (2).png') }}" class="img-fluid object-fit-contain" alt="">
                </a>
            </div>
        </div> --}}

{{-- yang dipakai --}}
        {{-- <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme owl-footer">
                    <div class="item">
                        <a href="#">
                            <img src="{{ asset('assets/img/tokopedia.png') }}" class="img-fluid object-fit-contain" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="{{ asset('assets/img/bukalapak.png') }}" class="img-fluid object-fit-contain" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="{{ asset('assets/img/shopee.png') }}" class="img-fluid object-fit-contain" alt="">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="footer w-100 float-left cl-white">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 col-12 px-4 mb-3">
                <div class="row">
                    <div class="col-6 mb-4 px-4 pb-2"><a href="{{url('frontend/about')}}">Tentang Promag</a></div>
                    <div class="col-6 mb-4 px-4 pb-2"><a href="{{url('frontend/product/list')}}">Varian Promag</a></div>
                    <div class="col-6 mb-4 px-4 pb-2"><a href="{{url('frontend/maag-meter/user')}}">Maag Meter</a></div>
                    <div class="col-6 mb-4 px-4 pb-2"><a href="{{url('frontend/seputar-maag')}}">Seputar Maag</a></div>
                    <div class="col-6 mb-4 px-4 pb-2"><a href="{{url('frontend/artikel/list')}}">Artikel & Berita</a></div>
                    <div class="col-6 mb-4 px-4 pb-2"><a href="{{url('frontend/video/list')}}">Video</a></div>
                    {{-- <div class="col-6 mb-4 pb-2"><a href="{{url('frontend/contact')}}">Hubungi Kami</a></div> --}}
                </div>
            </div>
            <div class="col-md-4 col-12 mb-3 hidden">
                <form>
                    <div class="title-subs-share mb-4">Subscribe to our newsletter</div>
                    <div class="input-group group-subscribe rounded-0 mb-3">
                        <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control txt-subs rounded-0" placeholder="Your Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-subs rounded-0" type="button">SUBSCRIBE</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-12 pl-mb-5 mb-3 d-flex flex-column">
                <div class="px-3 ">
                    <div class="title-subs-share mb-3">Promag</div>
                    <ul class="list-unstyled share_icon float-left mb-3">
                        <li><a target="blank"  href="#"></a></li>
                        <li><a target="blank"  href="#"></a></li>
                        <li><a target="blank"  href="#"></a></li>
                        <li><a target="blank" href="https://www.youtube.com/user/PromagFruity"></a></li>
                    </ul>
                </div>
                <div class="px-3 hidden">
                    <div class="title-subs-share mb-3">Gazero</div>
                    <ul class="list-unstyled share_icon float-left">
                        <li><a target="blank"  href="#"></a></li>
                        <li><a target="blank"  href="#"></a></li>
                        <li><a target="blank"  href="#"></a></li>
                        <li><a target="blank"  href="https://www.youtube.com/user/GazeroID"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-12">
               <div class="py-4 px-3 bt-foot text-left copyright"> &copy;2019 Promag - All rights reserved</div>
            </div>
        </div>
    </div>
</div>

@section('custom_js')
<script>

</script>
@endsection