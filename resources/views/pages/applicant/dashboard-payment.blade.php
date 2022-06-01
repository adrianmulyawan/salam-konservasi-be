@extends('layouts.dashboard-applicant')

@section('title', 'Dashboard Pembayaran')

@section('content')
    {{-- Content --}}
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">
                    Pembayaran Retribusi Izin Masuk Kawasan
                </h2>
                <p class="dashboard-subtitle">
                    Seluruh Daftar Pembayaran Retribusi Izin Masuk Kawasan Konservasi
                </p>
                <div class="col-6 ml-0">
                    <p data-aos="fade-up" class="dashboard-title">
                        @include('includes.flash-message')
                    </p>
                </div>
            </div>
            <div class="dashboard-content">
                <!-- 2. Pengajuan Izin Masuk Kawasan -->
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <!-- Tabs: Belum Diproses, Disetujui, Ditolak, Gagal -->
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="pills-pending-transaction-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                  Belum Dibayar
                              </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-pending-tab" data-toggle="pill" href="#pills-pending" role="tab" aria-controls="pills-pending" aria-selected="false">
                                    Sedang Diproses
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="pills-paid-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                  Terbayar
                              </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-failed-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                    Gagal
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <!-- Belum Dibayar -->
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-pending-transaction-tab">
                                @forelse ($paymentUnpaid as $unpaid)
                                    <a href="{{ route('paymentProcess', $unpaid->id) }}" class="card card-list d-block">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="{{ Storage::url($unpaid->conservation_area->galleries->first()->photo) }}" class="img-card-conservation">
                                                </div>
                                                <div class="col-md-2">
                                                    {{ $unpaid->transaction_code }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $unpaid->conservation_area->name }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $unpaid->purpose->purpose_name }}
                                                </div>
                                                <div class="col-md-2">
                                                    Rp {{ number_format($unpaid->total_transaction,2,',','.') }}
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
                                    {{ $paymentUnpaid->links() }}
                                </div>
                            </div>

                            {{-- Sedeng Diproses --}}
                            <div class="tab-pane fade" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab">
                                @forelse ($paymentPending as $pending)
                                    <a href="{{ route('paymentPending', $pending->id) }}" class="card card-list d-block">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="{{ Storage::url($pending->conservation_area->galleries->first()->photo) }}" class="img-card-conservation">
                                                </div>
                                                <div class="col-md-2">
                                                    {{ $pending->transaction_code }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $pending->conservation_area->name }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $pending->purpose->purpose_name }}
                                                </div>
                                                <div class="col-md-2">
                                                    Rp {{ number_format($pending->total_transaction,2,',','.') }}
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
                                    {{ $paymentPending->links() }}
                                </div>
                            </div>

                            <!-- Terbayar -->
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-paid-tab">
                                @forelse ($paymentPaidOff as $paidOff)
                                    <a href="{{ route('paymentPaidOff', $paidOff->id) }}" class="card card-list d-block">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="{{ Storage::url($paidOff->conservation_area->galleries->first()->photo) }}" class="img-card-conservation">
                                                </div>
                                                <div class="col-md-2">
                                                    {{ $paidOff->transaction_code }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $paidOff->conservation_area->name }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $paidOff->purpose->purpose_name }}
                                                </div>
                                                <div class="col-md-2">
                                                    Rp {{ number_format($paidOff->total_transaction,2,',','.') }}
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
                                    {{ $paymentPaidOff->links() }}
                                </div>
                            </div>

                            <!-- Gagal -->
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-failed-tab">
                                @forelse ($paymentFailed as $failed)
                                    <a href="{{ route('paymentFailed', $failed->id) }}" class="card card-list d-block">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="{{ Storage::url($failed->conservation_area->galleries->first()->photo) }}" class="img-card-conservation">
                                                </div>
                                                <div class="col-md-2">
                                                    {{ $failed->transaction_code }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $failed->conservation_area->name }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $failed->purpose->purpose_name }}
                                                </div>
                                                <div class="col-md-2">
                                                    Rp {{ number_format($failed->total_transaction,2,',','.') }}
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
                                    {{ $paymentFailed->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
