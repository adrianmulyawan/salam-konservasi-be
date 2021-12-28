@extends('layouts.dashboard-superAdmin')

@section('title', 'Dashboard Kelola Acara')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Acara Kawasan Konservasi</h2>
                <p class="dashboard-subtitle">
                    Update Acara Terkini di Kawasan Konservasi
                </p>
            </div>
            <div class="dashboard-content">
                <!-- 2. Table Data Kawasan -->
                <div class="card card-conservation">
                    <!-- 2.1 Add Data Kawasan -->
                    <div class="row">
                        <div class="col-12">
                            <a href="#" class="btn btn-add-data mt-2 px-3">
                                + Tambah Data Acara Kawasan
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
                                            <th class="text-center">Judul Acara</th>
                                            <th class="text-center">Tanggal Acara</th>
                                            <th class="text-center">Lokasi Acara</th>
                                            <th class="text-center">Foto Acara</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Festival Pantai Paloh</td>
                                            <td class="text-center">12 Januari, 2021</td>
                                            <td class="text-center">KKPD Paloh</td>
                                            <td class="text-center">
                                                <img src="{{ url('frontend/images/user/photo-kawasan.png') }}" alt="foto-kawasan" class="foto-kawasan">
                                            </td>
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
                                            <td class="text-center">Festival Pantai Paloh</td>
                                            <td class="text-center">12 Januari, 2021</td>
                                            <td class="text-center">KKPD Paloh</td>
                                            <td class="text-center">
                                                <img src="{{ url('frontend/images/user/photo-kawasan.png') }}" alt="foto-kawasan" class="foto-kawasan">
                                            </td>
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
                                            <td class="text-center">Festival Pantai Paloh</td>
                                            <td class="text-center">12 Januari, 2021</td>
                                            <td class="text-center">KKPD Paloh</td>
                                            <td class="text-center">
                                                <img src="{{ url('frontend/images/user/photo-kawasan.png') }}" alt="foto-kawasan" class="foto-kawasan">
                                            </td>
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
                                            <td class="text-center">Festival Pantai Paloh</td>
                                            <td class="text-center">12 Januari, 2021</td>
                                            <td class="text-center">KKPD Paloh</td>
                                            <td class="text-center">
                                                <img src="{{ url('frontend/images/user/photo-kawasan.png') }}" alt="foto-kawasan" class="foto-kawasan">
                                            </td>
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
                                            <td class="text-center">Festival Pantai Paloh</td>
                                            <td class="text-center">12 Januari, 2021</td>
                                            <td class="text-center">KKPD Paloh</td>
                                            <td class="text-center">
                                                <img src="{{ url('frontend/images/user/photo-kawasan.png') }}" alt="foto-kawasan" class="foto-kawasan">
                                            </td>
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