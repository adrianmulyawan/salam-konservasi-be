@extends('layouts.dashboard-superAdmin')

@section('title', 'Unggah Surat Izin Masuk Kawasan')

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
                                Unggah Surat Izin Masuk Kawasan Konservasi
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
                                    Pengajuan Izin
                                </div>
                                <div class="transaction-subtitle">
                                    Disetujui
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
                                    Nama Kawasan Tujuan
                                </div>
                                <div class="transaction-subtitle">
                                    KKPD Pulau Randayan
                                </div>
                            </div>
                            <div class="transaction-total mb-3">
                                <div class="transaction-title">
                                    Biaya Masuk Pengunjung
                                </div>
                                <div class="transaction-subtitle">
                                    Rp 120.000,00
                                </div>
                            </div>
                            <div class="transaction-total-day mb-3">
                                <div class="transaction-title">
                                    Pembayaran Retribusi
                                </div>
                                <div class="transaction-subtitle">
                                    Terbayar
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

                    <!-- 2.6 Surat Izin Masuk-->
                    <div class="row form-group data-approval mt-2">
                        <h5>Unggah Surat Izin Masuk Kawasan Konservasi</h5>
                        <div class="custom-file mt-2 mb-3">
                            <input type="file" name="surat_izin_masuk" class="custom-file-input" id="unggahSuratIzinMasuk" required>
                            <label class="custom-file-label" for="unggahSuratIzinMasuk">Unggah Surat Izin Masuk...</label>
                        </div>
                    </div>

                    <div class="row justify-content-end mr-1">
                        <a href="{{ route('AdminmanageEntryPermit') }}" class="btn btn-primary py-2 mr-2">Tutup</a>
                        <button type="submit" class="btn btn-primary py-2">Unggah Surat Izin Masuk</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection