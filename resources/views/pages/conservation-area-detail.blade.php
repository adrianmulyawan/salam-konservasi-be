@extends('layouts.app')

@section('title-website', 'SALAM Konservasi - Daftar Kawasan')

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@section('content')
    <!-- Konten Utama -->
    <main> 
        <!-- 1. Header -->
        <section class="section-details-header"></section>

        <!-- 2. Tentang Kawasan -->
        <section class="section-details-content">
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
                                    <a href="{{ route('conservationArea') }}">Kawasan Konservasi</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Details
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $item->name }}
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
                            {{-- Nama & Lokasi Kawasan --}}
                            <h1 class="conservation-name">{{ $item->name }}</h1>
                            <p class="conservation-location">{{ $item->location }}</p>
                            {{-- Gallery Kawasan --}}
                            @if ($item->galleries->count())
                                <div class="gallery">
                                    <div class="xzoom-container">
                                        <img src="{{ Storage::url($item->galleries->first()->photo) }}" class="xzoom" id="xzoom-default" xoriginal="{{ Storage::url($item->galleries->first()->photo) }}">
                                    </div>
                                    <div class="xzoom-thumbs">
                                        @foreach ($item->galleries as $gallery)
                                            <a href="{{ Storage::url($gallery->photo) }}">
                                                <img src="{{ Storage::url($gallery->photo) }}" class="xzoom-gallery" width="128" xpreview="{{ Storage::url($gallery->photo) }}">
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                            {{-- Tentang Kawasan --}}
                            <h2 class="about-conservation-text">Tentang Kawasan</h2>
                            <div class="about-conservation">
                                {!! $item->description !!}
                            </div>
                            {{-- Features --}}
                            <div class="row features">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <img src="{{ url('frontend/images/foundation_map.png') }}" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Peta Kawasan</h3>
                                        <a href="{{ Storage::url($item->map) }}" class="maps" target="_blank"><p>Lihat Peta Kawasan</p></a>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left" data-aos="fade-up" data-aos-delay="200">
                                    <img src="{{ url('frontend/images/hotel.png') }}" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Penginapan</h3>
                                        <p>
                                            @if ($item->is_homestay == 1)
                                                Tersedia
                                            @else
                                                Tidak Tersedia
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left" data-aos="fade-up" data-aos-delay="300">
                                    <img src="{{ url('frontend/images/resto.png') }}" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Tempat Makan</h3>
                                        <p>
                                            @if ($item->is_resto == 1)
                                                Tersedia
                                            @else
                                                Tidak Tersedia
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Detail Tentang Kawasan -->
                    <div class="col-lg-4">
                        <form action="{{ route('submission', $slug) }}" method="GET">
                            <div class="card card-details card-right" data-aos="fade-up">
                                <h2>Detail Kawasan Konservasi</h2>

                                <hr>
                                <table class="conservation-information">
                                    <tr>
                                        <th width="50%">Lokasi Kawasan</th>
                                        <td width="50%" class="text-right">
                                            {{ $item->location }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Luas Kawasan</th>
                                        <td width="50%" class="text-right">
                                            {{ $item->area }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Status Kawasan</th>
                                        <td width="50%" class="text-right">
                                            @if ($item->is_open == 1)
                                                Buka
                                            @else
                                                Tutup
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                                <div class="purposes">
                                        <div class="form-group mt-3">
                                            <h2>Tujuan Masuk Kawasan</h2>
                                            <select class="custom-select" name="destination-area" required>
                                                <option value="1">Pariwisata</option>
                                                <option value="2">Penelitian</option>
                                                <option value="3">Pendidikan</option>
                                            </select>
                                        </div>
                                </div>

                                <div class="entrance-fee">
                                    <h2>Harga Tarif Masuk Kawasan</h2>
                                    <div class="tourism">
                                        <h3>Pariwista</h3>
                                        <table class="tourism-price">
                                            @foreach ($tourism_prices as $tourism)
                                                <tr>
                                                    <th width="50%">{{ $tourism->citizen }}</th>
                                                    <td width="50%" class="text-right">
                                                        Rp {{ number_format($tourism->price,2,',','.') }}/Orang
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                    <div class="research mt-2">
                                        <h3>Penelitian</h3>
                                        <table class="research-price">
                                            @foreach ($research_prices as $research)
                                                <tr>
                                                    <th width="50%">{{ $research->citizen }}</th>
                                                    <td width="50%" class="text-right">
                                                        Rp {{ number_format($research->price,2,',','.') }}/Orang
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                    <div class="education mt-2">
                                        <h3>Pendidikan</h3>
                                        <table class="education-price">
                                            @foreach ($education_prices as $education)
                                                <tr>
                                                    <th width="50%">{{ $education->citizen }}</th>
                                                    <td width="50%" class="text-right">
                                                        Rp {{ number_format($education->price,2,',','.') }}/Orang
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>

                                <div class="tools">
                                    <h2 class="mt-3">Biaya Peralatan Bawaan Pengunjung</h2>
                                    <div class="tools-list">
                                        <table class="tools-price">
                                            @foreach ($equipments as $equipment)
                                                <tr>
                                                    <th width="50%">{{ $equipment->equipment_name }}</th>
                                                    <td width="50%" class="text-right">
                                                        Rp {{ number_format($equipment->equipment_price,2,',','.') }}/Item
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Button Daftar -->
                            <div class="join-container" data-aos="fade-up">
                                @guest
                                    <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                        Login atau Register Terlebih Dahulu
                                    </a>
                                @endguest
                                @auth
                                    @if ($item->is_open == 1)
                                        <button type="submit" class="btn btn-block btn-join-now mt-3 py-2">
                                            Lanjutkan Pengajuan Izin
                                        </button>
                                    @else
                                        <a class="btn btn-block btn-join-now mt-3 py-2 disabled">
                                            Maaf, Kawasan Sedang Tutup
                                        </a>
                                    @endif
                                @endauth
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Acara Kawasan Mendatang -->
        <section class="section-events" style="margin-left: -35px">
            <div class="container">
                <div class="card card-events" data-aos="fade-up">
                    <h4 class="mb-3">Daftar Acara Terdekat</h4>
                    <div class="section-event-conservation row justify-content-center">
                        @php
                            $increment = 0
                        @endphp
                        @foreach ($event_conservations as $event)
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $increment += 100 }}">
                                <div class="card card-conservation-event text-left d-flex flex-column">
                                    <img class="conservation-event-background" src="{{ Storage::url($event->photo) }}" alt="header-event">
                                    <div class="conservation-event-title">
                                        <h5>
                                            {{ Str::limit($event->title, 25, '...') }}
                                        </h5>
                                    </div>
                                    <div class="conservation-event-date">
                                        Tanggal Acara: {{ \Carbon\Carbon::create($event->event_date)->format('d F, Y') }}
                                    </div>
                                    <div class="conservation-event-location">
                                        Lokasi Acara: {{ $event->conservation_area->name }}
                                    </div>
                                    <div class="conservation-event-detail">
                                        <a href="{{ route('eventDetail', $event->slug) }}" class="btn btn-block btn-event-detail mt-2 py-2">
                                            Lihat Event
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomwidth: 500,
                title: false,
                tint: '#333',
                xoffset: 15,
            });
        });
    </script>
@endpush