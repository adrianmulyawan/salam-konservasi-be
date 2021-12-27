@extends('layouts.dashboard-leader')

@section('title', 'Data Keluar Masuk Pengunjung')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Data Keluar Masuk Pengunjung</h2>
                <p class="dashboard-subtitle">
                    Daftar Pengunjung Yang Masuk dan Keluar Kawasan Konservasi
                </p>
            </div>
            <div class="dashboard-content">
                <!-- 2. Table Data Kawasan -->
                <div class="card card-conservation">
                    <div class="row">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Kode Transaksi</th>
                                            <th class="text-center">Nama Pengunjung</th>
                                            <th class="text-center">Lokasi Tujuan</th>
                                            <th class="text-center">Tujuan</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">SALAM-89120</td>
                                            <td class="text-center">Rachel Venya</td>
                                            <td class="text-center">KKPD Pulau Randayan</td>
                                            <td class="text-center">Pariwisata</td>
                                            <td class="text-center">
                                                <!-- <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a> -->
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-3" data-toggle="modal" data-target="#detailKunjungan">
                                                    Lihat Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Kunjungan Pengunjung: #SALAM-89120
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>
                                                                        Nama Pengunjung
                                                                    </th>
                                                                    <td>
                                                                        Rachel Venya
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        Kawasan Tujuan
                                                                    </th>
                                                                    <td>
                                                                        KKPD Pulau Randayan
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tujuan Masuk Kawasan</th>
                                                                    <td>Pariwisata</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Admin Lapangan</th>
                                                                    <td>Ahmad Nurfauzi</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Masuk Kawasan</th>
                                                                    <td>31 Desember 2021</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Keluar Kawasan</th>
                                                                    <td>06 Januari 2022</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Masuk Kawasan</th>
                                                                    <td>01 Januari 2022 | 08:00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Keluar Kawasan</th>
                                                                    <td>05 Januari 2022 | 15:00</td>
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-sim-kawasan" data-dismiss="modal">Close</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">SALAM-89119</td>
                                            <td class="text-center">Muhammad Hakaman Athhar</td>
                                            <td class="text-center">KKPD Pulau Randayan</td>
                                            <td class="text-center">Pariwisata</td>
                                            <td class="text-center">
                                                <!-- <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a> -->
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-3" data-toggle="modal" data-target="#detailKunjungan">
                                                    Lihat Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Kunjungan Pengunjung: #SALAM-89120
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>
                                                                        Nama Pengunjung
                                                                    </th>
                                                                    <td>
                                                                        Muhammad Hakaman Athhar
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        Kawasan Tujuan
                                                                    </th>
                                                                    <td>
                                                                        KKPD Pulau Randayan
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tujuan Masuk Kawasan</th>
                                                                    <td>Pariwisata</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Admin Lapangan</th>
                                                                    <td>Ahmad Nurfauzi</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Masuk Kawasan</th>
                                                                    <td>31 Desember 2021</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Keluar Kawasan</th>
                                                                    <td>06 Januari 2022</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Masuk Kawasan</th>
                                                                    <td>01 Januari 2022 | 08:00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Keluar Kawasan</th>
                                                                    <td>05 Januari 2022 | 15:00</td>
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-sim-kawasan" data-dismiss="modal">Close</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">SALAM-89118</td>
                                            <td class="text-center">Revianto</td>
                                            <td class="text-center">KKPD Paloh</td>
                                            <td class="text-center">Penelitian</td>
                                            <td class="text-center">
                                                <!-- <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a> -->
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-3" data-toggle="modal" data-target="#detailKunjungan">
                                                    Lihat Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Kunjungan Pengunjung: #SALAM-89118
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>
                                                                        Nama Pengunjung
                                                                    </th>
                                                                    <td>
                                                                        Revianto
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        Kawasan Tujuan
                                                                    </th>
                                                                    <td>
                                                                        KKPD Paloh
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tujuan Masuk Kawasan</th>
                                                                    <td>Penelitian</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Admin Lapangan</th>
                                                                    <td>Abdul Wadir</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Masuk Kawasan</th>
                                                                    <td>31 Desember 2021</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Keluar Kawasan</th>
                                                                    <td>06 Januari 2022</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Masuk Kawasan</th>
                                                                    <td>01 Januari 2022 | 08:00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Keluar Kawasan</th>
                                                                    <td>05 Januari 2022 | 15:00</td>
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-sim-kawasan" data-dismiss="modal">Close</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">SALAM-89117</td>
                                            <td class="text-center">Badrul</td>
                                            <td class="text-center">KKPD Paloh</td>
                                            <td class="text-center">Pariwisata</td>
                                            <td class="text-center">
                                                <!-- <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a> -->
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-3" data-toggle="modal" data-target="#detailKunjungan">
                                                    Lihat Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Kunjungan Pengunjung: #SALAM-89117
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>
                                                                        Nama Pengunjung
                                                                    </th>
                                                                    <td>
                                                                        Badrul
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        Kawasan Tujuan
                                                                    </th>
                                                                    <td>
                                                                        KKPD Pulau Randayan
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tujuan Masuk Kawasan</th>
                                                                    <td>Pariwisata</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Admin Lapangan</th>
                                                                    <td>Abdul Wadir</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Masuk Kawasan</th>
                                                                    <td>31 Desember 2021</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Keluar Kawasan</th>
                                                                    <td>06 Januari 2022</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Masuk Kawasan</th>
                                                                    <td>01 Januari 2022 | 08:00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Keluar Kawasan</th>
                                                                    <td>05 Januari 2022 | 15:00</td>
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-sim-kawasan" data-dismiss="modal">Close</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">SALAM-89116</td>
                                            <td class="text-center">Maman Abdurahman</td>
                                            <td class="text-center">KKPD Kubu Raya</td>
                                            <td class="text-center">Pariwisata</td>
                                            <td class="text-center">
                                                <!-- <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a> -->
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-3" data-toggle="modal" data-target="#detailKunjungan">
                                                    Lihat Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Kunjungan Pengunjung: #SALAM-89116
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>
                                                                        Nama Pengunjung
                                                                    </th>
                                                                    <td>
                                                                        Maman Abdurahman
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        Kawasan Tujuan
                                                                    </th>
                                                                    <td>
                                                                        KKPD Kubu Raya
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tujuan Masuk Kawasan</th>
                                                                    <td>Pariwisata</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Admin Lapangan</th>
                                                                    <td>Sutrisno</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Masuk Kawasan</th>
                                                                    <td>31 Desember 2021</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Keluar Kawasan</th>
                                                                    <td>06 Januari 2022</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Masuk Kawasan</th>
                                                                    <td>01 Januari 2022 | 08:00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Keluar Kawasan</th>
                                                                    <td>05 Januari 2022 | 15:00</td>
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-sim-kawasan" data-dismiss="modal">Close</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center">SALAM-89110</td>
                                            <td class="text-center">Adrian Mulyawan</td>
                                            <td class="text-center">KKPD Kubu Raya</td>
                                            <td class="text-center">Pariwisata</td>
                                            <td class="text-center">
                                                <!-- <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a> -->
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-3" data-toggle="modal" data-target="#detailKunjungan">
                                                    Lihat Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Kunjungan Pengunjung: #SALAM-89110
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>
                                                                        Nama Pengunjung
                                                                    </th>
                                                                    <td>
                                                                        Adrian Mulyawan
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        Kawasan Tujuan
                                                                    </th>
                                                                    <td>
                                                                        KKPD Kubu Raya
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tujuan Masuk Kawasan</th>
                                                                    <td>Pariwisata</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Admin Lapangan</th>
                                                                    <td>Sutrisno</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Masuk Kawasan</th>
                                                                    <td>31 Desember 2021</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Keluar Kawasan</th>
                                                                    <td>06 Januari 2022</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Masuk Kawasan</th>
                                                                    <td>01 Januari 2022 | 08:00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Keluar Kawasan</th>
                                                                    <td>05 Januari 2022 | 15:00</td>
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-sim-kawasan" data-dismiss="modal">Close</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td class="text-center">SALAM-89109</td>
                                            <td class="text-center">Dhafia Raisha Kamila</td>
                                            <td class="text-center">KKPD Kendawangan</td>
                                            <td class="text-center">Pariwisata</td>
                                            <td class="text-center">
                                                <!-- <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a> -->
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-3" data-toggle="modal" data-target="#detailKunjungan">
                                                    Lihat Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Kunjungan Pengunjung: #SALAM-89109
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>
                                                                        Nama Pengunjung
                                                                    </th>
                                                                    <td>
                                                                        Dhafia Raisha Kamila
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        Kawasan Tujuan
                                                                    </th>
                                                                    <td>
                                                                        KKPD Kendawangan
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tujuan Masuk Kawasan</th>
                                                                    <td>Pariwisata</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Admin Lapangan</th>
                                                                    <td>Suwandi</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Masuk Kawasan</th>
                                                                    <td>31 Desember 2021</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Keluar Kawasan</th>
                                                                    <td>06 Januari 2022</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Masuk Kawasan</th>
                                                                    <td>01 Januari 2022 | 08:00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Keluar Kawasan</th>
                                                                    <td>05 Januari 2022 | 15:00</td>
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-sim-kawasan" data-dismiss="modal">Close</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">8</td>
                                            <td class="text-center">SALAM-89108</td>
                                            <td class="text-center">Wawan</td>
                                            <td class="text-center">KKPD Kendawangan</td>
                                            <td class="text-center">Penelitian</td>
                                            <td class="text-center">
                                                <!-- <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a> -->
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-3" data-toggle="modal" data-target="#detailKunjungan">
                                                    Lihat Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Kunjungan Pengunjung: #SALAM-89108
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>
                                                                        Nama Pengunjung
                                                                    </th>
                                                                    <td>
                                                                        Wawan
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        Kawasan Tujuan
                                                                    </th>
                                                                    <td>
                                                                        KKPD Kendawangan
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tujuan Masuk Kawasan</th>
                                                                    <td>Penelitian</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Admin Lapangan</th>
                                                                    <td>Suwandi</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Masuk Kawasan</th>
                                                                    <td>31 Desember 2021</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Keluar Kawasan</th>
                                                                    <td>06 Januari 2022</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Masuk Kawasan</th>
                                                                    <td>01 Januari 2022 | 08:00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Keluar Kawasan</th>
                                                                    <td>05 Januari 2022 | 15:00</td>
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-sim-kawasan" data-dismiss="modal">Close</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">9</td>
                                            <td class="text-center">SALAM-89107</td>
                                            <td class="text-center">Gusti</td>
                                            <td class="text-center">KKPD Kayong Utara</td>
                                            <td class="text-center">Pariwisata</td>
                                            <td class="text-center">
                                                <!-- <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a> -->
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-3" data-toggle="modal" data-target="#detailKunjungan">
                                                    Lihat Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Kunjungan Pengunjung: #SALAM-89107
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>
                                                                        Nama Pengunjung
                                                                    </th>
                                                                    <td>
                                                                        Gusti
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        Kawasan Tujuan
                                                                    </th>
                                                                    <td>
                                                                        KKPD Kayong Utara
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tujuan Masuk Kawasan</th>
                                                                    <td>Pariwisata</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Admin Lapangan</th>
                                                                    <td>Mahmudin</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Masuk Kawasan</th>
                                                                    <td>31 Desember 2021</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Keluar Kawasan</th>
                                                                    <td>06 Januari 2022</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Masuk Kawasan</th>
                                                                    <td>01 Januari 2022 | 08:00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Keluar Kawasan</th>
                                                                    <td>05 Januari 2022 | 15:00</td>
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-sim-kawasan" data-dismiss="modal">Close</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">10</td>
                                            <td class="text-center">SALAM-89106</td>
                                            <td class="text-center">Chiko Jeriko</td>
                                            <td class="text-center">KKPD Kayong Utara</td>
                                            <td class="text-center">Pariwisata</td>
                                            <td class="text-center">
                                                <!-- <a href="../super-admin/dashboardDetailUnggahSurat.html" class="btn btn-sim-kawasan mt-auto px-4">Unduh</a> -->
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-3" data-toggle="modal" data-target="#detailKunjungan">
                                                    Lihat Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Kunjungan Pengunjung: #SALAM-89106
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>
                                                                        Nama Pengunjung
                                                                    </th>
                                                                    <td>
                                                                       Chiko Jeriko
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        Kawasan Tujuan
                                                                    </th>
                                                                    <td>
                                                                        KKPD Kayong Utara
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tujuan Masuk Kawasan</th>
                                                                    <td>Pariwisata</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Admin Lapangan</th>
                                                                    <td>Mahmudin</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Masuk Kawasan</th>
                                                                    <td>31 Desember 2021</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rencana Keluar Kawasan</th>
                                                                    <td>06 Januari 2022</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Masuk Kawasan</th>
                                                                    <td>01 Januari 2022 | 08:00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Keluar Kawasan</th>
                                                                    <td>05 Januari 2022 | 15:00</td>
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-sim-kawasan" data-dismiss="modal">Close</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
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