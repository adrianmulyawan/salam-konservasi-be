@extends('layouts.app')

@section('title-website', 'SALAM Konservasi - Daftar Kawasan')

@section('content')
    <!-- Konten Utama -->
    <main> 
        <!-- Teks Kawasan Konservasi -->
        <div class="section-conservation-text d-flex align-items-center" data-aos="fade-up">
            <div class="col text-center">
                <h1>Daftar Kawasan Konservasi</h1>
                <p>
                    Daftar Kawasan Konservasi Perairan Daerah Provinsi Kalimantan Barat
                </p>
            </div>
        </div>

        <div class="section-conservation-area-list">
            <div class="container">
                <div class="section-conservation-area row justify-content-start">
                    <?php $counter = 0; ?>
                    @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="{{ $counter += 100; }}">
                            <div class="card">
                                <img src="{{ Storage::url($item->galleries->first()->photo) }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }}</h5>
                                    <p class="card-location">Lokasi: {{ $item->location }}</p>
                                    <p class="card-text">
                                        {!! Str::limit($item->description, 200, '.') !!}
                                    </p>
                                    <a href="{{ route('detailConservation', $item->slug) }}" class="btn btn-detail-conservation mt-3 px-5">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row justify-content-end mt-3 mr-0">
                    {{ $items->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection