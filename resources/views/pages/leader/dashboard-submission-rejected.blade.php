@extends('layouts.dashboard-leader')

@section('title', 'Pengajuan: Ditolak')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-transaction-title">#SALAM-89110</h2>
                <!-- Breadcrumb -->
                <div class="breadcrumb-transaction>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                               Pengajuan Izin Masuk Kawasan Konservasi
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Adrian Mulyawan
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Penelitian
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                KKPD Pulau Randayan
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="dashboard-content">
                <!-- 2. Table Data Kawasan -->
                <div class="card card-conservation card-detail-transaction">
                    <!-- 2.1 Photo, Pemohon, Kepentingan, dll -->
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ url('frontend/images/detail-transaction/image.png') }}" alt="header-transaction" class="header-transaction">
                        </div>
                        <div class="col-md-4">
                            <div class="transaction-user-name mb-3">
                                <div class="transaction-title">
                                    Nama Pemohon
                                </div>
                                <div class="transaction-subtitle">
                                    Adrian Mulyawan
                                </div>
                            </div>
                            <div class="transaction-user-employee mb-3">
                                <div class="transaction-title">
                                    Kepentingan
                                </div>
                                <div class="transaction-subtitle">
                                    Penelitian
                                </div>
                            </div>
                            <div class="transaction-total-user mb-3">
                                <div class="transaction-title">
                                    Jumlah Orang
                                </div>
                                <div class="transaction-subtitle">
                                    2 Orang
                                </div>
                            </div>
                            <div class="transaction-date-entry">
                                <div class="transaction-title">
                                    Tanggal Masuk Kawasan
                                </div>
                                <div class="transaction-subtitle">
                                    12 Januari 2022
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="transaction-destination-area mb-3">
                                <div class="transaction-title">
                                    Nama Kawasan
                                </div>
                                <div class="transaction-subtitle">
                                    KKPD Pulau Randayan
                                </div>
                            </div>
                            <div class="transaction-total mb-3">
                                <div class="transaction-title">
                                    Total Transaksi
                                </div>
                                <div class="transaction-subtitle">
                                    Rp 120.000,00
                                </div>
                            </div>
                            <div class="transaction-total-day mb-3">
                                <div class="transaction-title">
                                    Jumlah Hari Masuk Kawasan
                                </div>
                                <div class="transaction-subtitle">
                                    3 Hari
                                </div>
                            </div>
                            <div class="transaction-date-out">
                                <div class="transaction-title">
                                    Tanggal Keluar Kawasan
                                </div>
                                <div class="transaction-subtitle">
                                    15 Januari 2022
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2.2 Data Pengunjung -->
                    <div class="row data-pengunjung">
                        <h5>Data Pengunjung</h5>
                    </div>
                    <div class="row">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Kebangsaan</th>
                                            <th class="text-center">No Telepon</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">Kartu Pelajar/KTP/KK/Passport</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Adrian Mulyawan</td>
                                            <td class="text-center">WNI</td>
                                            <td class="text-center">082154590559</td>
                                            <td class="text-center">Jl Sui Raya Dalam Komplek Taman Sui Raya Blok H2</td>
                                            <td class="text-center photo-identitas">
                                                <img src="{{ url('frontend/images/detail-transaction/KTPEL.png') }}" alt="photo-identitas">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">Raudy Alfan Suri</td>
                                            <td class="text-center">WNI</td>
                                            <td class="text-center">082154590559</td>
                                            <td class="text-center">Jl Sui Raya Dalam Komplek Taman Sui Raya Blok H2</td>
                                            <td class="text-center photo-identitas">
                                                <img src="{{ url('frontend/images/detail-transaction/KTPEL.png') }}" alt="photo-identitas">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- 2.3 Data Peralatan -->
                    <div class="row data-bawaan-pengunjung">
                        <h5>Data Bawaan Pengunjung</h5>
                    </div>
                    <div class="row">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Daftar Peralatan</th>
                                            <th class="text-center">Jumlah Peralatan (Perbuah)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Alat Selam</td>
                                            <td class="text-center">6 Buah</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">Kamera Bawah Air</td>
                                            <td class="text-center">2 Buah</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">Drone</td>
                                            <td class="text-center">2 Buah</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- 2.4 Surat Pengajuan Kegiatan Penelitian/Pendidikan -->
                    <div class="row data-surat-penelitian-pendidikan">
                        <h5>Surat Pengajuan Untuk Penelitian / Pendidikan</h5>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <!-- 5.1 Recent 1 -->
                            <a href="#" class="card card-list d-block">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            Permohonan_Masuk_Kawasan_DinasPariwisata.pdf
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- 2.5 Approval -->
                    <div class="row form-group data-approval mt-4">
                        <h5>Status Pengajuan Izin Masuk Kawasan</h5>
                        <input class="form-control mt-2" id="disabledInput" type="text" name="status_pengajuan" value="DITOLAK" disabled>
                    </div>
                    <!-- 2.6 Alasan Ditolak -->
                    <div class="row form-group data-approval mt-4">
                        <h5>Alasan Pengajuan Ditolak</h5>
                        <textarea class="form-control" name="alasan_penolakan" id="alasanPenolakan" rows="3" value="#" disabled>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, minima quaerat iusto dignissimos accusantium tenetur dicta sint sapiente obcaecati laudantium.
                        </textarea>
                    </div>
                    <div class="row justify-content-end mr-1 mt-4">
                        <a href="#" class="btn btn-primary py-2 mr-2">Export PDF</a>
                        <a href="{{ route('LeaderdashboardLeaderSubmission') }}" class="btn btn-primary py-2 mr-2">Tutup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection