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
            <!-- Berita Terbaru -->
            <div class="container">
                <div class="section-conservation-area-events-new row justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-12" data-aos="fade-up">
                        <div class="card mb-3" style="max-width: 1110px;">
                            <div class="row no-gutters">
                              <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <img class="header-image" src="{{ url('frontend/images/data-berita-img/header.png') }}" alt="header-image">
                              </div>
                              <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="card-body">
                                    <h5 class="card-title">
                                      <a href="detailEvent.html">
                                        Gerakan Membersihkan Sampah di Pantai Paloh dan Pulau Randayan
                                      </a>
                                    </h5>
                                    <p class="card-text card-date">
                                        <small class="text-muted">
                                            Diposting: October 20, 2021
                                        </small>
                                    </p>
                                    <p class="card-text card-location-events">
                                        <small class="text-muted">
                                            Lokasi Acara: KKPD Paloh & KKPD Randayan
                                        </small>
                                    </p>
                                    <p class="card-text card-text-events">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem sed risus ultricies tristique nulla. Elit pellentesque habitant morbi tristique senectus. Sem integer vitae justo eget.
                                    </p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>

            <!-- Daftar Berita -->
            <div class="container">
                <div class="section-conservation-area-events row justify-content-start">
                    <div class="col-sm-6 col-md-4 col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="{{ url('frontend/images/data-berita-img/berita1.png') }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    Pesta Adat Pulau Randayan
                                </h5>
                                <p class="card-post text-center">Tanggal Event: October 20, 2021</p>
                                <p class="card-location text-center">
                                    Lokasi Event: KKPD Pulau Randayan 
                                </p>
                            </div>
                        </div>
                        <div class="see-events">
                            <a href="detailEvent.html" class="btn btn-block btn-detail-events mt-3 px-2">Lihat Detail Acara</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="{{ url('frontend/images/data-berita-img/berita2.png') }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    Pesta Adat Pulau Randayan
                                </h5>
                                <p class="card-post text-center">Tanggal Event: October 20, 2021</p>
                                <p class="card-location text-center">
                                    Lokasi Event: KKPD Pulau Randayan 
                                </p>
                            </div>
                        </div>
                        <div class="see-events">
                            <a href="detailEvent.html" class="btn btn-block btn-detail-events mt-3 px-2">Lihat Detail Acara</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <img src="{{ url('frontend/images/data-berita-img/berita3.png') }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    Pesta Adat Pulau Randayan
                                </h5>
                                <p class="card-post text-center">Tanggal Event: October 20, 2021</p>
                                <p class="card-location text-center">
                                    Lokasi Event: KKPD Pulau Randayan 
                                </p>
                            </div>
                        </div>
                        <div class="see-events">
                            <a href="detailEvent.html" class="btn btn-block btn-detail-events mt-3 px-2">Lihat Detail Acara</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="card">
                            <img src="{{ url('frontend/images/data-berita-img/berita1.png') }}" class="card-img-300">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    Pesta Adat Pulau Randayan
                                </h5>
                                <p class="card-post text-center">Tanggal Event: October 20, 2021</p>
                                <p class="card-location text-center">
                                    Lokasi Event: KKPD Pulau Randayan 
                                </p>
                            </div>
                        </div>
                        <div class="see-events">
                            <a href="detailEvent.html" class="btn btn-block btn-detail-events mt-3 px-2">Lihat Detail Acara</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="500">
                        <div class="card">
                            <img src="{{ url('frontend/images/data-berita-img/berita2.png') }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    Pesta Adat Pulau Randayan
                                </h5>
                                <p class="card-post text-center">Tanggal Event: October 20, 2021</p>
                                <p class="card-location text-center">
                                    Lokasi Event: KKPD Pulau Randayan 
                                </p>
                            </div>
                        </div>
                        <div class="see-events">
                            <a href="detailEvent.html" class="btn btn-block btn-detail-events mt-3 px-2">Lihat Detail Acara</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="600">
                        <div class="card">
                            <img src="{{ url('frontend/images/data-berita-img/berita3.png') }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    Pesta Adat Pulau Randayan
                                </h5>
                                <p class="card-post text-center">Tanggal Event: October 20, 2021</p>
                                <p class="card-location text-center">
                                    Lokasi Event: KKPD Pulau Randayan 
                                </p>
                            </div>
                        </div>
                        <div class="see-events">
                            <a href="detailEvent.html" class="btn btn-block btn-detail-events mt-3 px-2">Lihat Detail Acara</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="700">
                        <div class="card">
                            <img src="{{ url('frontend/images/data-berita-img/berita1.png') }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    Pesta Adat Pulau Randayan
                                </h5>
                                <p class="card-post text-center">Tanggal Event: October 20, 2021</p>
                                <p class="card-location text-center">
                                    Lokasi Event: KKPD Pulau Randayan 
                                </p>
                            </div>
                        </div>
                        <div class="see-events">
                            <a href="detailEvent.html" class="btn btn-block btn-detail-events mt-3 px-2">Lihat Detail Acara</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="800">
                        <div class="card">
                            <img src="{{ url('frontend/images/data-berita-img/berita2.png') }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    Pesta Adat Pulau Randayan
                                </h5>
                                <p class="card-post text-center">Tanggal Event: October 20, 2021</p>
                                <p class="card-location text-center">
                                    Lokasi Event: KKPD Pulau Randayan 
                                </p>
                            </div>
                        </div>
                        <div class="see-events">
                            <a href="detailEvent.html" class="btn btn-block btn-detail-events mt-3 px-2">Lihat Detail Acara</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="900">
                        <div class="card">
                            <img src="{{ url('frontend/images/data-berita-img/berita3.png') }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    Pesta Adat Pulau Randayan
                                </h5>
                                <p class="card-post text-center">Tanggal Event: October 20, 2021</p>
                                <p class="card-location text-center">
                                    Lokasi Event: KKPD Pulau Randayan 
                                </p>
                            </div>
                        </div>
                        <div class="see-events">
                            <a href="detailEvent.html" class="btn btn-block btn-detail-events mt-3 px-2">Lihat Detail Acara</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="container mt-3" data-aos="fade-up">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>
@endsection