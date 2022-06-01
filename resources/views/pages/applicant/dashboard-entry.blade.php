@extends('layouts.dashboard-applicant')

@section('title', 'Dashboard Surat Izin Masuk Kawasan')

@section('content')
    {{-- Content --}}
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">
                    Surat Izin Masuk Kawasan Konservasi
                </h2>
                <p class="dashboard-subtitle">
                    Halaman Unduh Seluruh Surat Izin Masuk Kawasan Konservasi Perairan Daerah 
                </p>
            </div>
            <div class="dashboard-content">
                <!-- 3.Surat Izin Izin Masuk Kawasan -->
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        @forelse ($areaEntryPermits as $entryPermit)
                            <a href="{{ Storage::url($entryPermit->entrance_ticket, $entryPermit->id) }}" class="card card-list d-block" target="__blank">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="{{ Storage::url($entryPermit->conservation_area->galleries->first()->photo) }}" class="img-card-conservation">
                                        </div>
                                        <div class="col-md-2">
                                            {{ $entryPermit->transaction_code }}
                                        </div>
                                        <div class="col-md-4">
                                            {{ $entryPermit->conservation_area->name }}
                                        </div>
                                        <div class="col-md-2">
                                            {{ $entryPermit->purpose->purpose_name }}
                                        </div>
                                        <div class="col-md-2 d-none d-md-block">
                                            <img src="{{ url('frontend/images/dashboard/ic_arrow.svg') }}">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <div class="card card-list d-block">
                                <div class="card-body">
                                    <div class="row justify-content-center mt-auto">
                                        <p class="text-muted">Data Surat Izin Masuk Kosong!</p>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
                <!-- Pagination -->
                <div class="row justify-content-end mr-1 mt-4">
                    {{ $areaEntryPermits->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
