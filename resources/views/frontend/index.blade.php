@extends('frontend/layouts/main')

@section('content')
<!-- middle -->
<div class="loader">
    <div class="box-img-loader">
        <div class="img-loader"></div>
        <div class="shadow-loader"></div>
    </div>
</div>
<section class="banner-home">
    <div class="objbanner">
        <span class="ovalhome-green"></span>
        <span class="objtriangle-grey"></span>
        <span class="objcirclelg-grey"></span>
        <span class="objcirclesm-grey"></span>
    </div>
    <div class="wrapper">
        <div class="text">
            <div class="in-text">
                <div class="maagmeter-logo">
                    <img src="{{ asset('images/material/maagmeter-green.png') }}" alt="maagmeter-green">
                    <span>MAAG<br><b>METER</b></span>
                </div>
                <h2>Cek Kondisi <span>Lambung</span>mu</h2>
                <p>Kenali gejala yang kamu rasakan pada lambungmu!</p>
                <a href="{{url('maag-meter')}}" class="btn-rounded btn-lambung">Cek Lambungmu Sekarang</a>
            </div>
        </div>
        <figure>
            <img src="{{ asset('images/content/bannerhome.png') }}" alt="bannerhome">
            <div class="obj">
                <span class="objtop-green"></span>
                <span class="objbot-green"></span>
                <span class="linebanner-home"></span>
                <span class="objcircle-green"></span>
                <span class="starhome-yellow"></span>
            </div>
        </figure>
    </div>
</section> 

<section class="product-home">
    <div class="objproduct">
        <span class="stargreytop"></span>
        <span class="objprodtopline"></span>
        <span class="circlegreen"></span>
        <span class="circlesm-grey"></span>
        <span class="trianglesm-grey"></span>
        <span class="stargreytopsm"></span>
        <span class="trianglemd-grey"></span>
        <span class="triangelline-grey"></span>
    </div>
    <div class="wrapper">
        <div class="bgprodhome">
            <span class="objtopprodsm"></span>
            <span class="objtopleftprod"></span>
            <span class="objbotprod"></span>
            <span class="objcircle-green"></span>
            <span class="objcirclesm-green"></span>
        </div>
        <div class="text">
            <h5>Varian Produk</h5>
            <h3>Promag terus berinovasi menghadirkan <span>produk- produk berkualitas</span></h3>
            <p>Dosis pas dan cepat dan cepat redakan sakit maag dan kembung</p>
            <a href="{{url('product/list')}}" class="btn-rounded btn-linewhite">Lihat Semua Varian</a>
        </div>
        <figure>
            <img src="{{ asset('images/content/varianproduk.png') }}" alt="varianproduk">
            <span class="dots-grey"></span>
        </figure>
    </div>
</section>

<section class="article-home">
    <div class="objlinegrey"></div>
    <div class="wrapper">
        <div class="title-side">
            <div class="ttl-left"><h5>Artikel Terbaru</h5></div>
            <div class="ttl-right"><a href="{{url('article/list')}}" class="btn-rounded btn-green btn-sm">Lihat Semua</a></div>
        </div>
        <div class="slider-article">

            @foreach ($articles as $article )
                <a href="{{ url('article/detail/'.$article->slug) }}" class="list">
                    <figure><img src="{{asset($article->picture)}}" alt="{{ $article->picture }}"></figure>
                    <div class="desc">
                        <span>{{ $article->Category->name }}</span>
                        <h4>{{ $article->title }}</h4>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
</section>

<section class="video-home">
    <div class="wrapper">
        <div class="objvidhome">
            <span class="linesbgvid"></span>
            <span class="objvidright"></span>
            <span class="objvidleft"></span>
            <span class="objrgbotvid"></span>
            <span class="trianglesamakaki"></span>
            <span class="circlevid-green"></span>
            <span class="starvid"></span>
            <span class="circlevid-grey"></span>
            <span class="dotsvid"></span>
            <span class="circleline-grey"></span>
            <div class="plus"><span></span><span></span></div>
        </div>
        <div class="box-video">
            <div class="overlay-img"></div>
            <img src="{{ asset('images/content/videohome.jpg')}}" alt="videohome">
            <div class="btn-play"></div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/js-BnugHZSQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- <iframe src="" frameborder="0"></iframe> -->
        </div>
    </div>
</section>

<section class="video-home content-description-home">
    
<div class="wrapper">

<div class="objvidhome">
            <span class="linesbgvid"></span>
            <span class="starvid"></span>
</div>
        <div class="container-promag wrapper">
           <div class="container-promag-content">
                <h1>Promag Ampuh Atasi Sakit Maag, Nyeri Lambung dan Perut Kembung</h1>
                <p>Promag hadir di Indonesia sejak tahun 1971 dan telah melindungi lambung yang dipercaya dari generasi ke generasi. Seiring perkembangan zaman, Promag terus berinovasi untuk menghadirkan produk-produk berkualitas untuk meredakan nyeri lambung dan perut kembung akibat maag. Kini Promag hadir dengan lebih banyak varian produk yang terbagi menjadi Promag tablet, Promag Double Action, Promag cair dalam kemasan sachet dan kemasan botol serta Promag Herbal.</p>
                <p>Promag merupakan solusi cepat atasi dan redakan sakit maag, nyeri lambung serta perut kembung. Dengan kandungan bahan aktif antasida, seperti kalsium karbonat, magnesium hidroksida, dan hydrotalcite, Promag terbukti efektif menetralkan asam lambung sehingga gejala maag seperti perut kembung, mual, perih saat sebelum atau setelah makan bisa teratasi.</p>
                <h2>Promag Aman Bagi Anak-anak, Ibu Hamil dan Menyusui</h2>
                <p>Apakah Promag aman dikonsumsi oleh ibu hamil, menyusui serta anak-anak?. Promag tablet, cair, dan Double Action terbukti secara klinis aman bagi ibu hamil dan menyusui karena kandungannya tidak diserap ASI. Begitu juga dengan anak-anak yang dapat dengan aman mengkonsumsi Promag. Meskipun demikian, sangat disarankan untuk berkonsultasi terlebih dahulu dengan dokter untuk mendapatkan informasi lebih lanjut</p>
            </div>
        </div>
        <div class="wrapper">
            <div class="button-wrapper">
                <button class="btn-showmore" onclick="document.querySelector('.container-promag').classList.add('expanded'); this.classList.add('d-none');document.querySelector('.btn-showless').classList.remove('d-none');">Read More<i class="arrow down"></i></button>
                <button class="btn-showless d-none" onclick="document.querySelector('.container-promag').classList.remove('expanded'); document.querySelector('.btn-showmore').classList.remove('d-none');this.classList.add('d-none');">Read Less<i class="arrow up"></i></button>
            </div>
        </div>
      </div>
    </section>
<!-- end of middle -->


@endsection