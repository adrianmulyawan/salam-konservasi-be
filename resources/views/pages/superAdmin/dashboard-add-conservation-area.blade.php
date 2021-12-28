@extends('layouts.dashboard-superAdmin')

@section('title', 'Tambah Kawasan Konservasi')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Kawasan Konservasi</h2>
                <p class="dashboard-subtitle">
                    Tambah Data Kawasan Konservasi
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="#" method="post">
                            <div class="card card-edit-profile">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName">
                                            Nama Kawasan
                                        </label>
                                        <input type="text" name="nama_kawasan" class="form-control" id="inputName" placeholder="Masukan Nama Kawasan" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputLokasi">
                                            Lokasi Kawasan
                                        </label>
                                        <input type="text" name="lokasi_kawasan" class="form-control" id="inputLokasi" placeholder="Masukan Lokasi Kawasan">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputTentang">
                                            Tentang Kawasan
                                        </label>
                                        <textarea class="form-control" name="tentang_kawasan" id="inputTentang" rows="3" placeholder="Masukan Tentang Kawasan"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputLuas">
                                            Luas Kawasan
                                        </label>
                                        <input type="text" name="luas_kawasan" class="form-control" id="inputLuas" placeholder="Masukan Lokasi Kawasan">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPeta">
                                            Peta Kawasan
                                        </label>
                                        <div class="custom-file">
                                            <input type="file" name="peta_kawaan" class="custom-file-input" id="inputPeta" required>
                                            <label class="custom-file-label" for="inputPeta">Masukan Peta Kawasan</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPenginapan">Tempat Penginapan</label>
                                        <select class="form-control" id="inputPenginapan" name="tempat_penginapan">
                                          <option selected disabled>Pilih Tempat Penginapan (Tersedia/Tidak)</option>
                                          <option>Tersedia</option>
                                          <option>Tidak</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputResto">Tempat Makan</label>
                                        <select class="form-control" id="inputResto" name="tempat_makan">
                                          <option selected disabled>Pilih Tempat Makan (Tersedia/Tidak)</option>
                                          <option>Tersedia</option>
                                          <option>Tidak</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputStatus">Status Kawasan</label>
                                        <select class="form-control" id="inputStatus" name="status_kawasan">
                                          <option selected disabled>Pilih Status Kawasan (Buka/Tutup)</option>
                                          <option>Buka</option>
                                          <option>Tutup</option>
                                        </select>
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