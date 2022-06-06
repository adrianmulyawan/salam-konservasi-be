@extends('layouts.dashboard-fieldAdmin')

@section('title', 'Detail Data Keluar Masuk Pengunjung')

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
                                        Data Pengunjung
                                    </label>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Nama</th>
                                                    <th class="text-center">Warga Negara</th>
                                                    <th class="text-center">Alamat</th>
                                                    <th class="text-center">No Telpon</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $counter = 0; ?>
                                                @foreach ($item->transaction->transaction_details as $detail)
                                                    <tr>
                                                        <td class="text-center">{{ $counter += 1 }}</td>
                                                        <td class="text-center">{{ $detail->name }}</td>
                                                        <td class="text-center">{{ $detail->citizen }}</td>
                                                        <td class="text-center">{{ $detail->address }}</td>
                                                        <td class="text-center">{{ $detail->phone_number }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Data Peralatan Bawaan Pengunjung
                                    </label>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Peralatan Bawaan</th>
                                                    <th class="text-center">Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $counter = 0; ?>
                                                @foreach ($item->transaction->transaction_equipment_details as $detail)
                                                    <tr>
                                                        <td class="text-center">{{ $counter += 1 }}</td>
                                                        <td class="text-center">{{ $detail->equipment_name }}</td>
                                                        <td class="text-center">{{ $detail->equipment_total }} Buah</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
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
                                    <input type="text" name="name" class="form-control" value="{{ \Carbon\Carbon::create($item->date_of_entry_area)->format('d F Y') }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Keluar Kawasan
                                    </label>
                                    <input type="text" name="name" class="form-control" value="{{ \Carbon\Carbon::create($item->out_date_area)->format('d F Y') }}" disabled>
                                </div>
                                <a href="{{ route('visitorCheckout') }}" class="btn btn-save-data px-5 mt-3">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection