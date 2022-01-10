@extends('layouts.dashboard-superAdmin')

@section('title', 'Edit Data User')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola User</h2>
                <p class="dashboard-subtitle">
                    Ubah Data User
                </p>
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
                        <form action="{{ route('Adminmanage-user.update', $data->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card card-edit-profile">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName">
                                            Nama
                                        </label>
                                        <input type="text" name="name" value="{{ $data->name }}" class="form-control" id="inputName" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">
                                            Email
                                        </label>
                                        <input type="email" name="email" value="{{ $data->email }}" class="form-control" id="inputEmail" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword">Password</label>
                                        <div class="input-group">
                                            <input type="password" name="password" value="{{ $data->password }}" id="inputPassword" class="form-control">
                                            <div class="input-group-append">
                                                <!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
                                                <span id="mybutton" onclick="password()" class="input-group-text">
                        
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
                                        <small>Kosongkan Jika Tidak Ingin Ganti Password</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhoneNumber">
                                            No Telpon
                                        </label>
                                        <input type="text" name="phone_number" value="{{ $data->phone_number }}" class="form-control" id="inputPhoneNumber">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAlamat">
                                            Alamat
                                        </label>
                                        <input type="text" name="address" value="{{ $data->address }}" class="form-control" id="inputAlamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputRole">Pilih Role</label>
                                        <select class="form-control" id="inputRole" name="role">
                                          <option selected disabled value="{{ $data->role }}">
                                            @if ($data->role == "applicant")
                                                PEMOHON
                                            @elseif ($data->role == "superadmin")
                                                SUPER ADMIN
                                            @elseif ($data->role == "leader")
                                                PIMPINAN
                                            @elseif ($data->role == "fieldadmin")
                                                ADMIN LAPANGAN
                                            @endif
                                          </option>
                                          <option value="superadmin">SUPER ADMIN</option>
                                          <option value="leader">PIMPINAN</option>
                                          <option value="fieldadmin">ADMIN LAPANGAN</option>
                                          <option value="applicant">PEMOHON</option>
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