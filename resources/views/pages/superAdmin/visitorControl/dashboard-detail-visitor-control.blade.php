@extends('layouts.dashboard-superAdmin')

@section('title', 'Detail Keluar Masuk Pengunjung')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Detail Keluar Masuk Pengunjung</h2>
                <p class="dashboard-subtitle">
                    #{{ $item->transaction_code }} | {{ $item->transaction->user->name }}
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-edit-profile">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>
                                        Kode Transaksi
                                    </label>
                                    <input type="text" name="name" class="form-control" value="#{{ $item->transaction_code }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Nama Pemohon
                                    </label>
                                    <input type="text" name="name" class="form-control" value="{{ $item->transaction->user->name }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Kawasan Tujuan
                                    </label>
                                    <input type="text" name="name" class="form-control" value="{{ $item->transaction->conservation_area->name }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Tujuan Masuk Kawasan
                                    </label>
                                    <input type="text" name="name" class="form-control" value="{{ $item->transaction->purpose->purpose_name }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Admin Lapangan
                                    </label>
                                    <input type="text" name="name" class="form-control" value="{{ $item->name }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Rencana Masuk Kawasan
                                    </label>
                                    <input type="text" name="name" class="form-control" value="{{ \Carbon\Carbon::create($item->transaction->date_of_entry)->format('d F Y') }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Rencana Keluar Kawasan
                                    </label>
                                    <input type="text" name="name" class="form-control" value="{{ \Carbon\Carbon::create($item->transaction->out_date)->format('d F Y') }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Masuk Kawasan
                                    </label>
                                    <input type="text" name="name" class="form-control" value="{{ isset($item->date_of_entry_area) ? \Carbon\Carbon::create($item->date_of_entry_area)->format('d F Y') : 'User Belum Masuk Kawasan' }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Keluar Kawasan
                                    </label>
                                    <input type="text" name="name" class="form-control" value="{{ isset($item->out_date_area) ? \Carbon\Carbon::create($item->out_date_area)->format('d F Y') : 'User Belum Keluar Kawasan' }}" disabled>
                                </div>
                                <a href="{{ route('AdminvisitorControlAdmin') }}" class="btn btn-save-data px-5 mt-3">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection