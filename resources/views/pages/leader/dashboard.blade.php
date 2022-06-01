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
                                        <div class="col-md-2">
                                            {{ $submission->transaction_code }}
                                        </div>
                                        <div class="col-md-2">
                                            {{ $submission->conservation_area->name }}
                                        </div>
                                        <div class="col-md-2">
                                            {{ \Carbon\Carbon::create($submission->created_at)->format('d F, Y') }}
                                        </div>
                                        <div class="col-md-2">
                                            {{ $submission->purpose->purpose_name }}
                                        </div>
                                        <div class="col-md-2">
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
                                    <div class="col-md-2">
                                        {{ $transaction->transaction_code }}
                                    </div>
                                    <div class="col-md-2">
                                        {{ $transaction->conservation_area->name }}
                                    </div>
                                    <div class="col-md-2">
                                        {{ $transaction->user->name }}
                                    </div>
                                    <div class="col-md-2">
                                        {{ $transaction->purpose->purpose_name }}
                                    </div>
                                    <div class="col-md-2">
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
    <script>
        const ctx = document.getElementById('submissionChart').getContext('2d');

        const DATA_COUNT = 7;
        const NUMBER_CFG = {count: DATA_COUNT, min: 0, max: 100};

        const labels = [
            'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' 
        ];

        const borderColor = [
            'rgba(255, 99, 132, 1)',
        ];

        const backgroundColorTourism =  [
            '#eb3434',
        ];
        
        const backgroundColorResearch = [
            '#ebb134',
        ];

        const backgroudColorEducation = [
            '#dceb34'
        ];

        const data = {
            labels: labels,
            datasets:{!! json_encode($chart) !!}
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Bagan Pengajuan Izin Masuk Kawasan Konservasi'
                    }
                }
            },
        };

        const myChart = new Chart(ctx, config);
    </script>
@endpush