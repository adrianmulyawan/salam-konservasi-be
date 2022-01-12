@extends('layouts.app')

@section('title-website', 'SALAM Konservasi - Berita Kawasan')

@section('content')
    <!-- Konten Utama -->
    <main> 
        <!-- Teks Kawasan Konservasi -->
        <div class="section-conservation-news d-flex justify-content-center" data-aos="fade-up">
            <div class="col text-center">
                <h1>Daftar Berita Kawasan Konservasi</h1>
                <p>
                    Update Berita di Kawsan Konservasi Perairan Daerah Kalimantan Barat
                </p>
            </div>
        </div>

        <div class="section-conservation-news-list">
            @if ($items->count())
                <!-- Berita Terbaru -->
                <div class="container">
                    <div class="section-conservation-area-news-new row justify-content-center">
                        <div class="col-sm-12 col-md-12 col-lg-12" data-aos="fade-up">
                            <div class="card mb-3">
                                <img src="{{ Storage::url($items[0]->photo) }}" class="card-img-top header-image" alt="header-image">
                                <div class="card-body">
                                  <h5 class="card-title">
                                    <a href="{{ route('newsDetail', $items[0]->slug) }}">
                                        {{ $items[0]->title }}
                                    </a>
                                  </h5>
                                  <p class="card-text card-date">
                                    <small class="text-muted">
                                        Diposting: {{ \Carbon\Carbon::create($items[0]->created_at)->format('n F, Y') }}
                                    </small>
                                  </p>
                                  <p class="card-text card-text-news">
                                    {!! Str::limit($items[0]->news_content, 900, '.') !!}
                                  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Daftar Berita -->
                <div class="container">
                    <div class="section-conservation-area-news row justify-content-start">
                        <?php $counter = 0 ?>
                        @foreach ($items->skip(1) as $item)
                            <div class="col-sm-6 col-md-4 col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="{{ $counter += 100 }}">
                                <div class="card">
                                    <img src="{{ Storage::url($item->photo) }}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="{{ route('newsDetail', $item->slug) }}">
                                                {{ Str::limit($item->title, 30, '...') }}
                                            </a>
                                        </h5>
                                        <p class="card-post">Diposting: {{ \Carbon\Carbon::create($item->created_at)->format('n F, Y') }}</p>
                                        <p class="card-text">
                                            {!! Str::limit($item->news_content, 150, '.') !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <p class="text-center text-muted fs-3">Belum Ada Postingan Berita Apapun</p>
            @endif

            <!-- Pagination -->
            <div class="container mt-3 mr-0" data-aos="fade-up">
                {{ $items->links() }}
            </div>
        </div>
    </main>
@endsection