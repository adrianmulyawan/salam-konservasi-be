@extends('layouts.app')

@section('title-website', 'SALAM Konservasi - Acara Kawasan')

@section('content')
    <!-- Konten Utama -->
    <main> 
        <!-- Teks Kawasan Konservasi -->
        <div class="section-download d-flex align-items-center" data-aos="fade-up">
            <div class="col text-center">
                <h1>Kelola Unduhan</h1>
                <p>Daftar Unduhan Untuk Menunjang Kegiatan Pengajuan Izin Masuk Kawasan</p>
            </div>
        </div>

        <section class="section-download-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 pl-lg-0" data-aos="fade-up">
                        @if ($items->count())
                            <!-- Daftar Berita -->
                            <div class="container">
                                <div class="row justify-content-center">
                                    @foreach ($items as $item)
                                        <div class="col-12">
                                            <div class="card card-download">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $item->title }}</h5>
                                                    <p class="card-text">{!! $item->description !!}</p>
                                                    <a href="{{ $item->link }}" target="__blank" class="btn btn-primary btn-download">Unduh</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <p class="text-center text-muted fs-3">Belum Ada Postingan Acara Apapun</p>
                        @endif

                        <!-- Pagination -->
                        <div class="container mt-3" data-aos="fade-up">
                            {{ $items->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-conservation-events-list">
            
        </div>
    </main>
@endsection