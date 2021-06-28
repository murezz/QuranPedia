@extends('main')

@section('title', 'IslamicPedia')

@section('content')

@include('layouts.navbar')

<section id="landing">
    <div class="container">
        <div class="row">
            <div class="col-md-6 desc">
                <h4 class="text-end mb-3" data-aos="fade-down" data-aos-duration="2000">بِسْمِ اللَّهِ الرَّحْمَنِ
                    الرَّحِيم</h4>
                <h4 style="text-align: justify;" data-aos="fade-down" data-aos-duration="1500">“Alquran adalah seorang
                    sahabat, yang tidak akan pernah mengecewakanmu,
                    baik di
                    dunia ini maupun di
                    akhirat kelak.”</h4>
                <p class="fs-5 text-center text-secondary mt-4" data-aos="fade-down" data-aos-duration="1000">Dengan
                    Al-quran hidup menjadi tenang</p>
                <a href="/surah" class="btn btn-dongker" data-aos="zoom-in" data-aos-duration="2000">Baca
                    Al-quran</a>
                <a href="/jadwalsholat" class="btn btn-outline-dongker" data-aos="zoom-in"
                    data-aos-duration="2200">Jadwal Sholat</a>
            </div>
            <div class="col-md-6 d-none d-md-block bg-img">
                <img src="{{ ('img/bg-img.png') }}" alt="" style="margin-left: 40px; margin-top: -135px;">
            </div>
        </div>
    </div>
</section>

@endsection