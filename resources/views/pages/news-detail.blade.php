@extends('layouts.app')

@section('title-website', 'SALAM Konservasi - Berita Kawasan')

@section('content')
     <!-- Konten Utama -->
     <main> 
        <!-- 1. Header -->
        <section class="section-details-news-header"></section>

        <!-- 2. Tentang Kawasan -->
        <section class="section-details-news-content">
            <div class="container">
                <!-- Bread Crumb -->
                <div class="row" data-aos="fade-up">
                    <div class="col p-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">SALAM KONSERVASI</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('news') }}">Berita</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Detail Berita
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ Str::limit($item->title, 25, '...') }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <!-- Tentang Kawasan & Detail Kawasan -->
                <div class="row">
                    <!-- Tentang Kawasan -->
                    <div class="col-lg-8 pl-lg-0" data-aos="fade-up">
                        <div class="card card-details">
                            <img src="{{ Storage::url($item->photo) }}" class="card-img-top img-detail-header" alt="image-header">
                            <h1 class="conservation-news-name">
                                {{ $item->title }}
                            </h1>
                            <p class="conservation-news-date m-0">Diposting: {{ \Carbon\Carbon::create($item->created_at)->format('n F, Y') }}</p>
                            <p class="conservation-news-author mt-2">Ditulis: {{ $item->user->name }}</p>

                            <div class="about-news">
                                {!! $item->news_content !!}
                            </div>
                        </div>
                    </div>

                    <!-- Detail Tentang Kawasan -->
                    <div class="col-lg-4">
                        <div class="card card-details card-more-news" data-aos="fade-up">
                            <h2>Berita Lainnya Untuk Anda:</h2>

                            @foreach ($all_news->skip(1) as $news)
                                <div class="card card-news mt-2">
                                    <img class="img-header" src="{{ Storage::url($news->photo) }}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                        <a href="{{ route('newsDetail', $news->slug) }}">
                                            {{ $news->title }}
                                        </a>
                                        </h5>
                                        <p class="card-text text-muted">
                                            Diposting: {{ \Carbon\Carbon::create($item->created_at)->format('n F, Y') }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection