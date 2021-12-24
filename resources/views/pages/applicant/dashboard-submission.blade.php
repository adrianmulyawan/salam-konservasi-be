@extends('layouts.dashboard-applicant')

@section('title', 'Dashboard Pengajuan')

@section('content')
    {{-- Content --}}
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Pengajuan Izin Masuk Kawasan</h2>
                <p class="dashboard-subtitle">
                    Seluruh Daftar Pengajuan Izin Masuk Kawasan Konservasi
                </p>
            </div>
            <div class="dashboard-content">
                <!-- 2. Pengajuan Izin Masuk Kawasan -->
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <!-- Tabs: Belum Diproses, Disetujui, Ditolak, Gagal -->
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="pills-pending-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Belum Diproses</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="pills-disetujui-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Disetujui</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="pills-ditolak-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Ditolak</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-gagal-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Gagal</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <!-- PENDING -->
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-pending-tab">
                                <!-- 2.1 Recent 1 -->
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
                                                12 Januari, 2020
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- 2.1 Recent 2 -->
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
                                                09 Januari, 2020
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- 2.1 Recent 3 -->
                                <a href="#" class="card card-list d-block">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ url('frontend/images/dashboard/image-pengajaun1.png') }}" class="img-card-conservation">
                                            </div>
                                            <div class="col-md-4">
                                                KKPD Kendawangan
                                            </div>
                                            <div class="col-md-3">
                                                Penelitian
                                            </div>
                                            <div class="col-md-3">
                                                01 Januari, 2020
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- 2.1 Recent 4 -->
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
                                                Pendidikan
                                            </div>
                                            <div class="col-md-3">
                                                17 Desember, 2020
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- 2.1 Recent 5 -->
                                <a href="#" class="card card-list d-block">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ url('frontend/images/dashboard/image-pengajaun1.png') }}" class="img-card-conservation">
                                            </div>
                                            <div class="col-md-4">
                                                KKPD Kayong Utara
                                            </div>
                                            <div class="col-md-3">
                                                Pariwisata
                                            </div>
                                            <div class="col-md-3">
                                                30 November, 2020
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- DISETUJUI -->
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-disetujui-tab">
                                <!-- 2.1 Recent 1 -->
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
                                                12 Januari, 2020
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- 2.1 Recent 2 -->
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
                                                09 Januari, 2020
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- 2.1 Recent 3 -->
                                <a href="#" class="card card-list d-block">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ url('frontend/images/dashboard/image-pengajaun1.png') }}" class="img-card-conservation">
                                            </div>
                                            <div class="col-md-4">
                                                KKPD Kendawangan
                                            </div>
                                            <div class="col-md-3">
                                                Penelitian
                                            </div>
                                            <div class="col-md-3">
                                                01 Januari, 2020
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- 2.1 Recent 4 -->
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
                                                Pendidikan
                                            </div>
                                            <div class="col-md-3">
                                                17 Desember, 2020
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- 2.1 Recent 5 -->
                                <a href="#" class="card card-list d-block">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ url('frontend/images/dashboard/image-pengajaun1.png') }}" class="img-card-conservation">
                                            </div>
                                            <div class="col-md-4">
                                                KKPD Kayong Utara
                                            </div>
                                            <div class="col-md-3">
                                                Pariwisata
                                            </div>
                                            <div class="col-md-3">
                                                30 November, 2020
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- DITOLAK -->
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-ditolak-tab">
                                <!-- 2.1 Recent 1 -->
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
                                                12 Januari, 2020
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- 2.1 Recent 2 -->
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
                                                09 Januari, 2020
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- GAGAL -->
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-gagal-tab">
                                <!-- 2.1 Recent 1 -->
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
                                                12 Januari, 2020
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
                <!-- Pagination -->
                <div class="row justify-content-end mr-1">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
@endsection
