@extends('layouts.dashboard-superAdmin')

@section('title', 'Tambah Data Peralatan Pengunjung')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Peralatan Pengunjung</h2>
                <p class="dashboard-subtitle">
                    Ubah Data Peralatan Bawaan Pengunjung
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="#" method="post">
                            <div class="card card-edit-profile">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputPeralatan">
                                            Nama Peralatan Bawaan
                                        </label>
                                        <input type="text" name="nama_peralatan" class="form-control" id="inputPeralatan" value="Alat Selam" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputHargaPeralatan">
                                            Harga Peralatan Bawaan
                                        </label>
                                        <input type="text" name="harga_peralatan" class="form-control" id="inputHargaPeralatan" value="20000">
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