@extends('layouts.dashboard-superAdmin')

@section('title', 'Edit Galeri Kawasan Konservasi')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Galeri Kawasan Konservasi</h2>
                <p class="dashboard-subtitle">
                    Ubah Data Galeri Kawasan Konservasi
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="#" method="post">
                            <div class="card card-edit-profile">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputKawasan">Nama Kawasan</label>
                                        <select class="form-control" id="inputKawasan" name="kawasan_konservasi">
                                          <option selected>KKPD Pulau Randayan</option>
                                          <option>KKPD Paloh</option>
                                          <option>KKPD Kubu Raya</option>
                                          <option>KKPD Kendawangan</option>
                                          <option>KKPD Kayong Utara</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPeta">
                                            Foto Kawasan
                                        </label>
                                        <div class="custom-file">
                                            <input type="file" name="peta_kawaan" class="custom-file-input" id="inputPeta" required>
                                            <label class="custom-file-label" for="inputPeta">Masukan Foto Kawasan</label>
                                        </div>
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