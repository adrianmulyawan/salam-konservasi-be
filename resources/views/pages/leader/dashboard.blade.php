@extends('layouts.dashboard-leader')

@section('title', 'Dashboard Pimpinan')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard Pimpinan</h2>
                <p class="dashboard-subtitle">
                    Selamat Datang di Halaman Dashboard Pimpinan
                </p>
            </div>
            <div class="dashboard-content">
                <!-- 2. Card Pengajuan Izin Masuk Kawasan -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Jumlah Pengajaun Izin Masuk
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $submissionTotal }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pengajuan: Belum Diproses
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $submissionPending }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pembayaran: Belum Diproses
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $paymentPending }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pengajuan: Disetujui
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $submissionAllowed }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pengajuan: Ditolak
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $submissionRejected }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pengajuan: Gagal
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $submissionFailed }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pengajuan: Pariwisata
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $submissionTourism }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pengajuan: Penelitian
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $submissionResearch }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Pengajuan: Pendidikan
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ $submissionEducation }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Card Chart Pengajuan Izin Masuk -->
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">
                            Bagan Pengajuan Izin Masuk Kawasan Konservasi
                        </h5>
                        <!-- Bagan -->
                        <canvas id="submissionChart"></canvas>
                    </div>
                </div>
                
                <!-- 4. Recent Pengajuan Izin Masuk Kawasan -->
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">
                            Pengajuan Izin Masuk Kawasan
                        </h5>
                        @forelse ($recentSubmission as $submission)
                            <!-- 5.1 Recent 1 -->
                            <a href="{{ route('LeaderdashboardLeaderSubmission') }}" class="card card-list d-block">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="{{ Storage::url($submission->conservation_area->galleries->first()->photo) }}" class="img-card-conservation">
                                        </div>
                                        <div class="col-md-3">
                                            {{ $submission->conservation_area->name }}
                                        </div>
                                        <div class="col-md-2">
                                            {{ \Carbon\Carbon::create($submission->created_at)->format('d F, Y') }}
                                        </div>
                                        <div class="col-md-2">
                                            {{ $submission->purpose->purpose_name }}
                                        </div>
                                        <div class="col-md-3">
                                            {{ $submission->user->name }}
                                        </div>
                                        <div class="col-md-1 d-none d-md-block">
                                            <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <div class="card card-list d-block">
                                <div class="row justify-content-center">
                                    <p class="text-muted">Belum Ada Pengajuan Izin Masuk Apapun</p>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- 5. Recent Pembayaran Retribusi -->
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">
                            Pembayaran Retribusi Izin Masuk Kawasan Konservasi
                        </h5>
                        @forelse ($recentTransaction as $transaction)
                        <a href="{{ route('LeaderdashboardLeaderPayment') }}" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="{{ Storage::url($transaction->conservation_area->galleries->first()->photo) }}" class="img-card-conservation">
                                    </div>
                                    <div class="col-md-4">
                                        {{ $transaction->conservation_area->name }}
                                    </div>
                                    <div class="col-md-3">
                                        {{ $transaction->user->name }}
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
                                <div class="row justify-content-center">
                                    <p class="text-muted">Belum Ada Pembayaran Izin Masuk Apapun</p>
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

@push('addon-script')
    <script src="{{ url('frontend/libraries/chartJS/dist/chart.min.js') }}"></script>
    <script src="{{ url('frontend/scripts/submissionChart.js') }}"></script>
@endpush