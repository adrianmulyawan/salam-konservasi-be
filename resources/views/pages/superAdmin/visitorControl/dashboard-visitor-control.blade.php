@extends('layouts.dashboard-superAdmin')

@section('title', 'Dashboard Keluar Masuk Pengunjung')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Data Keluar Masuk Pengunjung</h2>
                <p class="dashboard-subtitle">
                    Daftar Pengunjung Yang Masuk dan Keluar Kawasan Konservasi
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
                                            <th class="text-center">Kode Transaksi</th>
                                            <th class="text-center">Nama Pengunjung</th>
                                            <th class="text-center">Lokasi Tujuan</th>
                                            <th class="text-center">Tujuan</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $counter = 0; ?>
                                        @forelse ($datas as $data)
                                            <tr>
                                                <td class="text-center">{{ $counter += 1 }}</td>
                                                <td class="text-center">{{ $data->transaction_code }}</td>
                                                <td class="text-center">{{ $data->transaction->user->name }}</td>
                                                <td class="text-center">{{ $data->transaction->conservation_area->name }}</td>
                                                <td class="text-center">{{ $data->transaction->purpose->purpose_name }}</td>
                                                <td class="text-center">
                                                    <!-- <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a> -->
                                                    <a href="{{ route('AdmindetailVisitorControlAdmin', $data->id) }}" class="btn btn-sim-kawasan mt-auto px-3">
                                                        Lihat Detail
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="text-center" colspan="6">Belum Ada Data Apapun!</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="row justify-content-end mr-1">
                        {{ $datas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection