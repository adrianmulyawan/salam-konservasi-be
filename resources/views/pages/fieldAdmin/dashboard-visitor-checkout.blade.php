@extends('layouts.dashboard-fieldAdmin')

@section('title', 'Data Keluar Masuk Pengunjung')

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
                                        @forelse ($datas as $item)
                                            <tr>
                                                <td class="text-center">{{ $counter += 1 }}</td>
                                                <td class="text-center">{{ $item->transaction_code }}</td>
                                                <td class="text-center">{{ $item->transaction->user->name }}</td>
                                                <td class="text-center">{{ $item->transaction->conservation_area->name }}</td>
                                                <td class="text-center">{{ $item->transaction->purpose->purpose_name }}</td>
                                                <td class="text-center">
                                                    <!-- <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a> -->
                                                    <button type="button" class="btn btn-sim-kawasan mt-auto px-3" data-toggle="modal" data-target="#detailKunjungan">
                                                        Lihat Detail
                                                    </button>
                                                    @foreach ($datas as $data)    
                                                        <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h5 class="modal-title" id="detailKunjunganLabel">
                                                                    Detail Kunjungan Pengunjung: #{{ $data->transaction_code }}
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                <table class="table table-bordered">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>
                                                                                Nama Pengunjung
                                                                            </th>
                                                                            <td>
                                                                                {{ $data->transaction->user->name }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                Kawasan Tujuan
                                                                            </th>
                                                                            <td>
                                                                                {{ $data->transaction->conservation_area->name }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Tujuan Masuk Kawasan</th>
                                                                            <td>{{ $data->transaction->purpose->purpose_name }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Admin Lapangan</th>
                                                                            <td>{{ $data->name }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Rencana Masuk Kawasan</th>
                                                                            <td>{{ \Carbon\Carbon::create($data->transaction->date_of_entry)->format('d F Y') }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Rencana Keluar Kawasan</th>
                                                                            <td>{{ \Carbon\Carbon::create($data->transaction->out_date)->format('d F Y') }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Masuk Kawasan</th>
                                                                            <td>{{ \Carbon\Carbon::create($data->date_of_entry_area)->format('d F Y') }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Keluar Kawasan</th>
                                                                            <td>{{ \Carbon\Carbon::create($data->out_date_area)->format('d F Y') }}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-sim-kawasan" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
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