@extends('layouts.app')

@section('title-website', 'SALAM Konservasi - Acara Kawasan')

@section('content')
    <!-- Konten Utama -->
    <main> 
        <!-- Teks Kawasan Konservasi -->
        <div class="section-conservation-events d-flex align-items-center" data-aos="fade-up">
            <div class="col text-center">
                <h1>Daftar Acara Kawasan Konservasi</h1>
                <p>
                    Update Acara Terbaru di Kawsan Konservasi Perairan Daerah Kalimantan Barat
                </p>
            </div>
        </div>

        <div class="section-conservation-events-list">
            @if ($items->count())
                <!-- Berita Terbaru -->
                <div class="container">
                    <div class="section-conservation-area-events-new row justify-content-center">
                        <div class="col-sm-12 col-md-12 col-lg-12" data-aos="fade-up">
                            <div class="card mb-3">
                                <img src="{{ Storage::url($items[0]->photo) }}" class="card-img-top event-header-image" alt="header-image">
                                <div class="card-body">
                                  <h5 class="card-title">
                                    <a href="{{ route('eventDetail', $items[0]->slug) }}">
                                        {{ $items[0]->title }}
                                    </a>
                                  </h5>
                                  <p class="card-text card-date">
                                    <small class="text-muted">
                                        Tanggal Acara: {{ \Carbon\Carbon::create($items[0]->event_date)->format('n F, Y') }}
                                    </small>
                                  </p>
                                  <p class="card-text card-location-events">
                                    <small class="text-muted">
                                        Lokasi Acara: {{ $items[0]->conservation_area->name }}
                                    </small>
                                  </p>
                                  <div class="card-text card-text-events">
                                    {!! Str::limit($items[0]->event_content, 900, '.') !!}
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Daftar Berita -->
                <div class="container">
                    <div class="section-conservation-area-events row justify-content-start">
                        <?php $counter = 0; ?>
                        @foreach ($items->skip(1) as $item)
                            <div class="col-sm-6 col-md-4 col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="{{ $counter += 100; }}">
                                <div class="card">
                                    <img src="{{ Storage::url($item->photo) }}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">
                                            {{ Str::limit($item->title, 25, '...') }}
                                        </h5>
                                        <p class="card-post text-center">Tanggal Event: {{ \Carbon\Carbon::create($item->event_date)->format('n F, Y') }}</p>
                                        <p class="card-location text-center">
                                            Lokasi Event: {{ $item->conservation_area->name }}
                                        </p>
                                    </div>
                                </div>
                                <div class="see-events">
                                    <a href="{{ route('eventDetail', $item->slug) }}" class="btn btn-block btn-detail-events mt-3 px-2">Lihat Detail Acara</a>
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
    </main>
@endsection