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
        <div class="container-promag wrapper">
           <div class="container-promag-content">
            <h1>Promag Ampuh Atasi Sakit Maag, Nyeri Lambung dan Perut Kembung</h1>
            <p>
                Promag hadir di Indonesia sejak tahun 1971 dan telah melindungi lambung yang dipercaya dari generasi ke generasi. Seiring perkembangan zaman, Promag terus berinovasi untuk menghadirkan produk-produk berkualitas untuk meredakan nyeri lambung dan perut kembung akibat maag. Kini Promag hadir dengan lebih banyak varian produk yang terbagi menjadi Promag tablet, Promag Double Action, Promag cair dalam kemasan sachet dan kemasan botol serta Promag Herbal.
            </p>
            <p>
                Sejumlah penghargaan bergengsi telah berhasil diraih Promag dari tahun ke tahun, diantaranya adalah ICSA 2015, Top Brand Platium 2000-2011, Top Brand 2011, Indonesia Most Favorite Women Brand 2015, Best Brand Platinum 2015 dan ICSA 2016. Dengan begitu banyaknya penghargaan yang diberikan, tentu Promag menjadi salah satu brand obat lambung terpercaya dan telah dikenal secara luas oleh masyarakat Indonesia.    
            </p>
            <p>Data WHO menyebutkan jika penyakit maag merupakan satu dari 10 penyakit yang paling banyak diderita oleh masyarakat Indonesia, oleh karenanya Promag hadir untuk menjadi solusi cepat atasi dan redakan sakit maag, nyeri lambung dan perut kembung. Dengan kandungan bahan aktif antasida, seperti kalsium karbonat, magnesium hidroksida, dan hydrotalcite, Promag terbukti efektif menetralkan asam lambung, sehingga gejala maag seperti perut kembung, mual, perih saat sebelum atau setelah makan bisa teratasi. </p>
            <p>Promag juga mengandung  simethicone yang bekerja aktif mengurangi gejala maag dengan mengurangi kandungan gas berlebih di saluran pencernaan, serta famotidine yang berfungsi mengendalikan produksi asam lambung berlebih, penyebab sakit maag.</p>
            <h3>Promag Hadir Dalam Berbagai Varian Produk</h3>
            <p>Promag merupakan obat bebas yang bisa Anda dapatkan di Apotek, Toko Obat, Minimarket, Supermarket dan warung-warung terdekat. Ada dua jenis Promag yang beredar di pasaran, yakni dalam bentuk tablet kunyah dan suspensi cair yang memiliki 4 jenis varian berbeda diantaranya:. </p>
            <h5>
                1. Promag Tablet
            </h5>
            <p>Promag tablet merupakan varian obat maag paling populer di Indonesia. Dalam tiap kemasan dus, Promag tablet berisi 3 blister, dengan setiap blisternya terdiri dari 12 tablet kunyah. </p>
            <h5>
                2. Promag Double Action
            </h5>
            <p>Promag Double Action memberikan aksi ganda dengan meredakan gejala maag, sekaligus mampu mengurangi produksi asam lambung. Produk ini tersedia dalam kemasan box berisi 12 blister, dengan setiap blisternya terdiri dari 6 tablet kunyah. </p>
            <h5>
                3. Promag Cair
            </h5>
            <p>Agar lebih mudah dikonsumsi, Promag hadir dalam bentuk cair sachet dan botol. Dalam tiap kemasan/dus, Promag cair memiliki 6 sachet dengan masing-masing sachet berisi 7 ml. Sedangkan, Promag cair botol berbentuk botol yang memiliki dosis pas dan bisa dikonsumsi sesuai sendok takar. </p>
            <h5>
                4. Promag Herbal
            </h5>
            <p>
                Promag Herbal merupakan obat herbal untuk gangguan lambung yang terbuat dari 8 bahan herbal pilihan, seperti Madu, Kunyit, Jahe Merah, Royal Jelly, Adas, Ananas, Akar Manis dan Daun Mint. Promag Herbal tersedia dalam kemasan dus isi 6 sachet @10 ml. Promag Herbal baik dikonsumsi langsung atau dengan air dan teh hangat.
            </p>
            <h5>Promag Aman Bagi Anak-anak, Ibu Hamil dan Menyusui </h5>
            <p>Apakah Promag aman dikonsumsi oleh ibu hamil, menyusui serta anak-anak?. Promag tablet, cair, dan Double Action terbukti secara klinis aman bagi ibu hamil dan menyusui karena kandungannya tidak diserap ASI. Begitu juga dengan anak-anak yang dapat dengan aman mengkonsumsi Promag. Meskipun demikian, sangat disarankan untuk berkonsultasi terlebih dahulu dengan dokter untuk mendapatkan informasi lebih lanjut.</p>
        </div>
        </div>
        <div class="wrapper">
            <div class="button-wrapper">
                <button class="btn-showmore" onclick="document.querySelector('.container-promag').classList.add('expanded'); this.classList.add('d-none');document.querySelector('.btn-showless').classList.remove('d-none');">Read More<i class="arrow down"></i></button>
                <button class="btn-showless d-none" onclick="document.querySelector('.container-promag').classList.remove('expanded'); document.querySelector('.btn-showmore').classList.remove('d-none');this.classList.add('d-none');">Read Less<i class="arrow up"></i></button>
            </div>
        </div>
      </div>
<!-- end of middle -->


@endsection