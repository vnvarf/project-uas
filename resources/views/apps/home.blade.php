@extends('layouts.app')

@section('content')
<section class="hero-banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                {{-- <div class="dash top-distance-dash-hero"></div> --}}
                <div class="greeting">
                    <div class="main-title text-center">
                        <p><b>Welcome to Masak Yuk Resep Book</b></p>
                    </div>
                    <div class="long-desc">
                        <p style="text-align: center;">Situs web Resepbook adalah sumber inspirasi kuliner Anda, menyediakan koleksi lengkap resep masakan dari berbagai belahan dunia. Temukan berbagai macam resep mulai dari masakan tradisional hingga makanan modern dalam berbagai kategori seperti masakan sehari-hari, makanan ringan, hidangan pembuka, hidangan utama, hingga hidangan penutup yang lezat. Setiap resep disertai dengan petunjuk langkah demi langkah yang mudah diikuti, serta tips dan trik untuk memasak dengan sempurna. Jelajahi kelezatan dari berbagai budaya dan nikmati pengalaman memasak yang menyenangkan dengan Resepbook.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="padding: 15px">
            <div class="col-md-4">
                <img src="{{ Vite::asset('resources/images/home/1.jpeg') }}" class="img-fluid" alt="Gambar 1" style="border-radius: 15px">
            </div>
            <div class="col-md-4">
                <img src="{{ Vite::asset('resources/images/home/2.jpeg') }}" class="img-fluid" alt="Gambar 2" style="border-radius: 15px">
            </div>
            <div class="col-md-4">
                <img src="{{ Vite::asset('resources/images/home/4.jpeg') }}" class="img-fluid" alt="Gambar 3" style="border-radius: 15px">
            </div>
            <br><br>
            <a href="{{ route('item.index') }}" type="button" class="btn btn-warning" style="margin-top: 20px">Let's Cook<i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</section>
@endsection
