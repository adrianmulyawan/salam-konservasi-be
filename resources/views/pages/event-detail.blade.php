@extends('layouts.app')

@section('title-website', 'SALAM Konservasi - Acara Kawasan')

@section('content')
    <!-- Konten Utama -->
    <main> 
        <!-- 1. Header -->
        <section class="section-details-events-header"></section>

        <!-- 2. Tentang Kawasan -->
        <section class="section-details-events-content">
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
                                    <a href="{{ route('event') }}">Acara</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Detail Acara
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
                            <h1 class="conservation-events-name">
                                {{ $item->title }}
                            </h1>

                            <div class="row features-events">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <img src="{{ url('frontend/images/location.png') }}" class="features-image-events">
                                    <div class="description">
                                        <h3>Lokasi</h3>
                                        <p>{{ $item->conservation_area->name }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left" data-aos="fade-up" data-aos-delay="200">
                                    <img src="{{ url('frontend/images/date.png') }}" class="features-image-events">
                                    <div class="description">
                                        <h3>Tanggal Acara</h3>
                                        <p>
                                            {{ \Carbon\Carbon::create($item->event_date)->format('F n, Y') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left" data-aos="fade-up" data-aos-delay="300">
                                    <img src="{{ url('frontend/images/date.png') }}" class="features-image-events">
                                    <div class="description">
                                        <h3>Author</h3>
                                        <p>{{ $item->user->name }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="about-events">
                                {!! $item->event_content !!}
                            </div>
                        </div>
                    </div>

                    <!-- Detail Tentang Kawasan -->
                    <div class="col-lg-4">
                        <div class="card card-details card-more-events" data-aos="fade-up">
                            <h2>Acara Lainnya Untuk Anda:</h2>

                            @foreach ($recent_events->skip(1) as $event)
                                <div class="card card-events mt-2">
                                    <img class="img-header" src="{{ Storage::url($event->photo) }}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                        <a href="{{ route('eventDetail', $event->slug) }}">
                                            {{ $event->title }}
                                        </a>
                                        </h5>
                                        <p class="card-text text-muted">
                                            {{ $event->conservation_area->name }} | {{ \Carbon\Carbon::create($event->event_date)->format('F n, Y') }}
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