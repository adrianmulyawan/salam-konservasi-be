@extends('layouts.dashboard-applicant')

@section('title', 'Dashboard Pemohon')

@section('content')
    {{-- Content --}}
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">
                    Selamat Datang di Halaman Dashboard
                </p>
            </div>
            <div class="dashboard-content">
                <!-- 2. Card Pengajuan Izin Masuk Kawasan -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Jumlah Pengajaun Izin
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $totalSubmission }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Jumlah Pengajaun Izin: Diterima
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
                                    Jumlah Pengajaun Izin: Ditolak
                                </div>
                                <div class="dashboard-card-subtitle">
                                    5
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 3. Recent Pengajuan Izin Masuk Kawasan -->
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">
                            Pengajuan Izin Masuk Kawasan
                        </h5>
                        <!-- 3.1 Recent 1 -->
                        <a href="#" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="{{ url('frontend/images/dashboard/image-pengajaun1.png') }}" class="img-card-conservation">
                                    </div>
                                    <div class="col-md-4">
                                        KKPD Pulau Randayan
                                    </div>
                                    <div class="col-md-2">
                                        Pariwisata
                                    </div>
                                    <div class="col-md-2">
                                        12 Januari, 2020
                                    </div>
                                    <div class="col-md-2">
                                        BELUM DIPROSES
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- 3.1 Recent 2 -->
                        <a href="#" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="{{ url('frontend/images/dashboard/image-pengajaun2.png') }}" class="img-card-conservation">
                                    </div>
                                    <div class="col-md-4">
                                        KKPD Paloh
                                    </div>
                                    <div class="col-md-2">
                                        Penelitian
                                    </div>
                                    <div class="col-md-2">
                                        06 Januari, 2020
                                    </div>
                                    <div class="col-md-2">
                                        DIIZINKAN
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
                                        <img src="{{ url('frontend/images/dashboard/image-pengajaun2.png') }}" class="img-card-conservation">
                                    </div>
                                    <div class="col-md-4">
                                        KKPD Kendawangan
                                    </div>
                                    <div class="col-md-2">
                                        Pendidikan
                                    </div>
                                    <div class="col-md-2">
                                        25 Desember, 2020
                                    </div>
                                    <div class="col-md-2">
                                        DITOLAK
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- 4. Recent Pembayaran Retribusi -->
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">
                            Pembayaran Retribusi Izin Masuk Kawasan Konservasi
                        </h5>
                        <!-- 3.1 Recent 1 -->
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
                                        Pariwisata
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
                        <!-- 3.1 Recent 2 -->
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
                                        Penelitian
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
                                        <img src="{{ url('frontend/images/dashboard/image-pengajaun3.png') }}" class="img-card-conservation">
                                    </div>
                                    <div class="col-md-4">
                                        KKPD Kubu Raya
                                    </div>
                                    <div class="col-md-3">
                                        Pendidikan
                                    </div>
                                    <div class="col-md-3">
                                        Rp 350.000,00
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
