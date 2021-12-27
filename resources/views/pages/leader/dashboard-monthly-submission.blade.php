@extends('layouts.dashboard-leader')

@section('title', 'Rekapan Pengajuan Bulanan')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">
                    Rekapan Pengajuan Izin Masuk Kawasan Bulanan
                </h2>
                <p class="dashboard-subtitle">
                    Daftar Rekapan Pengajuan Izin Masuk Kawasan Perbulan 
                </p>
            </div>
            <div class="dashboard-content">
                <!-- 2. Table Data Kawasan -->
                <div class="card card-conservation">
                    <div class="row">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Rekapan Pengajuan Izin Masuk Kawasan Bulanan</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Rekapan Pengajuan Izin Bulan: Januari 2022</td>
                                            <td class="text-center">
                                                <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>Rekapan Pengajuan Izin Bulan: Desember 2021</td>
                                            <td class="text-center">
                                                <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>Rekapan Pengajuan Izin Bulan: November 2021</td>
                                            <td class="text-center">
                                                <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td>Rekapan Pengajuan Izin Bulan: Oktober 2021</td>
                                            <td class="text-center">
                                                <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td>Rekapan Pengajuan Izin Bulan: September 2021</td>
                                            <td class="text-center">
                                                <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a>
                                            </td>
                                            <tr>
                                                <td class="text-center">6</td>
                                                <td>Rekapan Pengajuan Izin Bulan: Agustus 2021</td>
                                                <td class="text-center">
                                                    <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7</td>
                                                <td>Rekapan Pengajuan Izin Bulan: Juli 2021</td>
                                                <td class="text-center">
                                                    <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">8</td>
                                                <td>Rekapan Pengajuan Izin Bulan: Juni 2021</td>
                                                <td class="text-center">
                                                    <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">9</td>
                                                <td>Rekapan Pengajuan Izin Bulan: Mei 2021</td>
                                                <td class="text-center">
                                                    <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">10</td>
                                                <td>Rekapan Pengajuan Izin Bulan: April 2021</td>
                                                <td class="text-center">
                                                    <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a>
                                                </td>
                                            </tr>
                                        </tr>
                                    </tbody>
                                </table>
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