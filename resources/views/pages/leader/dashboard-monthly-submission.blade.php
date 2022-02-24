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
                            <div class="form-group">
                                <label for="dateStart">Tanggal Mulai Rekapan</label>
                                <input type="date" class="form-control" id="dateStart">
                            </div>

                            <div class="form-group">
                                <label for="dateEnd">Tanggal Akhir Rekapan</label>
                                <input type="date" class="form-control" id="dateEnd">
                            </div>

                            <div class="row justify-content-end mr-0">     
                                <div class="form-group mt-3">
                                    <a href="" target="__blank" onclick="this.href='/dashboard/leader/print-submission-summary/' + document.getElementById('dateStart').value + '/' + document.getElementById('dateEnd').value" class="btn btn-primary btn-md">
                                        Cetak Laporan
                                    </a>
                                </div>
                            </div>
                            
                            {{-- <div class="table-responsive">
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
                                                <a href="#" class="btn btn-sim-kawasan mt-auto px-4 success-download">Unduh</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>Rekapan Pengajuan Izin Bulan: Desember 2021</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-sim-kawasan mt-auto px-4 success-download">Unduh</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>Rekapan Pengajuan Izin Bulan: November 2021</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-sim-kawasan mt-auto px-4 success-download">Unduh</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td>Rekapan Pengajuan Izin Bulan: Oktober 2021</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-sim-kawasan mt-auto px-4 success-download">Unduh</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td>Rekapan Pengajuan Izin Bulan: September 2021</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-sim-kawasan mt-auto px-4 success-download">Unduh</a>
                                            </td>
                                            <tr>
                                                <td class="text-center">6</td>
                                                <td>Rekapan Pengajuan Izin Bulan: Agustus 2021</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sim-kawasan mt-auto px-4 success-download">Unduh</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7</td>
                                                <td>Rekapan Pengajuan Izin Bulan: Juli 2021</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sim-kawasan mt-auto px-4 success-download">Unduh</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">8</td>
                                                <td>Rekapan Pengajuan Izin Bulan: Juni 2021</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sim-kawasan mt-auto px-4 success-download">Unduh</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">9</td>
                                                <td>Rekapan Pengajuan Izin Bulan: Mei 2021</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sim-kawasan mt-auto px-4 success-download">Unduh</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">10</td>
                                                <td>Rekapan Pengajuan Izin Bulan: April 2021</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sim-kawasan mt-auto px-4 success-download">Unduh</a>
                                                </td>
                                            </tr>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    
@endpush