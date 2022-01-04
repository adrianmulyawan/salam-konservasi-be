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
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mt-3">
                                    <label for="name">Nama Lengkap</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" placeholder="Masukan Nama Lengkap Anda" required autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <label for="email">Email Address</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Masukan Email Anda" autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <label for="inputPassword">Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Masukan Password Anda" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                                    <label for="password_confirmation">Konfirmasi Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Konfirmasi Password Anda" required autocomplete="new-password">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="input-group-append">
                                            <!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
                                            <span id="mybuttonConfirm" onclick="change()" class="input-group-text">
                    
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
                                    <select class="form-control" name="citizen" id="inputKenegaraan" required>
                                        <option selected disabled>
                                            Pilih Status Kenegaraan (WNI/WNA)
                                        </option>
                                        <option value="wni">WNI</option>
                                        <option value="wna">WNA</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="inputNoTelpon">Nomor Telpon</label>
                                    <input type="text" name="phone_number" class="form-control" id="inputNoTelpon" placeholder="Masukan Nomor Telpon Anda" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="inputAlamat">Alamat Rumah</label>
                                    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Unggah Kartu Pelajar/KTP/KK/Passport</label>
                                    <div class="custom-file">
                                        <input type="file" name="identity-image" class="custom-file-input" id="validatedCustomFile" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Kartu Pelajar/KTP/KK/Passport</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-block btn-login mt-4">
                                    Daftar Sekarang
                                </button>
                                <div class="btn-register mt-2">
                                    <a href="{{ route('login') }}" class="btn btn-success btn-block mt-2">
                                        Kembali ke Halaman Login
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('addon-script')
    <script src="{{ url('frontend/scripts/main.js') }}"></script>
@endpush