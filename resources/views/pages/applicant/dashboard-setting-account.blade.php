@extends('layouts.dashboard-applicant')

@section('title', 'Dashboard Surat Izin Masuk Kawasan')

@section('content')
    {{-- Content --}}
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Pengaturan Akun</h2>
                <p class="dashboard-subtitle">
                    Perbarui Profile Anda Saat Ini
                </p>
                <div class="col-6 ml-0">
                    <p data-aos="fade-up" class="dashboard-title">
                        @include('includes.flash-message')
                    </p>
                </div>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('updateAccountApplicant') }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card card-edit-profile">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName">
                                            Nama
                                        </label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputName" value="{{ Auth::user()->name }}" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">
                                            Email
                                        </label>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" value="{{ Auth::user()->email }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">
                                            Alamat
                                        </label>
                                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="inputAddress" value="{{ Auth::user()->address }}">
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone">
                                            No Telpon
                                        </label>
                                        <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" id="inputPhone" value="{{ Auth::user()->phone_number }}">
                                        @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-save-data px-5 mt-3">Simpan Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="{{ url('frontend/scripts/main.js') }}"></script>
@endpush