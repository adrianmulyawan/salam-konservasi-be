@extends('layouts.dashboard-superAdmin')

@section('title', 'Pengaturan Akun')

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
                        {{-- Tambahkan Error Handling --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('AdminupdateAccountAdmin') }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card card-edit-profile">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName">
                                            Nama
                                        </label>
                                        <input type="text" name="name" class="form-control" id="inputName" value="{{ old('name', Auth::user()->name) }}" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">
                                            Email
                                        </label>
                                        <input type="email" name="email" class="form-control" id="inputEmail" value="{{ old('email', Auth::user()->email) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">
                                            Alamat
                                        </label>
                                        <input type="text" name="address" class="form-control" id="inputAddress" value="{{ old('address', Auth::user()->address) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone">
                                            No Telpon
                                        </label>
                                        <input type="text" name="phone_number" class="form-control" id="inputPhone" value="{{ old('phone_number', Auth::user()->phone_number) }}">
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