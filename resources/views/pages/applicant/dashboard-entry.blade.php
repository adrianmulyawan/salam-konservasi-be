@extends('layouts.dashboard-applicant')

@section('title', 'Dashboard Surat Izin Masuk Kawasan')

@section('content')
    {{-- Content --}}
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">
                    Surat Izin Masuk Kawasan Konservasi
                </h2>
                <p class="dashboard-subtitle">
                    Halaman Unduh Seluruh Surat Izin Masuk Kawasan Konservasi Perairan Daerah 
                </p>
            </div>
            <div class="dashboard-content">
                <!-- 3.Surat Izin Izin Masuk Kawasan -->
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <!-- 3.1 Recent 1 -->
                        <a href="#" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{ url('frontend/images/dashboard/image-pengajaun1.png') }}" class="img-card-conservation">
                                    </div>
                                    <div class="col-md-4">
                                        KKPD Pulau Randayan
                                    </div>
                                    <div class="col-md-4">
                                        Pariwisata
                                    </div>
                                    <div class="col-md-2 d-none d-md-block">
                                        <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- 3.1 Recent 2 -->
                        <a href="#" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{ url('frontend/images/dashboard/image-pengajaun2.png') }}" class="img-card-conservation">
                                    </div>
                                    <div class="col-md-4">
                                        KKPD Paloh
                                    </div>
                                    <div class="col-md-4">
                                        Penelitian
                                    </div>
                                    <div class="col-md-2 d-none d-md-block">
                                        <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- 3.1 Recent 3 -->
                        <a href="#" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{ url('frontend/images/dashboard/image-pengajaun3.png') }}" class="img-card-conservation">
                                    </div>
                                    <div class="col-md-4">
                                        KKPD Paloh
                                    </div>
                                    <div class="col-md-4">
                                        Pariwisata
                                    </div>
                                    <div class="col-md-2 d-none d-md-block">
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
