@extends('layouts.dashboard-superAdmin')

@section('title', 'Tambah Data User')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola User</h2>
                <p class="dashboard-subtitle">
                    Tambah Data User
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
                                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Masukan Nama User" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">
                                            Email
                                        </label>
                                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Masukan Email User">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword">Password</label>
                                        <div class="input-group">
                                            <input type="password" name="name" id="inputPassword" class="form-control" placeholder="Masukan Password Anda">
                                            <div class="input-group-append">
                                                <!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
                                                <span id="mybutton" onclick="change()" class="input-group-text">
                        
                                                    <!-- icon mata bawaan bootstrap  -->
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                        <path fill-rule="evenodd"
                                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputRole">Pilih Role</label>
                                        <select class="form-control" id="inputRole" name="role_user">
                                          <option selected disabled>Pilih Role User</option>
                                          <option>SUPER ADMIN</option>
                                          <option>PIMPINAN</option>
                                          <option>ADMIN LAPANGAN</option>
                                          <option>PEMOHON</option>
                                        </select>
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