@extends('layouts.dashboard-superAdmin')

@section('title', 'Dashboard Kelola Surat Izin Masuk Kawasan')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Surat Izin Masuk Kawasan Konservasi</h2>
                <p class="dashboard-subtitle">
                    Seluruh Daftar Kelola Surat Izin Masuk Kawasan Konservasi
                </p>
            </div>
            <div class="dashboard-content">
                <!-- 2. Table Data Kawasan -->
                <div class="card card-conservation">
                    <!-- 2.1 Tabs Pengajuan -->
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active" id="pills-pending-tab" data-toggle="pill" href="#pills-pending" role="tab" aria-selected="true">Belum Diproses</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="pills-terunggah-tab" data-toggle="pill" href="#pills-terunggah" role="tab" aria-selected="false">Terunggah</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <!-- Belum Diproses -->
                        <div class="tab-pane fade show active" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab">
                            <!-- 2.2 Tabel Pengajuan -->
                            <div class="row">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Kode Transaksi</th>
                                                    <th class="text-center">Nama Pemohon</th>
                                                    <th class="text-center">Kawasan Tujuan</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SALAM-89110</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">KKPD Pulau Randayan</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-sim-kawasan mt-auto px-4">Kirim Surat Izin</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">SALAM-89109</td>
                                                    <td class="text-center">Dhafia Raisha Kamila</td>
                                                    <td class="text-center">KKPD Paloh</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-sim-kawasan mt-auto px-4">Kirim Surat Izin</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">SALAM-89108</td>
                                                    <td class="text-center">Wawan</td>
                                                    <td class="text-center">KKPD Kubu Raya</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-sim-kawasan mt-auto px-4">Kirim Surat Izin</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">SALAM-89107</td>
                                                    <td class="text-center">Gusti</td>
                                                    <td class="text-center">KKPD Kendawangan</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-sim-kawasan mt-auto px-4">Kirim Surat Izin</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">SALAM-89106</td>
                                                    <td class="text-center">Chiko Jeriko</td>
                                                    <td class="text-center">KKPD Kayong Utara</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-sim-kawasan mt-auto px-4">Kirim Surat Izin</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Terunggah -->
                        <div class="tab-pane fade" id="pills-terunggah" role="tabpanel" aria-labelledby="pills-terunggah-tab">
                            <!-- 2.2 Tabel Pengajuan -->
                            <div class="row">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Kode Transaksi</th>
                                                    <th class="text-center">Nama Pemohon</th>
                                                    <th class="text-center">Kawasan Tujuan</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SALAM-89120</td>
                                                    <td class="text-center">Rachel Venya</td>
                                                    <td class="text-center">KKPD Pulau Randayan</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-sim-kawasan mt-auto px-4">Lihat Detail</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">SALAM-89119</td>
                                                    <td class="text-center">Muhammad Hakaman Athhar</td>
                                                    <td class="text-center">KKPD Paloh</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-sim-kawasan mt-auto px-4">Lihat Detail</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">SALAM-89118</td>
                                                    <td class="text-center">Revianto</td>
                                                    <td class="text-center">KKPD Kubu Raya</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-sim-kawasan mt-auto px-4">Lihat Detail</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">SALAM-89117</td>
                                                    <td class="text-center">Badrul</td>
                                                    <td class="text-center">KKPD Kubu Raya</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-sim-kawasan mt-auto px-4">Lihat Detail</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">SALAM-89116</td>
                                                    <td class="text-center">Maman Abdurahman</td>
                                                    <td class="text-center">KKPD Kendawangan</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-sim-kawasan mt-auto px-4">Lihat Detail</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="row justify-content-end mr-2">
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
                </div>
            </div>
        </div>
    </div>
@endsection