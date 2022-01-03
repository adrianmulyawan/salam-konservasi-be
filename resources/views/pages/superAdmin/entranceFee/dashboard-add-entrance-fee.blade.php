@extends('layouts.dashboard-superAdmin')

@section('title', 'Tambah Data Tarif Masuk Kawasan')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Tarif Masuk Kawasan Konservasi</h2>
                <p class="dashboard-subtitle">
                    Tambah Data Tarif Masuk Kawasan Konservasi
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="#" method="post">
                            <div class="card card-edit-profile">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputTujuan">Tujuan Masuk Kawasan Konservasi</label>
                                        <select class="form-control" id="inputTujuan" name="tujuan_masuk_kawasan">
                                          <option selected disabled>Silahkan Pilih Tujuan</option>
                                          <option>Pariwisata</option>
                                          <option>Penelitian</option>
                                          <option>Pendidikan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputKebangsaan">Kebangsaan</label>
                                        <select class="form-control" id="inputKebangsaan" name="kebangsaan">
                                          <option selected disabled>Silahkan Pilih Kebangsaan</option>
                                          <option>WNI</option>
                                          <option>WNA</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Tarif Masuk Kawasan/Hari</label>
                                        <input type="text" class="form-control" id="price" name="price" placeholder="Masukan Harga Tarif Masuk Kawasan">
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