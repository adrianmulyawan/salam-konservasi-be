@extends('layouts.dashboard-applicant')

@section('title', 'Dashboard Pengajuan')

@section('content')
    {{-- Content --}}
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Pengajuan Izin Masuk Kawasan</h2>
                <p class="dashboard-subtitle">
                    Seluruh Daftar Pengajuan Izin Masuk Kawasan Konservasi
                </p>
            </div>
            <div class="dashboard-content">
                <!-- 2. Pengajuan Izin Masuk Kawasan -->
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <!-- Tabs: Belum Diproses, Disetujui, Ditolak, Gagal -->
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="pills-pending-tab" data-toggle="pill" href="#pills-pending" role="tab" aria-controls="pills-pending" aria-selected="true">Belum Diproses</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="pills-disetujui-tab" data-toggle="pill" href="#pills-allowed" role="tab" aria-controls="pills-allowed" aria-selected="false">Disetujui</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="pills-ditolak-tab" data-toggle="pill" href="#pills-rejected" role="tab" aria-controls="pills-rejected" aria-selected="false">Ditolak</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-gagal-tab" data-toggle="pill" href="#pills-failed" role="tab" aria-controls="pills-failed" aria-selected="false">Gagal</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <!-- PENDING -->
                            <div class="tab-pane fade show active" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab">
                                @forelse ($submissionPending as $pending)
                                    <a href="{{ route('dashboardSubmissionPending', $pending->id) }}" class="card card-list d-block">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="{{ Storage::url($pending->conservation_area->galleries->first()->photo) }}" class="img-card-conservation">
                                                </div>
                                                <div class="col-md-4">
                                                    {{ $pending->conservation_area->name }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $pending->purpose->purpose_name }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ \Carbon\Carbon::create($pending->created_at)->format('d F, Y') }}
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
                                                <p class="text-muted">Data Kosong!</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse

                                <!-- Pagination -->
                                <div class="row justify-content-end mr-1 mt-4">
                                    {{ $submissionPending->links() }}
                                </div>
                            </div>

                            <!-- DISETUJUI -->
                            <div class="tab-pane fade" id="pills-allowed" role="tabpanel" aria-labelledby="pills-disetujui-tab">
                                @forelse ($submissionAllowed as $allowed)
                                    <a href="{{ route('dashboardSubmissionApproved', $allowed->id) }}" class="card card-list d-block">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="{{ Storage::url($allowed->conservation_area->galleries->first()->photo) }}" class="img-card-conservation">
                                                </div>
                                                <div class="col-md-4">
                                                    {{ $allowed->conservation_area->name }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $allowed->purpose->purpose_name }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ \Carbon\Carbon::create($allowed->created_at)->format('d F, Y') }}
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
                                                <p class="text-muted">Data Kosong!</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse

                                <!-- Pagination -->
                                <div class="row justify-content-end mr-1 mt-4">
                                    {{ $submissionAllowed->links() }}
                                </div>
                            </div>

                            <!-- DITOLAK -->
                            <div class="tab-pane fade" id="pills-rejected" role="tabpanel" aria-labelledby="pills-ditolak-tab">
                                @forelse ($submissionRejecteds as $reject)
                                    <a href="{{ route('dashboardSubmissionRejected', $reject->id) }}" class="card card-list d-block">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="{{ Storage::url($reject->conservation_area->galleries->first()->photo) }}" class="img-card-conservation">
                                                </div>
                                                <div class="col-md-4">
                                                    {{ $reject->conservation_area->name }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $reject->purpose->purpose_name }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ \Carbon\Carbon::create($reject->created_at)->format('d F, Y') }}
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
                                                <p class="text-muted">Data Kosong!</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse

                                <!-- Pagination -->
                                <div class="row justify-content-end mr-1 mt-4">
                                    {{ $submissionRejecteds->links() }}
                                </div>
                            </div>

                            <!-- GAGAL -->
                            <div class="tab-pane fade" id="pills-failed" role="tabpanel" aria-labelledby="pills-gagal-tab">
                                @forelse ($submissionFailed as $failed)
                                    <a href="{{ route('dashboardSubmissionFailed', $failed->id) }}" class="card card-list d-block">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="{{ Storage::url($failed->conservation_area->galleries->first()->photo) }}" class="img-card-conservation">
                                                </div>
                                                <div class="col-md-4">
                                                    {{ $failed->conservation_area->name }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $failed->purpose->purpose_name }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ \Carbon\Carbon::create($failed->created_at)->format('d F, Y') }}
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
                                                <p class="text-muted">Data Kosong!</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse

                                <!-- Pagination -->
                                <div class="row justify-content-end mr-1 mt-4">
                                    {{ $submissionFailed->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
