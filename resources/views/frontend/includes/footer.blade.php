        <!--Footer -->
        <footer>
            <div class="toplinefoot"></div>
            <div class="wrapper">
                <div class="foot-top">
                    <a href="{{url('/')}}" class="logo-foot"><img src="{{ asset('images/material/logo-foot.png') }}" alt="logo-foot"></a>
                    <div class="nav-foot">
                        <a class="hidemob" href="{{url('about')}}">Tentang PROMAG</a>
                        <a class="hidemob" href="{{url('product/list')}}">Varian PROMAG</a>
                        <a class="hidemob" href="{{url('maag-meter')}}">Maag Meter</a>
                        <a class="hidemob" href="{{url('article/list')}}">Artikel</a>
                      <!--  <a href="{{url('syarat')}}">Syarat & Ketentuan</a> -->
                        <a href="{{url('privacy')}}">Kebijaksanaan Privasi</a>
                    </div>
                    <div class="logo-right-foot"><img src="{{ asset('images/material/kalbe.png') }}" alt="kalbe"></div>
                </div>
                <div class="copyright">Copyright © 2019 - PROMAG. All Right Reserved. </div>
            </div>
        </footer>
        <!--end of Footer -->
        </div>
    </body>
</html>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143675255-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-143675255-1');
</script>
@section('custom_js')



@endsection