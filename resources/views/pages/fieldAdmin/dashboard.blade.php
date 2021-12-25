@extends('layouts.dashboard-fieldAdmin')

@section('title', 'Dashboard Admin Lapangan')

@push('addon-style')
    <script src="https://kit.fontawesome.com/0249022da9.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Data Keluar Masuk Pengunjung</h2>
                <p class="dashboard-subtitle">
                    Daftar Kelola Data Masuk & Data Keluar Pengunjung
                </p>
            </div>
            <div class="dashboard-content">
                <div class="card card-conservation">
                    <div class="row">
                        <div class="card-body">
                            <form action="#" method="post" >
                                <div class="input-group input-transaction-code">
                                    <input type="text" class="form-control" placeholder="Cari Data Izin Masuk Pengunjung Kawasan Konservasi" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                      <button class="btn btn-search" type="button" id="button-addon2">Cari Data</button>
                                    </div>
                                </div>
                            </form>

                            <div class="table-responsive mt-4">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Kode Transaksi</th>
                                            <th class="text-center">Nama Pemohon</th>
                                            <th class="text-center">Lokasi Tujuan</th>
                                            <th class="text-center">Tujuan</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">SALAM-89110</td>
                                            <td class="text-center">Adrian Mulyawan</td>
                                            <td class="text-center">KKPD Pulau Randayan</td>
                                            <td class="text-center">Pariwisata</td>
                                            <td class="text-center">
                                                <abbr title="Detail Data Keluar Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-in-alt"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Keluar Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                    </a>
                                                </abbr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">SALAM-89109</td>
                                            <td class="text-center">Alfan Suri</td>
                                            <td class="text-center">KKPD Pulau Randayan</td>
                                            <td class="text-center">Pariwisata</td>
                                            <td class="text-center">
                                                <abbr title="Detail Data Keluar Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-in-alt"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Keluar Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                    </a>
                                                </abbr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">SALAM-89108</td>
                                            <td class="text-center">Stefani Putri</td>
                                            <td class="text-center">KKPD Pulau Randayan</td>
                                            <td class="text-center">Penelitian</td>
                                            <td class="text-center">
                                                <abbr title="Detail Data Keluar Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-in-alt"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Keluar Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                    </a>
                                                </abbr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">SALAM-89107</td>
                                            <td class="text-center">Alexander Teorison</td>
                                            <td class="text-center">KKPD Pulau Randayan</td>
                                            <td class="text-center">Penelitian</td>
                                            <td class="text-center">
                                                <abbr title="Detail Data Keluar Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-in-alt"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Keluar Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                    </a>
                                                </abbr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">SALAM-89106</td>
                                            <td class="text-center">Mahmudin</td>
                                            <td class="text-center">KKPD Pulau Randayan</td>
                                            <td class="text-center">Pariwisata</td>
                                            <td class="text-center">
                                                <abbr title="Detail Data Keluar Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-in-alt"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Keluar Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                    </a>
                                                </abbr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center">SALAM-89105</td>
                                            <td class="text-center">Adilla Putri</td>
                                            <td class="text-center">KKPD Pulau Randayan</td>
                                            <td class="text-center">Pendidikan</td>
                                            <td class="text-center">
                                                <abbr title="Detail Data Keluar Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-in-alt"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Keluar Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                    </a>
                                                </abbr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td class="text-center">SALAM-89104</td>
                                            <td class="text-center">David Nurmangedov</td>
                                            <td class="text-center">KKPD Pulau Randayan</td>
                                            <td class="text-center">Penelitian</td>
                                            <td class="text-center">
                                                <abbr title="Detail Data Keluar Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-in-alt"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Keluar Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                    </a>
                                                </abbr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">8</td>
                                            <td class="text-center">SALAM-89103</td>
                                            <td class="text-center">Sukron Purnomo</td>
                                            <td class="text-center">KKPD Pulau Randayan</td>
                                            <td class="text-center">Pariwisata</td>
                                            <td class="text-center">
                                                <abbr title="Detail Data Keluar Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-in-alt"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Keluar Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                    </a>
                                                </abbr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">9</td>
                                            <td class="text-center">SALAM-89102</td>
                                            <td class="text-center">Ilyas Putra</td>
                                            <td class="text-center">KKPD Pulau Randayan</td>
                                            <td class="text-center">Penelitian</td>
                                            <td class="text-center">
                                                <abbr title="Detail Data Keluar Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-in-alt"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Keluar Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                    </a>
                                                </abbr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">10</td>
                                            <td class="text-center">SALAM-89101</td>
                                            <td class="text-center">Ahmad Nurbaiti</td>
                                            <td class="text-center">KKPD Pulau Randayan</td>
                                            <td class="text-center">Pendidikan</td>
                                            <td class="text-center">
                                                <abbr title="Detail Data Keluar Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Masuk Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-in-alt"></i>
                                                    </a>
                                                </abbr>
                                                <abbr title="Tambah Data Keluar Pengunjung">
                                                    <a href="#" class="btn btn-primary mt-auto">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                    </a>
                                                </abbr>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end mr-2">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection