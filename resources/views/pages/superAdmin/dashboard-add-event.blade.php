@extends('layouts.dashboard-superAdmin')

@section('title', 'Tambah Data Acara Kawasan')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Acara Kawasan Konservasi</h2>
                <p class="dashboard-subtitle">
                    Tambah Acara Terkini di Kawasan Konservasi
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="#" method="post">
                            <div class="card card-edit-profile">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputFoto">
                                            Foto Acara
                                        </label>
                                        <div class="custom-file">
                                            <input type="file" name="foto_acara" class="custom-file-input" id="inputFoto" required>
                                            <label class="custom-file-label" for="inputFoto">Masukan Foto Acara</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputJudulAcara">Judul Acara</label>
                                        <input type="text" name="judul_acara" class="form-control" id="inputJudulAcara" placeholder="Masukan Judul Acara">
                                    </div>
                                    <div class="form-group">
                                        <label for="InputTanggal">
                                            Tanggal Masuk
                                        </label>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="text" class="form-control datepicker" id="InputTanggal" name="tanggal_masuk" required placeholder="Tanggal Masuk Kawasan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputKawasan">Tambah Lokasi Event</label>
                                        <select class="form-control" id="inputKawasan" name="kawasan_konservasi">
                                          <option selected disabled>Silahkan Pilih Lokasi Event</option>
                                          <option>KKPD Pulau Randayan</option>
                                          <option>KKPD Paloh</option>
                                          <option>KKPD Kubu Raya</option>
                                          <option>KKPD Kendawangan</option>
                                          <option>KKPD Kayong Utara</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputIsiAcara">Isi Acara</label>
                                        <textarea class="form-control" name="isi_acara" id="inputIsiAcara" rows="3" placeholder="Masukan Isi Acara"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-save-data px-5 mt-3">Simpan Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'isi_acara' );
    </script>
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Gijgo
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/calendar_icon.png') }}" height="19">'
                }
            });
        });
    </script>
@endpush