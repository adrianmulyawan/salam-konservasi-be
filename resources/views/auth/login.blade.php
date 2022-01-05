@extends('layouts.auth')

@section('title', 'SALAM Konservasi - Login')

@section('content')
     <!-- Konten Utama -->
    <main> 
        <div class="page-content page-auth">
            <div class="section-conservation-auth" data-aos="fade-up">
                <div class="container">
                    <div class="row align-items-center row-login mt-5">
                        <!-- Untuk Gambar -->
                        <div class="col-lg-6 text-center image-login mt-3">
                            <img src="{{ url('frontend/images/login-image.png') }}" alt="login-image" class="w-50 mb-4 mb-lg-none">
                        </div>
                        <!-- Form Login -->
                        <div class="col-lg-6">
                            <h2>
                                Selamat Datang di Sistem <br>
                                Administrasi Layanan Masuk <br>
                                Kawasan Konservasi
                            </h2>
                            <form method="POST" action="{{ route('login') }}" class="mt-3">
                                @csrf
                                <div class="form-group mt-3">
                                    <label for="email">Email address</label>
                                    <input id="email" type="email" class="form-control w-75 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukan Email Anda" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mt-2">
                                    <label for="inputPassword">Password</label>
                                    <div class="input-group w-75">
                                        <input type="password" name="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Masukan Password Anda" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                                    <small id="passwordHelp" class="form-text text-muted forgot-password">
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            Lupa Password
                                        </a>
                                        @endif
                                    </small>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        Ingat Saya
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success btn-block btn-login w-75 mt-4">
                                    Masuk
                                </button>
                                {{-- Button Register --}}
                                <div class="btn-register w-75 mt-2">
                                    <a href="{{ route('register') }}" class="btn btn-success btn-block mt-2">
                                        Daftar Pengguna Baru
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