@extends('layouts.dashboard-applicant')

@section('title', 'Dashboard Pemohon')

@section('content')
    {{-- Content --}}
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">
                    Selamat Datang di Halaman Dashboard
                </p>
            </div>

            <div class="dashboard-content">
                <!-- 2. Card Pengajuan Izin Masuk Kawasan -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Jumlah Pengajaun Izin
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $totalSubmission }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Jumlah Pembayaran
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $totalPayment }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pengajaun Izin: Belum Diproses
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $submissionPending }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pengajaun Izin: Diterima
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $submissionApproved }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pengajaun Izin: Ditolak
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $submissionRejected }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pengajaun Izin: Gagal
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $submissionFailed }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pembayaran: Belum Dibayar
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $paymentUnpaid }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pembayaran: Pending
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $paymentPending }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pembayaran: Terbayar
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $paymentPaid }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pembayaran: Gagal
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $paymentFailed }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Recent Pengajuan Izin Masuk Kawasan -->
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">
                            Pengajuan Izin Masuk Kawasan
                        </h5>
                        @forelse ($recentSubmission as $submission)
                            <a href="#" class="card card-list d-block">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="{{ Storage::url($submission->conservation_area->galleries->first()->photo) }}" class="img-card-conservation">
                                        </div>
                                        <div class="col-md-4">
                                            {{ $submission->conservation_area->name }}
                                        </div>
                                        <div class="col-md-2">
                                            {{ $submission->purpose->purpose_name }}
                                        </div>
                                        <div class="col-md-2">
                                            {{ \Carbon\Carbon::create($submission->date_of_entry)->format('d F, Y') }}
                                        </div>
                                        <div class="col-md-2">
                                            @if ($submission->submission_status == 'PENDING')
                                                BELUM DIPROSES
                                            @elseif ($submission->submission_status == 'ALLOWED')
                                                DIIZINKAN
                                            @elseif ($submission->submission_status == 'REJECTED')
                                                DITOLAK
                                            @elseif ($submission->submission_status == 'FAILED')
                                                GAGAL
                                            @endif
                                        </div>
                                        <div class="col-md-1 d-none d-md-block">
                                            <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <div class="card card-list d-block">
                                <div class="card-body">
                                    <div class="row justify-content-center mt-auto">
                                        <p class="text-muted">Belum Ada Pengajuan Izin Masuk Apapun</p>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- 4. Recent Pembayaran Retribusi -->
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">
                            Pembayaran Retribusi Izin Masuk Kawasan Konservasi
                        </h5>
                        @forelse ($recentTransaction as $transaction)
                            <a href="#" class="card card-list d-block">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="{{ Storage::url($transaction->conservation_area->galleries->first()->photo) }}" class="img-card-conservation">
                                        </div>
                                        <div class="col-md-4">
                                            {{ $transaction->conservation_area->name }}
                                        </div>
                                        <div class="col-md-3">
                                            {{ $transaction->purpose->purpose_name }}
                                        </div>
                                        <div class="col-md-3">
                                            Rp {{ number_format($transaction->total_transaction,2,',','.') }}
                                        </div>
                                        <div class="col-md-1 d-none d-md-block">
                                            <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <div class="card card-list d-block">
                                <div class="card-body">
                                    <div class="row justify-content-center mt-auto">
                                        <p class="text-muted">Belum Ada Pembayaran Apapun</p>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
