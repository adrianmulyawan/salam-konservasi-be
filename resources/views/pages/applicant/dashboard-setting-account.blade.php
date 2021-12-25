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
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="#" method="post">
                            <div class="card card-edit-profile">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName">
                                            Nama
                                        </label>
                                        <input type="text" name="nama_lengkap" class="form-control" id="inputName" value="Adrian Mulyawan" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">
                                            Email
                                        </label>
                                        <input type="email" name="email" class="form-control" id="inputEmail" value="adrianmulyawan666@gmail.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword">
                                            Password
                                        </label>
                                        <input type="password" name="email" class="form-control" id="inputPassword" value="kepolu">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">
                                            Alamat
                                        </label>
                                        <input type="text" name="address" class="form-control" id="inputAddress" value="Jl Sui Raya Dalam Komplek Taman Sui Raya Blok H2">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone">
                                            No Telpon
                                        </label>
                                        <input type="text" name="address" class="form-control" id="inputPhone" value="082154590559">
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
