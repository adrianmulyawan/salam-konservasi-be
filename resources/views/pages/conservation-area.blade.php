@extends('layouts.app')

@section('title-website', 'SALAM Konservasi - Daftar Kawasan')

@section('content')
    <!-- Konten Utama -->
    <main> 
        <!-- Teks Kawasan Konservasi -->
        <div class="section-conservation-text d-flex align-items-center" data-aos="fade-up">
            <div class="col text-center">
                <h1>Daftar Kawasan Konservasi</h1>
                <p>
                    Daftar Kawasan Konservasi Perairan Daerah Provinsi Kalimantan Barat
                </p>
            </div>
        </div>

        <div class="section-conservation-area-list">
            <div class="container">
                <div class="section-conservation-area row justify-content-start">
                    <div class="col-sm-6 col-md-4 col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="frontend/images/daftar-kawasan-img/kawasan1.png" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">KKPD Pulau Randayan</h5>
                                <p class="card-location">Lokasi: Kabupaten Bengkayang</p>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ac turpis egestas sed tempus urna et pharetra.
                                </p>
                                <a href="detailsConservation.html" class="btn btn-detail-conservation mt-3 px-5">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="frontend/images/daftar-kawasan-img/kawasan2.png" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">KKPD Paloh</h5>
                                <p class="card-location">Lokasi: Kabupaten Sambas</p>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ac turpis egestas sed tempus urna et pharetra.
                                </p>
                                <a href="detailsConservation.html" class="btn btn-detail-conservation mt-3 px-5">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <img src="frontend/images/daftar-kawasan-img/kawasan3.png" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">KKPD Kubu Raya</h5>
                                <p class="card-location">Lokasi: Kabupaten Kubu Raya</p>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ac turpis egestas sed tempus urna et pharetra.
                                </p>
                                <a href="detailsConservation.html" class="btn btn-detail-conservation mt-3 px-5">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="card">
                            <img src="frontend/images/daftar-kawasan-img/kawasan4.png" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">KKPD Kendawangan</h5>
                                <p class="card-location">Lokasi: Kabupaten Kayong Utara</p>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ac turpis egestas sed tempus urna et pharetra.
                                </p>
                                <a href="detailsConservation.html" class="btn btn-detail-conservation mt-3 px-5">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="500">
                        <div class="card">
                            <img src="frontend/images/daftar-kawasan-img/kawasan5.png" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">KKPD Ketapang</h5>
                                <p class="card-location">Lokasi: Kabupaten Ketapang</p>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ac turpis egestas sed tempus urna et pharetra.
                                </p>
                                <a href="detailsConservation.html" class="btn btn-detail-conservation mt-3 px-5">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection