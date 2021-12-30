@extends('layouts.dashboard-superAdmin')

@section('title', 'Detail Aspirasi Pengguna')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Detail Formulir Kepuasan & Kekurangan</h2>
                <p class="dashboard-subtitle">
                    Detail Kritik & Saran Dari Pengunjung Kawasan
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
                                            Nama
                                        </label>
                                        <input type="text" name="nama" class="form-control" id="inputName" value="Adrian Mulyawan" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">
                                            Email
                                        </label>
                                        <input type="email" name="email" class="form-control" id="inputEmail" value="adrianmulyawan666@gmail.com" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone">
                                            No Telpon
                                        </label>
                                        <input type="text" name="no_telpon" class="form-control" id="inputPhone" value="082154590559" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputJudul">
                                            Judul Pesan
                                        </label>
                                        <input type="text" name="judul" class="form-control" id="inputJudul" value="Petugas Kawasan Kurang Ramah" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="isiPesan">Isi Pesan</label>
                                        <textarea class="form-control" name="isi_pesan" id="isiPesan" rows="3" value="#" disabled>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, minima quaerat iusto dignissimos accusantium tenetur dicta sint sapiente obcaecati laudantium.
                                        </textarea>
                                    </div>
                                    <a href="../super-admin/dashboardMasukan.html" class="btn btn-close mt-auto px-5">Tutup</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection