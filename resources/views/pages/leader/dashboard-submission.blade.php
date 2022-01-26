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
                                                <?php $counter = 0; ?>
                                                @forelse ($submissionPending as $pending)
                                                    <tr>
                                                        <td class="text-center">{{ $counter += 1 }}</td>
                                                        <td class="text-center">{{ $pending->transaction_code }}</td>
                                                        <td class="text-center">{{ $pending->user->name }}</td>
                                                        <td class="text-center">{{ $pending->conservation_area->name }}</td>
                                                        <td class="text-center">{{ $pending->purpose->purpose_name }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('LeaderdashboardLeaderSubmissionPending', $pending->id) }}" class="btn btn-sim-kawasan mt-auto px-4">
                                                                Detail
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
                            <div class="row justify-content-end mr-1 mt-0">
                                {{ $submissionPending->links() }}
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
                                                <?php $counter = 0; ?>
                                                @forelse ($submissionApproved as $approved)
                                                    <tr>
                                                        <td class="text-center">{{ $counter += 1 }}</td>
                                                        <td class="text-center">{{ $approved->transaction_code }}</td>
                                                        <td class="text-center">{{ $approved->user->name }}</td>
                                                        <td class="text-center">{{ $approved->conservation_area->name }}</td>
                                                        <td class="text-center">{{ $approved->purpose->purpose_name }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('LeaderdashboardLeaderSubmissionApproved', $approved->id) }}" class="btn btn-sim-kawasan mt-auto px-4">
                                                                Detail
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
                            <div class="row justify-content-end mr-1 mt-0">
                                {{ $submissionApproved->links() }}
                            </div>
                        </div>

                        <!-- Ditolak -->
                        <div class="tab-pane fade" id="pills-ditolak" role="tabpanel" aria-labelledby="pills-ditolak-tab">
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
                                                <?php $counter = 0; ?>
                                                @forelse ($submissionRejected as $reject)
                                                    <tr>
                                                        <td class="text-center">{{ $counter += 1 }}</td>
                                                        <td class="text-center">{{ $reject->transaction_code }}</td>
                                                        <td class="text-center">{{ $reject->user->name }}</td>
                                                        <td class="text-center">{{ $reject->conservation_area->name }}</td>
                                                        <td class="text-center">{{ $reject->purpose->purpose_name }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('LeaderdashboardLeaderSubmissionRejected', $reject->id) }}" class="btn btn-sim-kawasan mt-auto px-4">
                                                                Detail
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
                            <div class="row justify-content-end mr-1 mt-0">
                                {{ $submissionRejected->links() }}
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
                                                <?php $counter = 0; ?>
                                                @forelse ($submissionFailed as $fail)
                                                    <tr>
                                                        <td class="text-center">{{ $counter += 1 }}</td>
                                                        <td class="text-center">{{ $fail->transaction_code }}</td>
                                                        <td class="text-center">{{ $fail->user->name }}</td>
                                                        <td class="text-center">{{ $fail->conservation_area->name }}</td>
                                                        <td class="text-center">{{ $fail->purpose->purpose_name }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('LeaderdashboardLeaderSubmissionFailed', $fail->id) }}" class="btn btn-sim-kawasan mt-auto px-4">
                                                                Detail
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
                            <div class="row justify-content-end mr-1 mt-0">
                                {{ $submissionFailed->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection