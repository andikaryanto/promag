@extends('frontend/layouts/main')
@section('content')
<!-- middle -->
<section class="vidabout sctop">
    <div class="objsctop">
        <span class="objgrey"></span>
        <span class="objbg"></span>
        <span class="objmd"></span>
        <span class="objsm"></span>
        <span class="circle-green"></span>
    </div>
    <div class="wrapper">
        <div class="objvidabout">
            <span class="dots"></span>
            <span class="lines"></span>
            <span class="star"></span>
            <span class="circle"></span>
            <span class="triangle"></span>
        </div>
        <div class="box-video">
            <div class="overlay-img"></div>
            <img src="{{asset('images/content/videohome.jpg') }}" alt="videohome">
            <div class="btn-play"></div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/UZurEZMRQoE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- <iframe src="" frameborder="0"></iframe> -->
        </div>
    </div>
</section>

<section class="about-content">
    <div class="wrapper">
        <div class="objab">
            <span class="circline"></span>
            <span class="objleft"></span>
        </div>
        <div class="std-content">
            <h5>Tentang Kami</h5>
            {!! $about_setting_datas->content !!}
        </div>
    </div>
</section>

<section class="historybox std-content">
    <div class="wrapper">
        <h5>Sejarah promag</h5>
        <h2>Promag memiliki sejarah panjang yang dipercaya dari generasi ke generasi.</h2>
    </div>
    <div class="slider-history">
         @foreach ($about as $data )
        <div class="list his1">
            <div class="in-list">
                <div class="his-obj">
                    <span class="his-circle"></span>
                    <span class="his-objleft"></span>
                </div>
                <h3>{{ $data->title }}</h3>
                <p> {!! $data->detail !!}</p>
            </div>
        </div>
         @endforeach
    </div>
</section>

<section class="rewardsbox std-content">
    <span class="circle-rewards"></span>
    <div class="wrapper">
        <span class="dots-rewards"></span>
        <h5>Penghargaan</h5>
        <h2>Promag telah menerima banyak penghargaan dari tahun ke tahun.</h2>
        <div class="rewards-list">

            @foreach ($awards as $award)
            <div class="ls-rewards">
                <figure><img src="{{asset($award->picture)}}" alt="{{ $award->picture }}"></figure>
                <div class="desc">
                    {{ $award->title }}
                </div>
            </div>
            @endforeach

        </div>
        <div class="box-loadmore">
            <a href="" class="loadmore">Load More</a>
        </div>
    </div>
</section>
<!-- end of middle -->

@endsection