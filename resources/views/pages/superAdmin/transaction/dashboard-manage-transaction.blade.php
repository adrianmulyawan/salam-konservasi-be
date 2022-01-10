@extends('layouts.dashboard-superAdmin')

@section('title', 'Dashboard Kelola Pembayaran')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Pembayaran Retribusi Izin Masuk Kawasan</h2>
                <p class="dashboard-subtitle">
                    Seluruh Daftar Pembayaran Retribusi Izin Masuk Kawasan Konservasi
                </p>
            </div>
            <div class="dashboard-content">
                <!-- 2. Table Data Kawasan -->
                <div class="card card-conservation">
                    <!-- 2.1 Tabs Pengajuan -->
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active" id="pills-pending-tab" data-toggle="pill" href="#pills-pending" role="tab" aria-selected="true">Belum Diproses</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="pills-terbayar-tab" data-toggle="pill" href="#pills-terbayar" role="tab" aria-selected="false">Terbayar</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-gagal-tab" data-toggle="pill" href="#pills-gagal" role="tab" aria-selected="false">Gagal</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <!-- Belum Diproses -->
                        <div class="tab-pane fade show active" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab">
                            <!-- 2.2 Tabel Pengajuan -->
                            <div class="row">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Kode Transaksi</th>
                                                    <th class="text-center">Nama Pemohon</th>
                                                    <th class="text-center">Total Transaksi</th>
                                                    <th class="text-center">Rencana Masuk</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SALAM-89110</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">Rp 250.000,00</td>
                                                    <td class="text-center">13 Januari, 2022</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-info mt-auto">
                                                            <i class="far fa-edit"></i>
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
                                                    <td class="text-center">SALAM-89109</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">Rp 250.000,00</td>
                                                    <td class="text-center">13 Januari, 2022</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-info mt-auto">
                                                            <i class="far fa-edit"></i>
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
                                                    <td class="text-center">SALAM-89108</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">Rp 250.000,00</td>
                                                    <td class="text-center">13 Januari, 2022</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-info mt-auto">
                                                            <i class="far fa-edit"></i>
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
                                                    <td class="text-center">SALAM-89107</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">Rp 250.000,00</td>
                                                    <td class="text-center">13 Januari, 2022</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-info mt-auto">
                                                            <i class="far fa-edit"></i>
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
                                                    <td class="text-center">SALAM-89106</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">Rp 250.000,00</td>
                                                    <td class="text-center">13 Januari, 2022</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-info mt-auto">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <form action="#" method="post" class="d-inline">
                                                            <button class="btn btn-danger">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">6</td>
                                                    <td class="text-center">SALAM-89105</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">Rp 250.000,00</td>
                                                    <td class="text-center">13 Januari, 2022</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-info mt-auto">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <form action="#" method="post" class="d-inline">
                                                            <button class="btn btn-danger">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">7</td>
                                                    <td class="text-center">SALAM-89104</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">Rp 250.000,00</td>
                                                    <td class="text-center">13 Januari, 2022</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-info mt-auto">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <form action="#" method="post" class="d-inline">
                                                            <button class="btn btn-danger">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">8</td>
                                                    <td class="text-center">SALAM-89103</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">Rp 250.000,00</td>
                                                    <td class="text-center">13 Januari, 2022</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-info mt-auto">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <form action="#" method="post" class="d-inline">
                                                            <button class="btn btn-danger">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">9</td>
                                                    <td class="text-center">SALAM-89102</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">Rp 250.000,00</td>
                                                    <td class="text-center">13 Januari, 2022</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-info mt-auto">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <form action="#" method="post" class="d-inline">
                                                            <button class="btn btn-danger">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">10</td>
                                                    <td class="text-center">SALAM-89101</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">Rp 250.000,00</td>
                                                    <td class="text-center">13 Januari, 2022</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-info mt-auto">
                                                            <i class="far fa-edit"></i>
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
                        </div>
                        <!-- Disetujui -->
                        <div class="tab-pane fade" id="pills-terbayar" role="tabpanel" aria-labelledby="pills-terbayar-tab">
                            <!-- 2.2 Tabel Pengajuan -->
                            <div class="row">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Kode Transaksi</th>
                                                    <th class="text-center">Nama Pemohon</th>
                                                    <th class="text-center">Total Transaksi</th>
                                                    <th class="text-center">Rencana Masuk</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SALAM-89110</td>
                                                    <td class="text-center">Adrian Mulyawan</td>
                                                    <td class="text-center">Rp 150.000,00</td>
                                                    <td class="text-center">13 Januari, 2022</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-info mt-auto">
                                                            <i class="far fa-eye"></i>
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
                                                    <td class="text-center">SALAM-89109</td>
                                                    <td class="text-center">Mandalika Ayusti Nawangsari</td>
                                                    <td class="text-center">Rp 110.000,00</td>
                                                    <td class="text-center">13 Januari, 2022</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-info mt-auto">
                                                            <i class="far fa-eye"></i>
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
                                                    <td class="text-center">SALAM-89108</td>
                                                    <td class="text-center">Dhafia Raisha Kamila</td>
                                                    <td class="text-center">Rp 250.000,00</td>
                                                    <td class="text-center">13 Januari, 2022</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-info mt-auto">
                                                            <i class="far fa-eye"></i>
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
                                                    <td class="text-center">SALAM-89107</td>
                                                    <td class="text-center">Yogi Saghara Purba</td>
                                                    <td class="text-center">Rp 400.000,00</td>
                                                    <td class="text-center">13 Januari, 2022</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-info mt-auto">
                                                            <i class="far fa-eye"></i>
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
                                                    <td class="text-center">SALAM-89106</td>
                                                    <td class="text-center">Melia Putri</td>
                                                    <td class="text-center">Rp 100.000,00</td>
                                                    <td class="text-center">13 Januari, 2022</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-info mt-auto">
                                                            <i class="far fa-eye"></i>
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
                        </div>
                        <!-- Gagal -->
                        <div class="tab-pane fade" id="pills-gagal" role="tabpanel" aria-labelledby="pills-gagal-tab">
                            <!-- 2.2 Tabel Pengajuan -->
                            <div class="row">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Kode Transaksi</th>
                                                    <th class="text-center">Nama Pemohon</th>
                                                    <th class="text-center">Total Transaksi</th>
                                                    <th class="text-center">Rencana Masuk</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SALAM-89110</td>
                                                    <td class="text-center">Kevin Jordan</td>
                                                    <td class="text-center">Rp 120.000,00</td>
                                                    <td class="text-center">13 Januari, 2022</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-info mt-auto">
                                                            <i class="far fa-eye"></i>
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