@extends('layouts.dashboard-superAdmin')

@section('title', 'Dashboard Kelola Data User')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola User</h2>
                <p class="dashboard-subtitle">
                    Daftar User Sistem Informasi Pengajuan Izin Masuk Kawasan Konservasi
                </p>
            </div>
            <div class="dashboard-content">
                <!-- 2. Table Data Kawasan -->
                <div class="card card-conservation">
                    <!-- 2.1 Add Data Kawasan -->
                    <div class="row">
                        <div class="col-12">
                            <a href="../super-admin/dashboardTambahUser.html" class="btn btn-add-data mt-2 px-3">
                                + Tambah Data User
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
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Role</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Karlina Putri</td>
                                            <td class="text-center">karlinaputri@dislautkan.com</td>
                                            <td class="text-center">SUPER ADMIN</td>
                                            <td class="text-center">
                                                <a href="../super-admin/dashboardEditUser.html" class="btn btn-info mt-auto">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <form action="#" method="post" class="d-inline">
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">Erli</td>
                                            <td class="text-center">erlimahdi@dislautkan.com</td>
                                            <td class="text-center">PIMPINAN</td>
                                            <td class="text-center">
                                                <a href="../super-admin/dashboardEditUser.html" class="btn btn-info mt-auto">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <form action="#" method="post" class="d-inline">
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">Herti Herawati</td>
                                            <td class="text-center">heriherawati@dislautkan.com</td>
                                            <td class="text-center">PIMPINAN</td>
                                            <td class="text-center">
                                                <a href="../super-admin/dashboardEditUser.html" class="btn btn-info mt-auto">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <form action="#" method="post" class="d-inline">
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">Adrian Mulyawan</td>
                                            <td class="text-center">adrianmulyawan666@gmail.com</td>
                                            <td class="text-center">PEMOHON</td>
                                            <td class="text-center">
                                                <a href="../super-admin/dashboardEditUser.html" class="btn btn-info mt-auto">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <form action="#" method="post" class="d-inline">
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">Ahmad Sofyan</td>
                                            <td class="text-center">ahmad.sofyan@gmail.com</td>
                                            <td class="text-center">ADMIN LAPANGAN</td>
                                            <td class="text-center">
                                                <a href="../super-admin/dashboardEditUser.html" class="btn btn-info mt-auto">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <form action="#" method="post" class="d-inline">
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