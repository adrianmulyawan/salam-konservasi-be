@extends('layouts.dashboard-superAdmin')

@section('title', 'Dashboard Kelola Peralatan Bawaan Pengunjung')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Peralatan Bawaan Pengunjung</h2>
                <p class="dashboard-subtitle">
                    Daftar Peralatan Bawaan Pengunjung Masuk Kawasan Konservasi
                </p>
            </div>
            <div class="dashboard-content">
                <!-- 2. Table Data Kawasan -->
                <div class="card card-conservation">
                    <!-- 2.1 Add Data Kawasan -->
                    <div class="row">
                        <div class="col-12">
                            <a href="../super-admin/dashboardTambahPeralatan.html" class="btn btn-add-data mt-2 px-3">
                                + Tambah Data Peralatan
                            </a>
                        </div>
                    </div>
                    <!-- 2.2 Tabel Daftar Kawasan -->
                    <div class="row mt-3">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Peralatan Bawaan Pengunjung</th>
                                            <th class="text-center">Harga Peralatan/Buah</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Alat Selam</td>
                                            <td class="text-center">Rp 20.000,00</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-info mt-auto">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <form action="#" method="post" class="d-inline confirm-delete">
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">Alat Pancing</td>
                                            <td class="text-center">Rp 20.000,00</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-info mt-auto">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <form action="#" method="post" class="d-inline confirm-delete">
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">Kamera Bawah Air</td>
                                            <td class="text-center">Rp 20.000,00</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-info mt-auto">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <form action="#" method="post" class="d-inline confirm-delete">
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">Alat Surfing</td>
                                            <td class="text-center">Rp 20.000,00</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-info mt-auto">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <form action="#" method="post" class="d-inline confirm-delete">
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">Kapal, Yacht, dan Kano</td>
                                            <td class="text-center">Rp 20.000,00</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-info mt-auto">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <form action="#" method="post" class="d-inline confirm-delete">
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
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

@push('addon-script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $('.confirm-delete').click(function () {    
            swal({
                title: "Apakah Anda Yakin?",
                text: "Data Yang Akan Dihapus Tidak Dapat Dikembalikan!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Data Berhasil Dihapus", {
                    icon: "success",
                    });
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
        });
    </script>
@endpush