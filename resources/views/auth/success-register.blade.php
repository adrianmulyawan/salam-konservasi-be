@extends('layouts.success')

@section('title', 'Register Berhasil')

@section('content')
    <!-- Konten Utama -->
    <main> 
        <div class="section-success d-flex align-items-center" data-aos="fade-up">
            <div class="col text-center">
                <img src="frontend/images/success-emoji.png" alt="" width="220" class="mb-2">
                <h1 class="mt-3">
                    Selamat Datang di Sistem <br>
                    Pengajuan Izin Masuk Kawasan KKPD
                </h1>
                <p>
                    Kamu Sudah Berhasil Terdaftar di Sistem Kami <br>
                    Selamat Menggunakan Layanan Dari Kami
                </p>
                <a href="#" class="btn btn-dashboard mt-3 px-5">Dashboard</a><br>
                <a href="{{ route('home') }}" class="btn btn-home-page mt-3 px-5">Halaman Utama</a> 
            </div>
        </div>
    </main>
@endsection