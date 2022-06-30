@extends('layouts.main')

@section('content')
    <style>
        .overlay-div {
            height: 100%;
            width: 100%;
            position: absolute;
            background-color: #000;
            opacity: 0.5;
        }
    </style>
    <div class="container">
        {{-- carausel start --}}
        <div id="carouselExampleIndicators" class="carousel slide my-3" data-ride="carousel">
            {{-- <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol> --}}
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <div class="overlay-div rounded"></div>
                    <img style="max-height: 250px; object-fit:cover;" class="d-block rounded w-100"
                        src="https://p4.wallpaperbetter.com/wallpaper/1018/725/157/clothing-t-shirt-hanger-wallpaper-preview.jpg"
                        alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Nahkoda Nusantara</h1>
                        <p>
                            Konfeksi dengan Jaminan Harga dan Kualitas Terbaik
                        </p>
                    </div>
                </div>
            </div>

            {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> --}}
        </div>
        {{-- Carausel End --}}

        <div class="row my-5">
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="mx-3 d-flex justify-content-center rounded-circle bg-primary"
                        style="width: 70px;height:70px">
                        <span class="my-auto">
                            <i style="color:white; font-size:40px;" class="cil-money"></i>
                        </span>
                    </div>
                    <div>
                        <h3>Harga Bersahabat</h3>
                        <h3 class="text-muted">Bisa Negosiasi Harga</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="mx-3 d-flex justify-content-center rounded-circle bg-primary"
                        style="width: 70px;height:70px">
                        <span class="my-auto">
                            <i style="color:white; font-size:40px;" class="cil-money"></i>
                        </span>
                    </div>
                    <div>
                        <h3>Berkualitas</h3>
                        <h3 class="text-muted">Jahitan Rapih</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="mx-3 d-flex justify-content-center rounded-circle bg-primary"
                        style="width: 70px;height:70px">
                        <span class="my-auto">
                            <i style="color:white; font-size:40px;" class="cil-money"></i>
                        </span>
                    </div>
                    <div>
                        <h3>Terpercaya</h3>
                        <h3 class="text-muted">Mempunyai Legalitas</h3>
                    </div>
                </div>
            </div>
        </div>


        {{-- Text Start --}}
        {{-- <div class="">
            <h4 class="">Buat Sendiri Suka-Suka Kamu</h4>
            <h1 class="">
                <b> Kaos, Jaket &amp; Hoodie Custom Satuan</b>
            </h1>
            <p class="">
                Kini kamu bisa membuat baju custom satuan yang unik dengan gambar photo, tulisan, dan warna
                design yang bisa kamu edit suka-suka kamu sendiri dengan mudah. Tersedia berbagai jenis baju
                custom print untuk laki-laki, perempuan, dan anak-anak. Tersedia pilihan model kaos o-neck,
                kaos v-neck, kaos lengan panjang, kaos two-tone misty, jaket sweater, jaket hoodie, sweater hoodie
                resleting, jaket bomber dan
                lain-lain. Tidak ada minimum order, pesan 1 pcs juga bisa. Proses produksi cepat dengan bahan
                dan digital printing berkualitas premium. Pesanan akan diproduksi dan dikirim antara 1 - 3
                hari kerja. </p>
        </div> --}}
        {{-- Text End --}}

        {{-- Catalog Start --}}
        <div class="row">
            {{-- item start --}}
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top"
                        src="https://ciptaloka-preview.s3.amazonaws.com/product/items/Wa5jpYaRWd12Q6nlQyKa.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Kaos Polos Lengan Panjang</h5>
                        <p class="card-text">Rp. 25.000</p>
                        <a href="{{ route('pemesanan') }}" class="btn btn-primary btn-sm w-100">Pesan</a>
                    </div>
                </div>
            </div>
            {{-- item end --}}

            {{-- item start --}}
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top"
                        src="https://ciptaloka-preview.s3.amazonaws.com/product/items/bJ2gPKmyjazQJpwZv26.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Kaos Polos Lengan Pendek</h5>
                        <p class="card-text">Rp. 25.000</p>
                        <a href="{{ route('pemesanan') }}" class="btn btn-primary btn-sm w-100">Pesan</a>
                    </div>
                </div>
            </div>
            {{-- item end --}}

        </div>
        {{-- Catalog End --}}
    </div>
@endsection
