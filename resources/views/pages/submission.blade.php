@extends('layouts.app')

@section('title-website', 'SALAM Konservasi - Pengajuan Izin Masuk Kawasan')

@push('prepend-style')
    <!-- gijgo -->
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.css') }}">
@endpush

@section('content')
    <!-- Konten Utama -->
    <main> 
        <!-- 1. Header -->
        <section class="section-details-header"></section>

        <!-- 2. Konten -->
        <section class="section-details-content">
            <div class="container">
                <!-- Bread Crumb -->
                <div class="row" data-aos="fade-up">
                    <div class="col p-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Kawasan Konservasi</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Details 
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Pengajuan Surat Izin Masuk KKPD
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    KKPD Pulau Randayan
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <!-- Tambah Data dan Cek Data -->
                <div class="row">
                    <!-- Tambah Data -->
                    <div class="col-lg-8 pl-lg-0" data-aos="fade-up">
                        <div class="card card-details">
                            <h1>Pengajuan Surat Izin Masuk Kawasan Konservasi</h1>
                            <p>KKPD Pulau Randayan</p>
                            <div class="date">
                                <form action="#" method="post">
                                    <h2 class="inputDate">Tambahkan Tanggal Masuk dan Keluar Kawasan</h2>
                                    <div class="form-inline">
                                        <label for="tanggal_masuk" class="sr-only">
                                            Tanggal Masuk
                                        </label>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="text" class="form-control datepicker" id="tanggal_masuk" name="tanggal_masuk" required placeholder="Tanggal Masuk Kawasan">
                                        </div>

                                        <label for="tanggal_keluar" class="sr-only">
                                            Tanggal Keluar
                                        </label>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="text" class="form-control datepicker1" id="tanggal_keluar" name="tanggal_keluar" required placeholder="Tanggal Keluar Kawasan">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-submits mt-0 py-2 mb-2">Tambah</button>
                                    </div>
                                </form>
                            </div>
                            <hr>
                            <div class="attendee">
                                <h2>Data Pengunjung</h2>
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>Nama</td>
                                            <td>Kenegaraan</td>
                                            <td>No Telp</td>
                                            <td>Alamat</td>
                                            <td>Foto Identitas</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle">Anastasya Kosasih</td>
                                            <td class="align-middle">WNI</td>
                                            <td class="align-middle">
                                                082154590559
                                            </td>
                                            <td class="align-middle">Jl Sawo no 69</td>
                                            <td>
                                                <img src="{{ url('frontend/images/KTP.png') }}" height="70">
                                            </td>
                                            <td class="align-middle">
                                                <a href="#">
                                                    <img src="{{ url('frontend/images/cancel_icon.png') }}" width="10">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">Adrian Mulyawan</td>
                                            <td class="align-middle">WNI</td>
                                            <td class="align-middle">
                                                089640001855
                                            </td>
                                            <td class="align-middle">Jl Sawo no 69</td>
                                            <td>
                                                <img src="{{ url('frontend/images/KTP.png') }}" height="70">
                                            </td>
                                            <td class="align-middle">
                                                <a href="#">
                                                    <img src="{{ url('frontend/images/cancel_icon.png') }}" width="10">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="member mt-3">
                                <h2>Tambah Data Anggota Pengunjung</h2>
                                <form action="" class="form-inline">
                                    <label for="inputName" class="sr-only">Name</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 input-name" id="inputName" name="inputName" required placeholder="Nama">

                                    <label for="inputNationality" class="sr-only">Nationality</label>
                                    <select class="custom-select mb-2 mr-sm-2 input-nationality" id="inputNationality" name="inputNationality" required>
                                        <option selected disabled>Kebangsaan</option>
                                        <option value="wni">WNI</option>
                                        <option value="wna">WNA</option>
                                    </select>

                                    <label for="inputAddress" class="sr-only">Alamat</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 input-alamat" id="inputAddress" required placeholder="Alamat">

                                    <label for="inputTelpon" class="sr-only">Alamat</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 input-telpon" id="inputTelpon" required placeholder="No Telpon">

                                    <div class="custom-file mb-2">
                                        <label class="custom-file-label" for="inputIdentity">KTP/KK/Passport</label>
                                        <input type="file" class="custom-file-input mb-2 mr-sm-2 input-identity" id="inputIdentity" required>
                                    </div>

                                    <button type="submit" class="btn btn-add-member mb-2 px-4">
                                        Tambah
                                    </button>
                                </form>
                            </div>
                            <hr>
                            <div class="tools">
                                <h2>Peralatan Bawaan Pengunjung (Perbuah)</h2>
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>Alat Selam</td>
                                            <td>Alat Seluncur</td>
                                            <td>Kamera (Kamera Bawah Air / Kamera)</td>
                                            <td>Jetski</td>
                                            <td>Kapal</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle">0</td>
                                            <td class="align-middle">0</td>
                                            <td class="align-middle">0</td>
                                            <td class="align-middle">0</td>
                                            <td class="align-middle">0</td>
                                            <td class="align-middle">
                                                <a href="#">
                                                    <img src="{{ url('frontend/images/cancel_icon.png') }}" width="10">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="add-tools">
                                <h2>Tambah Data Peralatan Bawaan Pengunjung</h2>
                                <form action="" class="form-inline">
                                    <label for="alatSelam" class="sr-only">Alat Selam</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 input-alat-selam" id="alatSelam" name="alatSelam" required placeholder="Alat Selam (Buah)">

                                    <label for="alatSeluncur" class="sr-only">Alat Selam</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 input-alat-seluncur" id="alatSeluncur" name="alatSeluncur" required placeholder="Alat Seluncur (Buah)">

                                    <label for="kamera" class="sr-only">Alat Selam</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 input-kamera" id="kamera" name="kamera" required placeholder="Kamera (Buah)">

                                    <label for="jetski" class="sr-only">Alat Selam</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 input-jetski" id="jetski" name="jetski" required placeholder="Jetski (Buah)">

                                    <label for="kapal" class="sr-only">Alat Selam</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 input-kapal" id="kapal" name="kapal" required placeholder="Kapal (Buah)">

                                    <button type="submit" class="btn btn-add-tools mb-2 px-4">
                                        Tambah
                                    </button>
                                </form>
                            </div>
                            <div class="note-tools mt-2 mb-0">
                                <h3>Catatan</h3>
                                <p>
                                    Jika Tidak Membawa Peralatan Cukup Kosongkan Saja
                                </p>
                            </div>
                            <hr>
                            <div class="upload-research-education">
                                <h2>Upload Form Pengajuan Untuk Penelitian dan Pendidikan</h2>
                                <div class="custom-file mb-2">
                                    <label class="custom-file-label" for="inputFormulir">Upload Formulir Kegiatan Penelitian / Pendidikan</label>
                                    <input type="file" class="custom-file-input mb-2 mr-sm-2 input-formulir" id="inputFormulir" required>
                                </div>
                            </div>
                            <div class="note-research mt-2 mb-0">
                                <h3>Catatan</h3>
                                <p>
                                    Upload Form Hanya Untuk Pengaju yang Melakukan Kunjungan Penelitian / Pendidikan
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Detail Tentang Kawasan -->
                    <div class="col-lg-4">
                        <div class="card card-details card-right" data-aos="fade-up">
                            <h2>Konfirmasi Data Pengajuan Masuk Kawasan</h2>

                            <hr>

                            <table class="conservation-checkout">
                                <tr class="mb-2">
                                    <th width="50%">Tujuan Pengajuan</th>
                                    <td width="50%" class="text-right">
                                        Pariwista
                                    </td>
                                </tr>
                                <tr class="mb-2">
                                    <th width="50%">Jumlah Hari</th>
                                    <td width="50%" class="text-right">
                                        2 Hari
                                    </td>
                                </tr>
                                <tr class="mb-2">
                                    <th width="50%">Jumlah Pengunjung</th>
                                    <td width="50%" class="text-right">
                                        2 Orang
                                    </td>
                                </tr>
                                <tr class="mb-2">
                                    <th width="50%">Biaya Pengajuan Izin</th>
                                    <td width="50%" class="text-right">
                                        Rp 60.000,00
                                    </td>
                                </tr>
                                <tr class="mb-2">
                                    <th width="50%">Biaya Bawaan Pengunjung</th>
                                    <td width="50%" class="text-right">
                                        Rp 120.000,00
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Total Biaya Pengajuan</th>
                                    <td width="50%" class="text-right total-price">
                                        Rp 180.000,00
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- Button Daftar -->
                        <div class="join-container" data-aos="fade-up">
                            <!-- <a class="btn btn-block btn-join-now mt-3 py-2" data-toggle="modal" data-target="#staticBackdrop">
                                Daftar Pengajuan Izin Masuk Kawasan
                            </a> -->
                            <button type="button" class="btn btn-block btn-join-now mt-3 py-2" data-toggle="modal" data-target="#staticBackdrop">
                                Daftar Pengajuan Izin Masuk Kawasan
                            </button>
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">
                                            Apa Anda Yakin?
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Data yang sudah anda inputkan tidak dapat dirubah
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <a href="successCheckout.html" class="btn btn-primary">
                                            Lanjutkan
                                        </a>
                                      </div>
                                    </div>
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
    {{-- Gijgo Script --}}
    <script src="frontend/libraries/gijgo/js/gijgo.js"></script>
    <script>
        $(document).ready(function() {
            // Gijgo
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/calendar_icon.png') }}" height="19">'
                }
            });
            $('.datepicker1').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/calendar_icon.png') }}" height="19">'
                }
            });
        });
    </script>
@endpush