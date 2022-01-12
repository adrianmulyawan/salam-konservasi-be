@extends('layouts.app')

@section('title-website', 'SALAM Konservasi')

@section('content')
    <!-- Header Website -->
    <header class="text-center" data-aos="fade-up">
        <h1>
            Selamat Datang Didalam <br>
            Sistem Administrasi Layanan Masuk Kawasan Konservasi
        </h1>

        <p>
            Layanan Satu Pintu Pengajuan Izin Masuk Kawasan Konservasi Perairan <br>
            Daerah Kalimantan Barat
        </p>

        <a href="#conservation" class="btn btn-get-started px-4 py-2">
            Mulai Sekarang
        </a>
    </header>

    <!-- Konten Utama -->
    <main>
        <!-- 1. Statistik Kawasan -->
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats" data-aos="fade-up">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>{{ $conservation_area }}</h2>
                    <p>Kawasan</p>
                </div>

                <div class="col-3 col-md-2 stats-detail">
                    <h2>{{ $transaction_tourism }}</h2>
                    <p>Pariwisata</p>
                </div>

                <div class="col-3 col-md-2 stats-detail">
                    <h2>{{ $transaction_research }}</h2>
                    <p>Penelitian</p>
                </div>

                <div class="col-3 col-md-2 stats-detail">
                    <h2>{{ $transaction_education }}</h2>
                    <p>Pendidikan</p>
                </div>
            </section>
        </div>

        <!-- 2. Kawasan Konservasi -->
        <section class="section-conservation" id="conservation">
            <!-- Text Kawasan Konservasi -->
            <div class="container">
                <div class="row">
                    <div class="col text-center section-conservation-heading" data-aos="fade-up">
                        <h2>Daftar Kawasan Konservasi</h2>
                        <p>Daftar Kawasan Konservasi Perairan Daerah <br>
                        di Provinsi Kalimantan Barat
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Daftar Kawasan Konservasi -->
        <section class="section-conservation-content" id="conservationContent">
            <div class="container">
                <div class="section-conservation-area row justify-content-center">
                    @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-conservation text-center d-flex flex-column" style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->photo) : '' }}');">
                                <div class="conservation-location">{{ $item->location }}</div>
                                <div class="conservation-name">
                                    {{ $item->name }}
                                </div>
                                <div class="conservation-button mt-auto">
                                    <a href="{{ route('detailConservation', $item->slug) }}" class="btn btn-conservation-details px-4">
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="all-conservation text-center" style="background-image: url('frontend/images/kawasan4.png');">
                            <div class="conservation-button mt-auto">
                                <div class="conservation-all">
                                    <a href="{{ route('conservationArea') }}">
                                        Lihat Kawasan Lainnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Acara Kawasan -->
        <section class="section-events" id="events">
            <!-- Text Acara Kawasan -->
            <div class="container">
                <div class="row">
                    <div class="col text-center section-events-heading" data-aos="fade-up">
                        <h2>Acara Terdekat</h2>
                        <p>
                            Event Terdekat di Kawsan Konservasi <br>
                            Perairan Daerah Kalimantan Barat
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Daftar Acara Kawasan Konservasi -->
        <section class="section-events-content" id="eventsContent">
            <div class="container">
                <div class="section-conservation-events row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-events text-center d-flex flex-column" style="background-image: url('frontend/images/event1.png');">
                            <div class="events-name">Menanam Mangrove</div>
                            <div class="events-location">
                                KKPD Kubu Raya
                            </div>
                            <div class="events-date">
                                12 Januari 2021
                            </div>
                            <div class="events-button mt-auto">
                                <a href="#" class="btn btn-events-details px-4 text-center">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-events text-center d-flex flex-column" style="background-image: url('frontend/images/event2.png');">
                            <div class="events-name">Menyelam Bersama</div>
                            <div class="events-location">
                                KKPD Randayan
                            </div>
                            <div class="events-date">
                                12 Januari 2021
                            </div>
                            <div class="events-button mt-auto">
                                <a href="#" class="btn btn-events-details px-4 text-center">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-events text-center d-flex flex-column" style="background-image: url('frontend/images/event3.png');">
                            <div class="events-name">Pesta Laut</div>
                            <div class="events-location">
                                KKPD Randayan
                            </div>
                            <div class="events-date">
                                12 Januari 2021
                            </div>
                            <div class="events-button mt-auto">
                                <a href="#" class="btn btn-events-details px-4 text-center">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="all-events text-center" style="background-image: url('frontend/images/event4.png');">
                            <div class="events-button mt-auto">
                                <div class="events-all">
                                    <a href="#">
                                        Lihat Acara Lainnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Berita Kawasan -->
        <section class="section-news" id="news">
            <!-- Text Berita Kawasan -->
            <div class="container">
                <div class="row">
                    <div class="col text-center section-news-heading" data-aos="fade-up">
                        <h2>Berita Kawasan</h2>
                        <p>
                            Update Berita di Kawsan Konservasi <br>
                            Perairan Daerah Kalimantan Barat
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Daftar Berita Kawasan -->
        <section class="section-news-content" id="newsContent">
            <div class="container">
                <div class="section-conservation-news row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="card card-news text-left d-flex flex-column">
                            <img class="news-background" src="{{ url('frontend/images/berita1.png') }}" alt="">
                            <div class="card-body">
                                <div class="news-name card-title">
                                    <a href="#" class="news-link">
                                        Bantuan Alat Selam
                                    </a>
                                </div>
                                <div class="news-content card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim sit amet venenatis urna cursus eget 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="card card-news text-left d-flex flex-column">
                            <img class="news-background" src="{{ url('frontend/images/berita2.png') }}" alt="">
                            <div class="card-body">
                                <div class="news-name card-title">
                                    <a href="#" class="news-link">
                                        Bantuan Alat Selam
                                    </a>
                                </div>
                                <div class="news-content card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim sit amet venenatis urna cursus eget 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="card card-news text-left d-flex flex-column">
                            <img class="news-background" src="{{ url('frontend/images/berita3.png') }}" alt="">
                            <div class="card-body">
                                <div class="news-name card-title">
                                    <a href="#" class="news-link">
                                        Bantuan Alat Selam
                                    </a>
                                </div>
                                <div class="news-content card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim sit amet venenatis urna cursus eget 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="all-news text-center" style="background-image: url('frontend/images/berita4.png');">
                            <div class="events-button mt-auto">
                                <div class="events-all">
                                    <a href="#">
                                        Lihat Berita Lainnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Tutorial Penggunaan Sistem -->
        <section class="section-tutorial" id="tutorial">
            <!-- Text Berita Kawasan -->
            <div class="container">
                <div class="row">
                    <div class="col text-center section-tutorial-heading" data-aos="fade-up">
                        <h2>Tutorial Penggunaan Sistem</h2>
                        <p>
                            Tutorial Penggunaan Sistem Informasi <br>
                            Pengajuan Izin Masuk Kawasan Konservasi
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Video -->
        <div class="section-tutorial-content" id="tutorialContent">
            <div class="container">
                <div class="section-conservation-tutorial row justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-12" data-aos="fade-up" data-aos-delay="100">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=TaBWhb5SPfc" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6. Pesan, Saran dan Pengaduan -->
        <section class="section-report" id="report">
            <!-- Text Berita Kawasan -->
            <div class="container">
                <div class="row">
                    <div class="col text-center section-report-heading" data-aos="fade-up">
                        <h2>Pesan, Saran, dan Pengaduan</h2>
                        <p>
                            Pesan, Saran, dan Masukan Dari Anda <br>
                            Untuk Pelayanan Yang Lebih Baik Lagi
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Field Pesan, Saran, dan Pengaduan -->
        <div class="section-report-content" id="reportContent">
            <div class="container">
                <div class="row section-report-system  justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-12" data-aos="fade-up">
                        <form action="#">
                            <div class="card-report border border rounded">
                                <div class="form-group">
                                    <label for="name" class="report">Nama</label>
                                    <input type="text" class="form-control" id="name" placeholder="Masukan Nama Anda">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="report">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Masukan Email Anda">
                                </div>
                                <div class="form-group">
                                    <label for="noTelepon" class="report">No Telepon</label>
                                    <input type="text" class="form-control" id="noTelpon" placeholder="Masukan Nomor Telepon/Handhphone Anda">
                                </div>
                                <div class="form-group">
                                    <label for="judulPesan" class="report">Judul Pesan</label>
                                    <input type="text" class="form-control" id="judulPesan" placeholder="Tambahkan Judul Pesan">
                                </div>
                                <div class="form-group">
                                    <label for="isiPesan" class="report">Isi Pesan</label>
                                    <textarea class="form-control" id="isiPesan" cols="30" rows="10"></textarea>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-send-report px-4 py-2">
                                        Kirim Pesan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection