@extends('layouts.dashboard-superAdmin')

@section('title', 'Edit Surat Izin Masuk Kawasan')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-transaction-title">#{{ $data->transaction_code }}</h2>
                <!-- Breadcrumb -->
                <div class="breadcrumb-transaction">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Unggah Surat Izin Masuk Kawasan Konservasi
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $data->user->name }}
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $data->purpose->purpose_name }}
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $data->conservation_area->name }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="dashboard-content">
                <!-- 2. Table Data Kawasan -->
                <div class="card card-conservation card-detail-transaction">
                    <!-- 2.1 Photo, Pemohon, Kepentingan, dll -->
                    <div class="row mx-1 mt-2">
                        <div class="col-md-4">
                            <img src="{{ Storage::url($data->conservation_area->galleries->first()->photo) }}" alt="header-transaction" class="header-transaction">
                        </div>
                        <div class="col-md-4">
                            <div class="transaction-user-name mb-3">
                                <div class="transaction-title">
                                    Nama Pemohon
                                </div>
                                <div class="transaction-subtitle">
                                    {{ $data->user->name }}
                                </div>
                            </div>
                            <div class="transaction-user-employee mb-3">
                                <div class="transaction-title">
                                    Kepentingan
                                </div>
                                <div class="transaction-subtitle">
                                    {{ $data->purpose->purpose_name }}
                                </div>
                            </div>
                            <div class="transaction-total-user mb-3">
                                <div class="transaction-title">
                                    Pengajuan Izin
                                </div>
                                <div class="transaction-subtitle">
                                    {{ $data->submission_status == "ALLOWED" ? 'DISETUJUI' : '' }}
                                </div>
                            </div>
                            <div class="transaction-date-entry">
                                <div class="transaction-title">
                                    Tanggal Masuk Kawasan
                                </div>
                                <div class="transaction-subtitle">
                                    {{ \Carbon\Carbon::create($data->date_of_entry)->format('d F Y') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="transaction-destination-area mb-3">
                                <div class="transaction-title">
                                    Nama Kawasan Tujuan
                                </div>
                                <div class="transaction-subtitle">
                                    {{ $data->conservation_area->name }}
                                </div>
                            </div>
                            <div class="transaction-total mb-3">
                                <div class="transaction-title">
                                    Biaya Masuk Pengunjung
                                </div>
                                <div class="transaction-subtitle">
                                    Rp {{ number_format($data->total_transaction,2,',','.') }}
                                </div>
                            </div>
                            <div class="transaction-total-day mb-3">
                                <div class="transaction-title">
                                    Pembayaran Retribusi
                                </div>
                                <div class="transaction-subtitle">
                                    {{ $data->payment_status == "PAIDOFF" ? 'TERBAYAR' : '' }}
                                </div>
                            </div>
                            <div class="transaction-date-out">
                                <div class="transaction-title">
                                    Tanggal Keluar Kawasan
                                </div>
                                <div class="transaction-subtitle">
                                    {{ \Carbon\Carbon::create($data->out_date)->format('d F Y') }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2.2 Data Pengunjung -->
                    <div class="data-pengunjung">
                        <h5>Data Pengunjung</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Kebangsaan</th>
                                        <th class="text-center">No Telepon</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Kartu Pelajar/KTP/KK/Passport</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $counter = 0 ?>
                                    @foreach ($details as $detail)
                                        <tr>
                                            <td class="text-center">{{ $counter += 1 }}</td>
                                            <td class="text-center">{{ $detail->name }}</td>
                                            <td class="text-center">{{ $detail->citizen }}</td>
                                            <td class="text-center">{{ $detail->phone_number }}</td>
                                            <td class="text-center">{{ $detail->address }}</td>
                                            <td class="text-center photo-identitas">
                                                @if ($detail->identity_image != null)
                                                    <img src="{{ Storage::url($detail->identity_image ) }}" alt="photo-identitas">
                                                @else
                                                    Tidak Unggah Photo
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- 2.3 Data Peralatan -->
                    <div class="data-bawaan-pengunjung">
                        <h5>Data Bawaan Pengunjung</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Daftar Peralatan</th>
                                        <th class="text-center">Jumlah Peralatan (Perbuah)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $counter = 0; ?>
                                    @forelse ($equipments as $equipment)
                                            <tr>
                                                <td class="text-center">{{ $counter += 1 }}</td>
                                                <td class="text-center">{{ $equipment->equipment_name }}</td>
                                                <td class="text-center">{{ $equipment->equipment_total }} Buah</td>
                                            </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="3">Tidak Membawa Peralatan</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <form action="{{ route('AdminuploadEditPermit', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- 2.4 Surat Izin Masuk-->
                        <div class="form-group data-approval mt-2">
                            <h5>Unggah Surat Izin Masuk Kawasan Konservasi</h5>
                            <div class="custom-file mt-2 mb-3">
                                <input type="file" name="entrance_ticket" class="custom-file-input @error('entrance_ticket') is-invalid @enderror" id="unggahSuratIzinMasuk" required>
                                <label class="custom-file-label" for="unggahSuratIzinMasuk">{{ $data->entrance_ticket }}</label>
                                @error('entrance_ticket')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-end mr-3">
                            <a href="{{ route('AdminmanageEntryPermit') }}" class="btn btn-primary py-2 mr-2">Tutup</a>
                            <button type="submit" class="btn btn-primary py-2">Edit Surat Izin Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection