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
                                <input type="date" class="form-control" id="dateStart" required>
                            </div>

                            <div class="form-group">
                                <label for="dateEnd">Tanggal Akhir Rekapan</label>
                                <input type="date" class="form-control" id="dateEnd" required>
                            </div>

                            <div class="row justify-content-end mr-0">     
                                <div class="form-group mt-3">
                                    <a href="" target="__blank" onclick="this.href='/dashboard/leader/print-submission-summary/' + document.getElementById('dateStart').value + '/' + document.getElementById('dateEnd').value" class="btn btn-primary btn-md">
                                        Cetak Laporan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    
@endpush