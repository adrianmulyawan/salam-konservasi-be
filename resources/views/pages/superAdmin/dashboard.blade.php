@extends('layouts.dashboard-superAdmin')

@section('title', 'Dashboard Admin')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">
                    Selamat Datang di Halaman Dashboard Super Admin
                </p>
            </div>
            <div class="dashboard-content">
                <!-- 2. Card Pengajuan Izin Masuk Kawasan -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Jumlah Kawasan Konservasi
                                </div>
                                <div class="dashboard-card-subtitle">
                                    5
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Jumlah User
                                </div>
                                <div class="dashboard-card-subtitle">
                                    20
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Jumlah Pengajaun Izin Masuk
                                </div>
                                <div class="dashboard-card-subtitle">
                                    20
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pengajuan: Belum Diproses
                                </div>
                                <div class="dashboard-card-subtitle">
                                    10
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pengajuan: Disetujui
                                </div>
                                <div class="dashboard-card-subtitle">
                                    7
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pengajuan: Ditolak
                                </div>
                                <div class="dashboard-card-subtitle">
                                    3
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pengajuan: Pariwisata
                                </div>
                                <div class="dashboard-card-subtitle">
                                    1
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pengajuan: Penelitian
                                </div>
                                <div class="dashboard-card-subtitle">
                                    2
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pengajuan: Pendidikan
                                </div>
                                <div class="dashboard-card-subtitle">
                                    4
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 3. Card Chart Pengajuan Izin Masuk -->
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">
                            Bagan Pengajuan Izin Masuk Kawasan Konservasi
                        </h5>
                        <!-- Bagan -->
                        <canvas id="submissionChart"></canvas>
                    </div>
                </div>
                <!-- 4. Card Data Baru Ditambahkan -->
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">
                            Data User, Berita, dan Acara Yang Baru Ditambahkan
                        </h5>
                    </div>
                    <!-- 4.1 User Baru -->
                    <div class="col-md-4">
                        <div class="card mb-2 card-col-4">
                            <div class="card-col-4-title m-0">
                                <h6>Data User Baru</h6>
                            </div>
                            <div class="card-col-4-subtitle">
                                Pengguna Baru SALAM Konservasi
                            </div>
                            <div class="card card-list d-block">
                                <div class="card-body-user">
                                    <div class="row">
                                        <div class="col-md-2 card-photo-user">
                                            <img src="{{ url('frontend/images/user/user1.png') }}">
                                        </div>
                                        <div class="col-md-10">
                                            Tiara Andini
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-list d-block">
                                <div class="card-body-user">
                                    <div class="row">
                                        <div class="col-md-2 card-photo-user">
                                            <img src="{{ url('frontend/images/user/user2.png') }}">
                                        </div>
                                        <div class="col-md-10">
                                            Mandalika Ayusti Nawangsari
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-list d-block">
                                <div class="card-body-user">
                                    <div class="row">
                                        <div class="col-md-2 card-photo-user">
                                            <img src="{{ url('frontend/images/user/user3.png') }}">
                                        </div>
                                        <div class="col-md-10">
                                            Muhammad Adrian Mulyawan
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-list d-block">
                                <div class="card-body-user">
                                    <div class="row">
                                        <div class="col-md-2 card-photo-user">
                                            <img src="{{ url('frontend/images/user/user4.png') }}">
                                        </div>
                                        <div class="col-md-10">
                                            Putri Puspitasari
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-list d-block">
                                <div class="card-body-user">
                                    <div class="row">
                                        <div class="col-md-2 card-photo-user">
                                            <img src="{{ url('frontend/images/user/user5.png') }}">
                                        </div>
                                        <div class="col-md-10">
                                            Mega Astuti
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4.2 Berita Baru -->
                    <div class="col-md-4">
                        <div class="card mb-2 card-col-4">
                            <div class="card-col-4-title m-0">
                                <h6>Data Berita Baru</h6>
                            </div>
                            <div class="card-col-4-subtitle">
                                Data Berita Yang Baru Ditambahkan
                            </div>
                            <div class="card card-list d-block">
                                <div class="card-body-user">
                                    <div class="row">
                                        <div class="col-md-2 card-photo-user">
                                            <img src="{{ url('frontend/images/user/berita1.png') }}">
                                        </div>
                                        <div class="col-md-10">
                                            Penyerahan Bibit Ikan Kepada...
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-list d-block">
                                <div class="card-body-user">
                                    <div class="row">
                                        <div class="col-md-2 card-photo-user">
                                            <img src="{{ url('frontend/images/user/berita1.png') }}">
                                        </div>
                                        <div class="col-md-10">
                                            Penanaman 300 Bibit Bakau...
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-list d-block">
                                <div class="card-body-user">
                                    <div class="row">
                                        <div class="col-md-2 card-photo-user">
                                            <img src="{{ url('frontend/images/user/berita1.png') }}">
                                        </div>
                                        <div class="col-md-10">
                                            Pulau Randayan di Tutup Sementara...
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-list d-block">
                                <div class="card-body-user">
                                    <div class="row">
                                        <div class="col-md-2 card-photo-user">
                                            <img src="{{ url('frontend/images/user/berita1.png') }}">
                                        </div>
                                        <div class="col-md-10">
                                            Abrasi di Pantai Jawai Semakin...
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-list d-block">
                                <div class="card-body-user">
                                    <div class="row">
                                        <div class="col-md-2 card-photo-user">
                                            <img src="{{ url('frontend/images/user/berita1.png') }}">
                                        </div>
                                        <div class="col-md-10">
                                            Pelepasan 3000 Bayi Penyu...
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4.3 Acara Baru -->
                    <div class="col-md-4">
                        <div class="card mb-2 card-col-4">
                            <div class="card-col-4-title m-0">
                                <h6>Data Acara Baru</h6>
                            </div>
                            <div class="card-col-4-subtitle">
                                Data Acara Yang Baru Ditambahkan
                            </div>
                            <div class="card card-list d-block">
                                <div class="card-body-user">
                                    <div class="row">
                                        <div class="col-md-2 card-photo-user">
                                            <img src="{{ url('frontend/images/user/acara1.png') }}">
                                        </div>
                                        <div class="col-md-10">
                                            Pesta Adat Pantai Paloh
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-list d-block">
                                <div class="card-body-user">
                                    <div class="row">
                                        <div class="col-md-2 card-photo-user">
                                            <img src="{{ url('frontend/images/user/acara1.png') }}">
                                        </div>
                                        <div class="col-md-10">
                                            Festival Bersih Pantai
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-list d-block">
                                <div class="card-body-user">
                                    <div class="row">
                                        <div class="col-md-2 card-photo-user">
                                            <img src="{{ url('frontend/images/user/acara1.png') }}">
                                        </div>
                                        <div class="col-md-10">
                                            Peingatan Sumpah Pemuda di Paloh...
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-list d-block">
                                <div class="card-body-user">
                                    <div class="row">
                                        <div class="col-md-2 card-photo-user">
                                            <img src="{{ url('frontend/images/user/acara1.png') }}">
                                        </div>
                                        <div class="col-md-10">
                                            17 Agustus di Pulau Randayan...
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-list d-block">
                                <div class="card-body-user">
                                    <div class="row">
                                        <div class="col-md-2 card-photo-user">
                                            <img src="{{ url('frontend/images/user/acara1.png') }}">
                                        </div>
                                        <div class="col-md-10">
                                            Penyuluhan Manfaat Rumput Laut...
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 5. Recent Pengajuan Izin Masuk Kawasan -->
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">
                            Pengajuan Izin Masuk Kawasan
                        </h5>
                        <!-- 5.1 Recent 1 -->
                        <a href="#" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="{{ url('frontend/images/dashboard/image-pengajaun1.png') }}" class="img-card-conservation">
                                    </div>
                                    <div class="col-md-3">
                                        KKPD Pulau Randayan
                                    </div>
                                    <div class="col-md-2">
                                        12 Januari, 2020
                                    </div>
                                    <div class="col-md-2">
                                        Pariwisata
                                    </div>
                                    <div class="col-md-3">
                                        Adrian Mulyawan
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- 5.1 Recent 2 -->
                        <a href="#" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="{{ url('frontend/images/dashboard/image-pengajaun2.png') }}" class="img-card-conservation">
                                    </div>
                                    <div class="col-md-3">
                                        KKPD Paloh
                                    </div>
                                    <div class="col-md-2">
                                        06 Januari, 2020
                                    </div>
                                    <div class="col-md-2">
                                        Penelitian
                                    </div>
                                    <div class="col-md-3">
                                        Kevin Jordan
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- 5.1 Recent 3 -->
                        <a href="#" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="{{ url('frontend/images/dashboard/image-pengajaun1.png') }}" class="img-card-conservation">
                                    </div>
                                    <div class="col-md-3">
                                        KKPD Kendawangan
                                    </div>
                                    <div class="col-md-2">
                                        01 Januari, 2020
                                    </div>
                                    <div class="col-md-2">
                                        Pendidikan
                                    </div>
                                    <div class="col-md-3">
                                        Muh Hakaman Athhar
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- 6. Recent Pembayaran Retribusi -->
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">
                            Pembayaran Retribusi Izin Masuk Kawasan Konservasi
                        </h5>
                        <!-- 6.1 Recent 1 -->
                        <a href="#" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="{{ url('frontend/images/dashboard/image-pengajaun1.png') }}" class="img-card-conservation">
                                    </div>
                                    <div class="col-md-4">
                                        KKPD Pulau Randayan
                                    </div>
                                    <div class="col-md-3">
                                        Muhammad Adrian Mulyawan
                                    </div>
                                    <div class="col-md-3">
                                        Rp 150.000,00
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- 6.1 Recent 2 -->
                        <a href="#" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="{{ url('frontend/images/dashboard/image-pengajaun2.png') }}" class="img-card-conservation">
                                    </div>
                                    <div class="col-md-4">
                                        KKPD Paloh
                                    </div>
                                    <div class="col-md-3">
                                        Anita Rahayu
                                    </div>
                                    <div class="col-md-3">
                                        Rp 250.000,00
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- 3.1 Recent 3 -->
                        <a href="#" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="{{ url('frontend/images/dashboard/image-pengajaun1.png') }}" class="img-card-conservation">
                                    </div>
                                    <div class="col-md-4">
                                        KKPD Kubu Raya
                                    </div>
                                    <div class="col-md-3">
                                        Anastasya Kosasih
                                    </div>
                                    <div class="col-md-3">
                                        Rp 100.000,00
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="{{ url('frontend/libraries/chartJS/dist/chart.min.js') }}"></script>
    <script src="{{ url('frontend/scripts/submissionChart.js') }}"></script>
@endpush