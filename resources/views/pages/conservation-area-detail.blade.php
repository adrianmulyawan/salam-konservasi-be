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
                                    <a href="index.html">SALAM KONSERVASI</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="conservationArea.html">Kawasan Konservasi</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Details
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    KKPD Pulau Randayan
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
                            <h1 class="conservation-name">KKPD Pulau Randayan</h1>
                            <p class="conservation-location">Kabupaten Bengkayang</p>

                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="{{ url('frontend/images/detail1.png') }}" class="xzoom" id="xzoom-default" xoriginal="{{ url('frontend/images/detail1.png') }}">
                                </div>
                                <div class="xzoom-thumbs">
                                    <a href="{{ url('frontend/images/detail1.png') }}">
                                        <img src="{{ url('frontend/images/detail1.png') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/detail1.png') }}">
                                    </a>
                                    <a href="{{ url('frontend/images/detail1.png') }}">
                                        <img src="{{ url('frontend/images/detail1.png') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/detail1.png') }}">
                                    </a>
                                    <a href="{{ url('frontend/images/detail1.png') }}">
                                        <img src="{{ url('frontend/images/detail1.png') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/detail1.png') }}">
                                    </a>
                                    <a href="{{ url('frontend/images/detail1.png') }}">
                                        <img src="{{ url('frontend/images/detail1.png') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/detail1.png') }}">
                                    </a>
                                    <a href="{{ url('frontend/images/detail1.png') }}">
                                        <img src="{{ url('frontend/images/detail1.png') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/detail1.png') }}">
                                    </a>
                                </div>
                            </div>

                            <h2 class="about-conservation-text">Tentang Kawasan</h2>
                            <p class="about-conservation">
                                Kawasan Konservasi Perairan Daerah Kabupaten Bengkayang (KKPD Kabupaten Bengkayang) adalah salah satu kawasan konservasi yang ada di Kalimantan Barat, Indonesia. Dalam pembagian administratif Indonesia, KKPD Kabupaten Bengkayang berada dalam wilayah administratif Kabupaten Bengkayang. Nama lainnya adalah Kawasan Konservasi Perairan Pulau Randayan dan Pulau Lemukutan. Dasar hukumnya adalah Surat Keputusan Nomor 220 Tahun 2004. Surat keputusan ini diterbitkan pada tanggal 16 Desember 2004. Luas kawasan KKPD Kabupaten Bengkayang adalah 15.300 Hektare.
                                <br>
                                Wilayah KKPD Kabupaten Bengkayang mencakup bagian pesisir dan pulau-pulau berukuran kecil. Bagian utara KKPD Kabupaten Bengkayang berbatasan dengan Kecamatan Tujuh Belas dan Kota Singkawang. Bagian timur berbatasan dengan Kecamatan Samalantan, Kabupaten Bengkayang. Sedangkan bagian selatan berbatasan dengan Kecamatan Sungai Kunyit, Kabupaten Mempawah. Bagian sebelah barat berbatasan dengan Laut Tiongkok Selatan.
                                <br>
                                Ekosistem di KKPD Kabupaten Bengkayang berupa hutan bakau seluas 2.800 hektare. Hutan bakau menyebar di muara Sungai Duri, Sungai Pangkalan, Sungai Raya, Sungai Jaga, Sungai Keran, Sungai Ruk, Sungai Pasir dan Sungai Soga. Jenis vegetasi tumbuhan di hutan bakau meliputi bakau, tancang, dan nyiri batu. Selain itu, ada pula vegetasi pantai di pulau-pulau kecil. Jenis tumbuhan yang membentuk ekosistem ialah pandan, kelapa, dan perdu. Sekeliling pulau-pulau kecil membentuk ekosistem terumbu karang. Vegetasi terbentuk di Pulau Kabung, Pulau Lemukutan, Pulau Randayan, Pulau Baru, Pulau Seluas, Pulau Baturakit, Pulau Penata Kecil dan Pulau Penata Besar. Ekosistem terumbu karang sekitar 1.500 hektare.[2]
                            </p>
                            <div class="row features">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <img src="{{ url('frontend/images/foundation_map.png') }}" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Peta Kawasan</h3>
                                        <a href="#" class="maps" target="_blank"><p>Lihat Peta Kawasan</p></a>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left" data-aos="fade-up" data-aos-delay="200">
                                    <img src="{{ url('frontend/images/hotel.png') }}" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Penginapan</h3>
                                        <p>Tersedia</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left" data-aos="fade-up" data-aos-delay="300">
                                    <img src="{{ url('frontend/images/resto.png') }}" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Tempat Makan</h3>
                                        <p>Tersedia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Detail Tentang Kawasan -->
                    <div class="col-lg-4">
                        <div class="card card-details card-right" data-aos="fade-up">
                            <h2>Detail Kawasan Konservasi</h2>

                            <hr>

                            <table class="conservation-information">
                                <tr>
                                    <th width="50%">Lokasi Kawasan</th>
                                    <td width="50%" class="text-right">
                                        Kab Bengkayang
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Luas Kawasan</th>
                                    <td width="50%" class="text-right">
                                        15300 Hektar
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Status Kawasan</th>
                                    <td width="50%" class="text-right">
                                        Buka
                                    </td>
                                </tr>
                            </table>
                            <div class="purposes">
                                <form action="">
                                    <div class="form-group mt-3">
                                        <h2>Tujuan Masuk Kawasan</h2>
                                        <select class="custom-select" required>
                                            <option selected disabled>
                                                Tujuan Pengajuan Masuk Kawasan
                                            </option>
                                            <option value="1">Wisata</option>
                                            <option value="2">Penelitian</option>
                                            <option value="3">Pendidikan</option>
                                        </select>
                                    </div>
                                </form>
                            </div>

                            <div class="entrance-fee">
                                <h2>Harga Tarif Masuk Kawasan</h2>
                                <div class="tourism">
                                    <h3>Pariwista</h3>
                                    <table class="tourism-price">
                                        <tr>
                                            <th width="50%">WNI</th>
                                            <td width="50%" class="text-right">
                                                Rp 15.000,00/Orang
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="50%">WNA</th>
                                            <td width="50%" class="text-right">
                                                Rp 150.000,00/Orang
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="research mt-2">
                                    <h3>Penelitian</h3>
                                    <table class="research-price">
                                        <tr>
                                            <th width="50%">WNI</th>
                                            <td width="50%" class="text-right">
                                                Rp 15.000,00/Orang
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="50%">WNA</th>
                                            <td width="50%" class="text-right">
                                                Rp 150.000,00/Orang
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="education mt-2">
                                    <h3>Pendidikan</h3>
                                    <table class="education-price">
                                        <tr>
                                            <th width="50%">WNI</th>
                                            <td width="50%" class="text-right">
                                                Rp 15.000,00/Orang
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="50%">WNA</th>
                                            <td width="50%" class="text-right">
                                                Rp 150.000,00/Orang
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="tools">
                                <h2 class="mt-3">Harga Peralatan Pendukung Bawaan</h2>
                                <div class="tools-list">
                                    <table class="tools-price">
                                        <tr>
                                            <th width="50%">Alat Selam</th>
                                            <td width="50%" class="text-right">
                                                Rp 15.000,00/Item
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="50%">Kamera/Drone</th>
                                            <td width="50%" class="text-right">
                                                Rp 150.000,00/Item
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="50%">Alat Tangkap Ikan</th>
                                            <td width="50%" class="text-right">
                                                Rp 150.000,00/Item
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="50%">Kapal/Yacht</th>
                                            <td width="50%" class="text-right">
                                                Rp 150.000,00/Item
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Button Daftar -->
                        <div class="join-container" data-aos="fade-up">
                            <a href="checkout.html" class="btn btn-block btn-join-now mt-3 py-2">
                                Lanjutkan Pengajuan Izin
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Acara Kawasan Mendatang -->
        <section class="section-events">
            <div class="container">
                <div class="card card-events" data-aos="fade-up">
                    <h2>Daftar Acara Terdekat</h2>
                    <div class="section-event-conservation row justify-content-center">
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="card card-conservation-event text-left d-flex flex-column">
                                <img class="conservation-event-background" src="{{ url('frontend/images/event-detail.png') }}" alt="">
                                <div class="conservation-event-title">
                                    <h5>Bersih Pantai Randayan</h5>
                                </div>
                                <div class="conservation-event-date">
                                    Tanggal Acara: 22 Desember, 2021
                                </div>
                                <div class="conservation-event-location">
                                    Lokasi Acara: KKPD Pulau Randayan
                                </div>
                                <div class="conservation-event-detail">
                                    <a href="" class="btn btn-block btn-event-detail mt-2 py-2">
                                        Lihat Event
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="card card-conservation-event text-left d-flex flex-column">
                                <img class="conservation-event-background" src="{{ url('frontend/images/event-detail.png') }}" alt="">
                                <div class="conservation-event-title">
                                    <h5>Bersih Pantai Randayan</h5>
                                </div>
                                <div class="conservation-event-date">
                                    Tanggal Acara: 22 Desember, 2021
                                </div>
                                <div class="conservation-event-location">
                                    Lokasi Acara: KKPD Pulau Randayan
                                </div>
                                <div class="conservation-event-detail">
                                    <a href="" class="btn btn-block btn-event-detail mt-2 py-2">
                                        Lihat Event
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="card card-conservation-event text-left d-flex flex-column">
                                <img class="conservation-event-background" src="{{ url('frontend/images/event-detail.png') }}" alt="">
                                <div class="conservation-event-title">
                                    <h5>Bersih Pantai Randayan</h5>
                                </div>
                                <div class="conservation-event-date">
                                    Tanggal Acara: 22 Desember, 2021
                                </div>
                                <div class="conservation-event-location">
                                    Lokasi Acara: KKPD Pulau Randayan
                                </div>
                                <div class="conservation-event-detail">
                                    <a href="" class="btn btn-block btn-event-detail mt-2 py-2">
                                        Lihat Event
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                            <div class="card card-conservation-event text-left d-flex flex-column">
                                <img class="conservation-event-background" src="{{ url('frontend/images/event-detail.png') }}" alt="">
                                <div class="conservation-event-title">
                                    <h5>Bersih Pantai Randayan</h5>
                                </div>
                                <div class="conservation-event-date">
                                    Tanggal Acara: 22 Desember, 2021
                                </div>
                                <div class="conservation-event-location">
                                    Lokasi Acara: KKPD Pulau Randayan
                                </div>
                                <div class="conservation-event-detail">
                                    <a href="" class="btn btn-block btn-event-detail mt-2 py-2">
                                        Lihat Event
                                    </a>
                                </div>
                            </div>
                        </div>
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