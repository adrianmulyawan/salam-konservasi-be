@extends('layouts.dashboard-fieldAdmin')

@section('title', 'Dashboard Admin Lapangan')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Data Keluar Masuk Pengunjung</h2>
                <p class="dashboard-subtitle">
                    Daftar Kelola Data Masuk & Data Keluar Pengunjung
                </p>
                <div class="col-6 ml-0">
                    <p data-aos="fade-up" class="dashboard-title">
                        @include('includes.flash-message')
                    </p>
                </div>
            </div>
            <div class="dashboard-content">
                <div class="card card-conservation">
                    <div class="row">
                        <div class="card-body">
                            <form action="#" method="post" >
                                <div class="input-group input-transaction-code">
                                    <input type="text" class="form-control" placeholder="Cari Data Izin Masuk Pengunjung Kawasan Konservasi" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                      <button class="btn btn-search" type="button" id="button-addon2">Cari Data</button>
                                    </div>
                                </div>
                            </form>

                            <div class="table-responsive mt-4">
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
                                        @forelse ($visitorDatas as $data)
                                            <tr>
                                                <td class="text-center">{{ $counter += 1 }}</td>
                                                <td class="text-center">{{ $data->transaction_code }}</td>
                                                <td class="text-center">{{ $data->user->name }}</td>
                                                <td class="text-center">{{ $data->conservation_area->name }}</td>
                                                <td class="text-center">{{ $data->purpose->purpose_name }}</td>
                                                <td class="text-center">
                                                    <abbr title="Detail Data Keluar Masuk Pengunjung">
                                                        <a href="{{ route('detailVisit', $data->id) }}" class="btn btn-primary mt-auto">
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                    </abbr>
                                                    <abbr title="Tambah Data Masuk Pengunjung">
                                                        <a href="{{ route('addEntry', $data->id) }}" class="btn btn-primary mt-auto">
                                                            <i class="fas fa-sign-in-alt"></i>
                                                        </a>
                                                    </abbr>
                                                    <abbr title="Tambah Data Keluar Pengunjung">
                                                        <a href="{{ route('addExit', $data->id) }}" class="btn btn-primary mt-auto">
                                                            <i class="fas fa-sign-out-alt"></i>
                                                        </a>
                                                    </abbr>
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
                    <div class="row justify-content-end mr-2">
                        {{ $visitorDatas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection