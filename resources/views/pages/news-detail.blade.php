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
                                    <a href="index.html">SALAM KONSERVASI</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="news.html">Berita</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Detail Berita
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Pemerintah Sambas Gencarkan Wisata...
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
                            <h1 class="conservation-news-name">
                                Pemerintah Sambas Gencarkan Gerakan Wisata Pantai Tahun 2022 
                            </h1>
                            <p class="conservation-news-date m-0">Diposting: October 20, 2021</p>
                            <p class="conservation-news-author">Ditulis: Karlina Putri</p>

                            <p class="about-news">
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
                        <div class="card card-details card-more-news" data-aos="fade-up">
                            <h2>Berita Lainnya Untuk Anda:</h2>

                            <div class="card card-news mt-2">
                                <img class="img-header" src="{{ url('frontend/images/data-berita-img/berita1.png') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">
                                      <a href="detailNews.html">
                                        Pulau Karimata Dengan Keindahannya
                                      </a>
                                    </h5>
                                    <p class="card-text text-muted">
                                        Diposting: October 20, 2021
                                    </p>
                                </div>
                            </div>
                            <div class="card card-news mt-2">
                                <img class="img-header" src="{{ url('frontend/images/data-berita-img/berita1.png') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">
                                      <a href="detailNews.html">
                                        Pulau Karimata Dengan Keindahannya
                                      </a>
                                    </h5>
                                    <p class="card-text text-muted">
                                        Diposting: October 20, 2021
                                    </p>
                                </div>
                            </div>
                            <div class="card card-news mt-2">
                                <img class="img-header" src="{{ url('frontend/images/data-berita-img/berita1.png') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">
                                      <a href="detailNews.html">
                                        Pulau Karimata Dengan Keindahannya
                                      </a>
                                    </h5>
                                    <p class="card-text text-muted">
                                        Diposting: October 20, 2021
                                    </p>
                                </div>
                            </div>
                            <div class="card card-news mt-2">
                                <img class="img-header" src="{{ url('frontend/images/data-berita-img/berita1.png') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">
                                      <a href="detailNews.html">
                                        Pulau Karimata Dengan Keindahannya
                                      </a>
                                    </h5>
                                    <p class="card-text text-muted">
                                        Diposting: October 20, 2021
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