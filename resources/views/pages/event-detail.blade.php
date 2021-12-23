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
                                    <a href="index.html">SALAM KONSERVASI</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="events.html">Acara</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Detail Acara
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Gerakan Menanam 1000 Pohon Bakau...
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
                            <img src="{{ url('frontend/images/data-berita-img/header-detail.png') }}" class="card-img-top img-detail-header" alt="image-header">
                            <h1 class="conservation-events-name">
                                Gerakan Menanam 1000 Pohon Bakau di Kawasan Konservasi Perairan Daerah Kuburaya 
                            </h1>

                            <div class="row features-events">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <img src="{{ url('frontend/images/location.png') }}" class="features-image-events">
                                    <div class="description">
                                        <h3>Lokasi</h3>
                                        <p>KKPD Kubu Raya</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left" data-aos="fade-up" data-aos-delay="200">
                                    <img src="{{ url('frontend/images/date.png') }}" class="features-image-events">
                                    <div class="description">
                                        <h3>Tanggal Acara</h3>
                                        <p>October 21, 2021</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left" data-aos="fade-up" data-aos-delay="300">
                                    <img src="{{ url('frontend/images/date.png') }}" class="features-image-events">
                                    <div class="description">
                                        <h3>Author</h3>
                                        <p>Karlina Putri</p>
                                    </div>
                                </div>
                            </div>

                            <p class="about-events">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem sed risus ultricies tristique nulla. Elit pellentesque habitant morbi tristique senectus. Sem integer vitae justo eget. Ullamcorper eget nulla facilisi etiam dignissim diam quis. In est ante in nibh mauris cursus mattis molestie. Mattis nunc sed blandit libero volutpat. Velit dignissim sodales ut eu sem integer vitae justo eget. Quis ipsum suspendisse ultrices gravida dictum fusce ut placerat. Ut tristique et egestas quis ipsum. Dis parturient montes nascetur ridiculus. Imperdiet sed euismod nisi porta lorem mollis aliquam ut. Nibh venenatis cras sed felis. At in tellus integer feugiat scelerisque varius morbi enim.
                                <br>
                                Massa tincidunt dui ut ornare lectus sit amet est. Commodo sed egestas egestas fringilla. Consectetur adipiscing elit pellentesque habitant. Donec massa sapien faucibus et molestie ac. Tellus molestie nunc non blandit massa enim nec dui nunc. Erat imperdiet sed euismod nisi porta lorem mollis. Tellus pellentesque eu tincidunt tortor aliquam nulla facilisi cras fermentum. Et sollicitudin ac orci phasellus egestas tellus. Nullam ac tortor vitae purus. Aliquam id diam maecenas ultricies mi eget mauris. Sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc. Sit amet nisl suscipit adipiscing bibendum est ultricies integer quis. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Eget nullam non nisi est sit amet facilisis magna. Quis eleifend quam adipiscing vitae. Cras tincidunt lobortis feugiat vivamus at augue eget arcu.
                                <br>
                                Elit ut aliquam purus sit amet. Neque gravida in fermentum et sollicitudin. Tellus rutrum tellus pellentesque eu tincidunt. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing vitae. Nunc eget lorem dolor sed viverra ipsum nunc aliquet. Lectus proin nibh nisl condimentum id venenatis.
                            </p>
                        </div>
                    </div>

                    <!-- Detail Tentang Kawasan -->
                    <div class="col-lg-4">
                        <div class="card card-details card-more-events" data-aos="fade-up">
                            <h2>Acara Lainnya Untuk Anda:</h2>

                            <div class="card card-events mt-2">
                                <img class="img-header" src="{{ url('frontend/images/data-berita-img/berita1.png') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">
                                      <a href="detailEvents.html">
                                        Sail Pulau Randayan
                                      </a>
                                    </h5>
                                    <p class="card-text text-muted">
                                        KKPD Pulau Randayan | October 20, 2021
                                    </p>
                                </div>
                            </div>
                            <div class="card card-events mt-2">
                                <img class="img-header" src="{{ url('frontend/images/data-berita-img/berita2.png') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">
                                      <a href="detailEvents.html">
                                        Festival Pantai Paloh
                                      </a>
                                    </h5>
                                    <p class="card-text text-muted">
                                        KKPD Paloh | October 30, 2021
                                    </p>
                                </div>
                            </div>
                            <div class="card card-events mt-2">
                                <img class="img-header" src="{{ url('frontend/images/data-berita-img/berita3.png') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">
                                      <a href="detailEvents.html">
                                        Pelepasan Bayi Penyu
                                      </a>
                                    </h5>
                                    <p class="card-text text-muted">
                                        KKPD Paloh | November 01, 2021
                                    </p>
                                </div>
                            </div>
                            <div class="card card-events mt-2">
                                <img class="img-header" src="{{ url('frontend/images/data-berita-img/berita1.png') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">
                                      <a href="detailEvents.html">
                                        Festival Taman Bakau
                                      </a>
                                    </h5>
                                    <p class="card-text text-muted">
                                        KKPD Kubu Raya | November 10, 2021
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection