@extends('layouts.auth')

@section('title', 'SALAM Konservasi - Register')

@section('content')
    <!-- Konten Utama -->
    <main> 
        <div class="page-content page-auth">
            <div class="section-conservation-auth" data-aos="fade-up">
                <div class="container">
                    <div class="row align-items-center row-login justify-content-center mt-5">
                        <!-- Form Register -->
                        <div class="col-lg-5">
                            <h2>
                                Daftar Pengguna Baru Sistem <br>
                                Administrasi Layanan Masuk <br>
                                Kawasan Konservasi
                            </h2>
                            <form action="#" method="post">
                                <div class="form-group mt-3">
                                    <label for="inputFullName">Nama Lengkap</label>
                                    <input type="text" name="" class="form-control" id="inputFullName" required placeholder="Masukan Nama Lengkap Anda" autofocus>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="inputEmail">Email Address</label>
                                    <input type="email" name="" class="form-control" id="inputEmail" required placeholder="Masukan Email Anda">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="inputPassword">Password</label>
                                    <div class="input-group">
                                        <input type="password" name id="inputPassword" class="form-control" placeholder="Masukan Password Anda" required>
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
                                <div class="form-group mt-3">
                                    <label for="inputKenegaraan">Status Kenegaraan</label>
                                    <select class="form-control" name="" id="inputKenegaraan" required>
                                        <option selected disabled>
                                            Pilih Status Kenegaraan (WNI/WNA)
                                        </option>
                                        <option>WNI</option>
                                        <option>WNA</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="inputNoTelpon">Nomor Telpon</label>
                                    <input type="text" name="" class="form-control" id="inputNoTelpon" required placeholder="Masukan Nomor Telpon Anda">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="inputAlamat">Alamat Rumah</label>
                                    <textarea class="form-control" name="" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Unggah Kartu Pelajar/KTP/KK/Passport</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Kartu Pelajar/KTP/KK/Passport</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-block btn-login mt-4">
                                    Daftar Sekarang
                                </button>
                            </form>
                            <div class="btn-register mt-2">
                                <a href="{{ route('login') }}" class="btn btn-success btn-block mt-2">
                                    Kembali ke Halaman Login
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="container" style="display: none">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
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
    <script src="{{ url('frontend/images/logo-salam-konservasi.png') }}"></script>
@endpush