@extends('layouts.dashboard-superAdmin')

@section('title', 'Dashboard Kelola Surat Izin Masuk Kawasan')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Unduh Surat Izin Masuk Kawasan Konservasi</h2>
                <p class="dashboard-subtitle">
                    Daftar Surat Izin Masuk Kawasan Konservasi 
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
                                            <th class="text-center">Nama Pemohon</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $counter = 0; ?>
                                        @forelse ($dataEntries as $entry)
                                            <tr>
                                                <td class="text-center">{{ $counter += 1 }}</td>
                                                <td class="text-center">{{ $entry->transaction_code }}</td>
                                                <td class="text-center">{{ $entry->user->name }}</td>
                                                <td class="text-center">
                                                    <a href="{{ Storage::url($entry->entrance_ticket) }}" class="btn btn-sim-kawasan mt-auto px-4" target="__blank">Unduh</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="text-center" colspan="4">Belum Ada Surat Izin Masuk Kawasan Yang Diunggah</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="row justify-content-end mr-2">
                        {{ $dataEntries->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection