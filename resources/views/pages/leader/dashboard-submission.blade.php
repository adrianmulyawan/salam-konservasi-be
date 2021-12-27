@extends('layouts.dashboard-leader')

@section('title', 'Pengajuan Izin Masuk')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Pengajuan Izin Masuk Kawasan</h2>
                <p class="dashboard-subtitle">
                    Daftar Pengajuan Izin Masuk Kawasan Konservasi
                </p>
            </div>
            <div class="dashboard-content">
                <!-- 2. Table Data Kawasan -->
                <div class="card card-conservation">
                    <!-- 2.1 Tabs Pengajuan -->
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active" id="pills-pending-tab" data-toggle="pill" href="#pills-pending" role="tab" aria-selected="true">
                              Belum Diproses
                          </a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="pills-disetujui-tab" data-toggle="pill" href="#pills-disetujui" role="tab" aria-selected="false">Disetujui</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="pills-ditolak-tab" data-toggle="pill" href="#pills-ditolak" role="tab" aria-selected="false">Ditolak</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-gagal-tab" data-toggle="pill" href="#pills-gagal" role="tab" aria-selected="false">Gagal</a>
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
                                                    <th class="text-center">Lokasi Tujuan</th>
                                                    <th class="text-center">Tujuan</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SALAM-89110</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">KKPD Pulau Randayan</td>
                                                    <td class="text-center">Pariwisata</td>
                                                    <td class="text-center">
                                                        <a href="../pimpinan/dashboardPengajuanPending.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">SALAM-89109</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">KKPD Pulau Randayan</td>
                                                    <td class="text-center">Pariwisata</td>
                                                    <td class="text-center">
                                                        <a href="../pimpinan/dashboardPengajuanPending.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">SALAM-89108</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">KKPD Pulau Randayan</td>
                                                    <td class="text-center">Penelitian</td>
                                                    <td class="text-center">
                                                        <a href="../pimpinan/dashboardPengajuanPending.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">SALAM-89107</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">KKPD Pulau Randayan</td>
                                                    <td class="text-center">Penelitian</td>
                                                    <td class="text-center">
                                                        <a href="../pimpinan/dashboardPengajuanPending.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">SALAM-89106</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">KKPD Pulau Randayan</td>
                                                    <td class="text-center">Pariwisata</td>
                                                    <td class="text-center">
                                                        <a href="../pimpinan/dashboardPengajuanPending.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">6</td>
                                                    <td class="text-center">SALAM-89105</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">KKPD Pulau Randayan</td>
                                                    <td class="text-center">Pendidikan</td>
                                                    <td class="text-center">
                                                        <a href="../pimpinan/dashboardPengajuanPending.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">7</td>
                                                    <td class="text-center">SALAM-89104</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">KKPD Pulau Randayan</td>
                                                    <td class="text-center">Penelitian</td>
                                                    <td class="text-center">
                                                        <a href="../pimpinan/dashboardPengajuanPending.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">8</td>
                                                    <td class="text-center">SALAM-89103</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">KKPD Pulau Randayan</td>
                                                    <td class="text-center">Pariwisata</td>
                                                    <td class="text-center">
                                                        <a href="../pimpinan/dashboardPengajuanPending.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">9</td>
                                                    <td class="text-center">SALAM-89102</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">KKPD Pulau Randayan</td>
                                                    <td class="text-center">Penelitian</td>
                                                    <td class="text-center">
                                                        <a href="../pimpinan/dashboardPengajuanPending.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">10</td>
                                                    <td class="text-center">SALAM-89101</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">KKPD Pulau Randayan</td>
                                                    <td class="text-center">Pendidikan</td>
                                                    <td class="text-center">
                                                        <a href="../pimpinan/dashboardPengajuanPending.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Disetujui -->
                        <div class="tab-pane fade" id="pills-disetujui" role="tabpanel" aria-labelledby="pills-disetujui-tab">
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
                                                    <th class="text-center">Lokasi Tujuan</th>
                                                    <th class="text-center">Tujuan</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SALAM-89130</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">KKPD Pulau Randayan</td>
                                                    <td class="text-center">Pariwisata</td>
                                                    <td class="text-center">
                                                        <a href="../pimpinan/dashboardPengajuanDisetujui.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">SALAM-89129</td>
                                                    <td class="text-center">Abdul Ghofar Hilman</td>
                                                    <td class="text-center">KKPD Pulau Randayan</td>
                                                    <td class="text-center">Penelitian</td>
                                                    <td class="text-center">
                                                        <a href="../pimpinan/dashboardPengajuanDisetujui.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">SALAM-89125</td>
                                                    <td class="text-center">Anastasya Kosasih</td>
                                                    <td class="text-center">KKPD Paloh</td>
                                                    <td class="text-center">Pariwisata</td>
                                                    <td class="text-center">
                                                        <a href="../pimpinan/dashboardPengajuanDisetujui.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">SALAM-89123</td>
                                                    <td class="text-center">Mandalika Ayusti Nawangsari</td>
                                                    <td class="text-center">KKPD Kendawangan</td>
                                                    <td class="text-center">Peneltian</td>
                                                    <td class="text-center">
                                                        <a href="../pimpinan/dashboardPengajuanDisetujui.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">SALAM-89106</td>
                                                    <td class="text-center">Ridwan Hanif</td>
                                                    <td class="text-center">KKPD Kubu Raya</td>
                                                    <td class="text-center">Pendidikan</td>
                                                    <td class="text-center">
                                                        <a href="../pimpinan/dashboardPengajuanDisetujui.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Ditolak -->
                        <div class="tab-pane fade" id="pills-ditolak" role="tabpanel" aria-labelledby="pills-ditolak-tab">
                            <!-- 2.2 Tabel Pengajuan -->
                            <div class="row">
                                <div class="card-body">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Kode Transaksi</th>
                                                <th class="text-center">Nama Pemohon</th>
                                                <th class="text-center">Lokasi Tujuan</th>
                                                <th class="text-center">Tujuan</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-center">SALAM-89130</td>
                                                <td class="text-center">Adrian Mulyawan</td>
                                                <td class="text-center">KKPD Pulau Randayan</td>
                                                <td class="text-center">Pariwisata</td>
                                                <td class="text-center">
                                                    <a href="../pimpinan/dashboardPengajuanDitolak.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                        Detail
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td class="text-center">SALAM-89129</td>
                                                <td class="text-center">Abdul Ghofar Hilman</td>
                                                <td class="text-center">KKPD Pulau Randayan</td>
                                                <td class="text-center">Penelitian</td>
                                                <td class="text-center">
                                                    <a href="../pimpinan/dashboardPengajuanDitolak.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                        Detail
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td class="text-center">SALAM-89125</td>
                                                <td class="text-center">Anastasya Kosasih</td>
                                                <td class="text-center">KKPD Paloh</td>
                                                <td class="text-center">Pariwisata</td>
                                                <td class="text-center">
                                                    <a href="../pimpinan/dashboardPengajuanDitolak.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                        Detail
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td class="text-center">SALAM-89123</td>
                                                <td class="text-center">Mandalika Ayusti Nawangsari</td>
                                                <td class="text-center">KKPD Kendawangan</td>
                                                <td class="text-center">Peneltian</td>
                                                <td class="text-center">
                                                    <a href="../pimpinan/dashboardPengajuanDitolak.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                        Detail
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td class="text-center">SALAM-89106</td>
                                                <td class="text-center">Ridwan Hanif</td>
                                                <td class="text-center">KKPD Kubu Raya</td>
                                                <td class="text-center">Pendidikan</td>
                                                <td class="text-center">
                                                    <a href="../pimpinan/dashboardPengajuanDitolak.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                        Detail
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Gagal -->
                        <div class="tab-pane fade" id="pills-gagal" role="tabpanel" aria-labelledby="pills-gagal-tab">
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
                                                    <th class="text-center">Lokasi Tujuan</th>
                                                    <th class="text-center">Tujuan</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SALAM-89131</td>
                                                    <td class="text-center">Gaga Muhammad</td>
                                                    <td class="text-center">KKPD Pulau Randayan</td>
                                                    <td class="text-center">Pariwisata</td>
                                                    <td class="text-center">
                                                        <a href="../pimpinan/dashboardPengajuanGagal.html" class="btn btn-sim-kawasan mt-auto px-4">
                                                            Detail
                                                        </a>
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