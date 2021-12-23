@extends('layouts.success')

@section('title', 'Pengajuan Izin Masuk Berhasil')

@section('content')
    <!-- Konten Utama -->
    <main> 
        <div class="section-success d-flex align-items-center" data-aos="fade-up">
            <div class="col text-center">
                <img src="{{ url('frontend/images/mailbox.png') }}" alt="" width="220" class="mb-2">
                <h1>Yay! Berhasil</h1>
                <p>
                    Kami Sedang Mengkonfirmasi Pengajuan Izin Masuk  <br>
                    Kawasan Konservasi Anda, Tunggu Email Balasan Dari Kami Ya
                </p>
                <a href="#" class="btn btn-dashboard mt-3 px-5">Dashboard</a><br>
                <a href="{{ route('home') }}" class="btn btn-home-page mt-3 px-5">Halaman Utama</a> 
            </div>
        </div>
    </main>
@endsection