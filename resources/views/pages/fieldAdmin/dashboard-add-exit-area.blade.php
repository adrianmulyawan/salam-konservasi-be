@extends('layouts.dashboard-fieldAdmin')

@section('title', 'Tambah Data Kunjungan')

@push('prepend-style')
    <!-- gijgo -->
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.css') }}">
@endpush

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
                               Tambah Data Keluar Pengunjung
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
                                    Rencanan Masuk Kawasan
                                </div>
                                <div class="transaction-subtitle">
                                    31 Desember 2021
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
                                    Rencana Keluar Kawasan
                                </div>
                                <div class="transaction-subtitle">
                                    04 Januari 2022
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
                    <!-- 2.4 Tanggal Masuk -->
                    <div class="row form-group data-approval">
                        <h5>Tanggal Keluar Kawasan</h5>
                        <input type="text" class="form-control datepicker" id="tanggal_keluar" name="tanggal_keluar" required placeholder="Tanggal Keluar Kawasan">
                    </div>
                    <div class="row justify-content-end mr-1 mt-4">
                        <a href="../admin-lapangan/dashboardKelolaKunjungan.html" class="btn btn-primary py-2 mr-2">Tutup</a>
                        <button type="submit" class="btn btn-primary py-2">Simpan Data</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    {{-- Gijgo Script --}}
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Gijgo
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/calendar_icon.png') }}" height="19">'
                }
            });
        });
    </script>
@endpush