@extends('layouts.dashboard-leader')

@section('title', 'Pembayaran Retribusi Izin Masuk Kawasan')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Pembayaran Retribusi Izin Masuk Kawasan</h2>
                <p class="dashboard-subtitle">
                    Seluruh Daftar Pembayaran Retribusi Izin Masuk Kawasan Konservasi
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
                          <a class="nav-link" id="pills-terbayar-tab" data-toggle="pill" href="#pills-terbayar" role="tab" aria-selected="false">Terbayar</a>
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
                                                    <th class="text-center">Total Transaksi</th>
                                                    <th class="text-center">Rencana Masuk</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $counter = 0; ?>
                                                @forelse ($paymentPending as $pending)
                                                    <tr>
                                                        <td class="text-center">{{ $counter += 1 }}</td>
                                                        <td class="text-center">{{ $pending->transaction_code }}</td>
                                                        <td class="text-center">{{ $pending->user->name }}</td>
                                                        <td class="text-center">Rp {{ number_format($pending->total_transaction,2,',','.') }}</td>
                                                        <td class="text-center">{{ \Carbon\Carbon::create($pending->date_of_entry)->format('d F, Y') }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('LeaderdashboardLeaderPaymentPending', $pending->id) }}" class="btn btn-sim-kawasan mt-auto px-4">
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
                                {{ $paymentPending->links() }}
                            </div>
                        </div>

                        <!-- Terbayar -->
                        <div class="tab-pane fade" id="pills-terbayar" role="tabpanel" aria-labelledby="pills-terbayar-tab">
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
                                                    <th class="text-center">Total Transaksi</th>
                                                    <th class="text-center">Rencana Masuk</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $counter = 0; ?>
                                                @forelse ($paymentPaid as $paid)
                                                    <tr>
                                                        <td class="text-center">{{ $counter += 1 }}</td>
                                                        <td class="text-center">{{ $paid->transaction_code }}</td>
                                                        <td class="text-center">{{ $paid->user->name }}</td>
                                                        <td class="text-center">Rp {{ number_format($paid->total_transaction,2,',','.') }}</td>
                                                        <td class="text-center">{{ \Carbon\Carbon::create($paid->date_of_entry)->format('d F, Y') }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('LeaderdashboardLeaderPaymentPaid', $paid->id) }}" class="btn btn-sim-kawasan mt-auto px-4">
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
                                {{ $paymentPaid->links() }}
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
                                                    <th class="text-center">Total Transaksi</th>
                                                    <th class="text-center">Rencana Masuk</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $counter = 0; ?>
                                                @forelse ($paymentFailed as $failed)
                                                    <tr>
                                                        <td class="text-center">{{ $counter += 1 }}</td>
                                                        <td class="text-center">{{ $failed->transaction_code }}</td>
                                                        <td class="text-center">{{ $failed->user->name }}</td>
                                                        <td class="text-center">Rp {{ number_format($failed->total_transaction,2,',','.') }}</td>
                                                        <td class="text-center">{{ \Carbon\Carbon::create($failed->date_of_entry)->format('d F, Y') }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('LeaderdashboardLeaderPaymentFailed', $failed->id) }}" class="btn btn-sim-kawasan mt-auto px-4">
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
                                {{ $paymentFailed->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection