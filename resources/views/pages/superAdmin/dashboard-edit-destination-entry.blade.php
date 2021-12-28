@extends('layouts.dashboard-superAdmin')

@section('title', 'Tambah Data Tujuan Masuk Kawasan')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Tujuan Masuk Kawasan Konservasi</h2>
                <p class="dashboard-subtitle">
                    Edit Data Tujuan Masuk Kawasan
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="#" method="post">
                            <div class="card card-edit-profile">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputTujuan">
                                            Tujuan Masuk Kawasan
                                        </label>
                                        <input type="text" name="tujuan_masuk_kawasan" class="form-control" id="inputTujuan" value="Pariwisata" autofocus>
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