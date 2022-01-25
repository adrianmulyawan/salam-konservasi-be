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
                <div class="col-6 ml-0">
                    <p data-aos="fade-up" class="dashboard-title">
                        @include('includes.flash-message')
                    </p>
                </div>
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
                                                <?php $counter = 0; ?>
                                                @forelse ($entryPermitPending as $pending)
                                                    <tr>
                                                        <td class="text-center">{{ $counter += 1 }}</td>
                                                        <td class="text-center">{{ $pending->transaction_code }}</td>
                                                        <td class="text-center">{{ $pending->user->name }}</td>
                                                        <td class="text-center">{{ $pending->conservation_area->name }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('AdminuploadEntryPermit', $pending->id) }}" class="btn btn-sim-kawasan mt-auto px-4">Kirim Surat Izin</a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td class="text-center" colspan="5">Belum Ada Surat Izin Yang Perlu Diunggah</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Pagination -->
                                    <div class="row justify-content-end mr-0">
                                        {{ $entryPermitPending->links() }}
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
                                                <?php $counter = 0; ?>
                                                @forelse ($entryPermitUpload as $upload)
                                                    <tr>
                                                        <td class="text-center">{{ $counter += 1 }}</td>
                                                        <td class="text-center">{{ $upload->transaction_code }}</td>
                                                        <td class="text-center">{{ $upload->user->name }}</td>
                                                        <td class="text-center">{{ $upload->conservation_area->name }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('AdmindetailEntryPermit', $upload->id) }}" class="btn btn-sim-kawasan mt-auto px-4">Lihat Detail</a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td class="text-center" colspan="5">Belum Ada Surat Izin Yang Diunggah</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                        <!-- Pagination -->
                                        <div class="row justify-content-end mr-0">
                                            {{ $entryPermitUpload->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection