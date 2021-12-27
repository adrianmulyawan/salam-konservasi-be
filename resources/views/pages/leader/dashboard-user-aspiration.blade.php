@extends('layouts.dashboard-leader')

@section('title', 'Rekapan Pengajuan Bulanan')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Formulir Kepuasaan & Kekurangan Layanan / Sistem</h2>
                <p class="dashboard-subtitle">
                    Daftar Kritik, Saran Dari Pengunjung Sistem atau Kawasan Konservasi
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
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Judul Pesan</th>
                                            <th class="text-center">Isi Pesan</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Rachel Venya</td>
                                            <td>Penjaga Kawasan Tidak Ramah</td>
                                            <td>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis neque odio quo repellat obcaecati.
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-4" data-toggle="modal" data-target="#detailKunjungan">
                                                    Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Formulir: Rachel Venya
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <td>Rachel Venya</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Email</th>
                                                                    <td>rachelsisopan@gmail.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>No Handphone</th>
                                                                    <td>081240000000</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Judul Pesan</th>
                                                                    <td>
                                                                        Penjaga Kawasan Tidak Ramah
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Detail Keluhan / Isi Pesan</th>
                                                                    <td>
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit hic optio animi, odit numquam earum id dolorum incidunt, porro, itaque dolor nobis. Provident, quibusdam? Exercitationem sed esse voluptatum accusamus. Enim dolores commodi harum voluptas ad repudiandae laboriosam molestias? Laboriosam laudantium voluptate hic accusamus quibusdam magnam maiores vitae, reprehenderit molestiae accusantium.
                                                                    </td>
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
                                            <td class="text-center">Muhammad Hakaman Athhar</td>
                                            <td>Penjaga Kawasan Tidak Ramah</td>
                                            <td>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis neque odio quo repellat obcaecati.
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-4" data-toggle="modal" data-target="#detailKunjungan">
                                                    Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Formulir: Rachel Venya
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <td>Rachel Venya</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Email</th>
                                                                    <td>rachelsisopan@gmail.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>No Handphone</th>
                                                                    <td>081240000000</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Judul Pesan</th>
                                                                    <td>
                                                                        Penjaga Kawasan Tidak Ramah
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Detail Keluhan / Isi Pesan</th>
                                                                    <td>
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit hic optio animi, odit numquam earum id dolorum incidunt, porro, itaque dolor nobis. Provident, quibusdam? Exercitationem sed esse voluptatum accusamus. Enim dolores commodi harum voluptas ad repudiandae laboriosam molestias? Laboriosam laudantium voluptate hic accusamus quibusdam magnam maiores vitae, reprehenderit molestiae accusantium.
                                                                    </td>
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
                                            <td class="text-center">Revianto</td>
                                            <td>Penjaga Kawasan Tidak Ramah</td>
                                            <td>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis neque odio quo repellat obcaecati.
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-4" data-toggle="modal" data-target="#detailKunjungan">
                                                    Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Formulir: Rachel Venya
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <td>Rachel Venya</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Email</th>
                                                                    <td>rachelsisopan@gmail.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>No Handphone</th>
                                                                    <td>081240000000</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Judul Pesan</th>
                                                                    <td>
                                                                        Penjaga Kawasan Tidak Ramah
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Detail Keluhan / Isi Pesan</th>
                                                                    <td>
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit hic optio animi, odit numquam earum id dolorum incidunt, porro, itaque dolor nobis. Provident, quibusdam? Exercitationem sed esse voluptatum accusamus. Enim dolores commodi harum voluptas ad repudiandae laboriosam molestias? Laboriosam laudantium voluptate hic accusamus quibusdam magnam maiores vitae, reprehenderit molestiae accusantium.
                                                                    </td>
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
                                            <td class="text-center">Badrul</td>
                                            <td>Penjaga Kawasan Tidak Ramah</td>
                                            <td>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis neque odio quo repellat obcaecati.
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-4" data-toggle="modal" data-target="#detailKunjungan">
                                                    Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Formulir: Rachel Venya
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <td>Rachel Venya</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Email</th>
                                                                    <td>rachelsisopan@gmail.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>No Handphone</th>
                                                                    <td>081240000000</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Judul Pesan</th>
                                                                    <td>
                                                                        Penjaga Kawasan Tidak Ramah
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Detail Keluhan / Isi Pesan</th>
                                                                    <td>
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit hic optio animi, odit numquam earum id dolorum incidunt, porro, itaque dolor nobis. Provident, quibusdam? Exercitationem sed esse voluptatum accusamus. Enim dolores commodi harum voluptas ad repudiandae laboriosam molestias? Laboriosam laudantium voluptate hic accusamus quibusdam magnam maiores vitae, reprehenderit molestiae accusantium.
                                                                    </td>
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
                                            <td class="text-center">Maman Abdurahman</td>
                                            <td>Penjaga Kawasan Tidak Ramah</td>
                                            <td>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis neque odio quo repellat obcaecati.
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-4" data-toggle="modal" data-target="#detailKunjungan">
                                                    Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Formulir: Rachel Venya
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <td>Rachel Venya</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Email</th>
                                                                    <td>rachelsisopan@gmail.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>No Handphone</th>
                                                                    <td>081240000000</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Judul Pesan</th>
                                                                    <td>
                                                                        Penjaga Kawasan Tidak Ramah
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Detail Keluhan / Isi Pesan</th>
                                                                    <td>
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit hic optio animi, odit numquam earum id dolorum incidunt, porro, itaque dolor nobis. Provident, quibusdam? Exercitationem sed esse voluptatum accusamus. Enim dolores commodi harum voluptas ad repudiandae laboriosam molestias? Laboriosam laudantium voluptate hic accusamus quibusdam magnam maiores vitae, reprehenderit molestiae accusantium.
                                                                    </td>
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
                                            <td class="text-center">Adrian Mulyawan</td>
                                            <td>Penjaga Kawasan Tidak Ramah</td>
                                            <td>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis neque odio quo repellat obcaecati.
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-4" data-toggle="modal" data-target="#detailKunjungan">
                                                    Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Formulir: Rachel Venya
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <td>Rachel Venya</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Email</th>
                                                                    <td>rachelsisopan@gmail.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>No Handphone</th>
                                                                    <td>081240000000</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Judul Pesan</th>
                                                                    <td>
                                                                        Penjaga Kawasan Tidak Ramah
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Detail Keluhan / Isi Pesan</th>
                                                                    <td>
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit hic optio animi, odit numquam earum id dolorum incidunt, porro, itaque dolor nobis. Provident, quibusdam? Exercitationem sed esse voluptatum accusamus. Enim dolores commodi harum voluptas ad repudiandae laboriosam molestias? Laboriosam laudantium voluptate hic accusamus quibusdam magnam maiores vitae, reprehenderit molestiae accusantium.
                                                                    </td>
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
                                            <td class="text-center">Dhafia Raisha Kamila</td>
                                            <td>Penjaga Kawasan Tidak Ramah</td>
                                            <td>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis neque odio quo repellat obcaecati.
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-4" data-toggle="modal" data-target="#detailKunjungan">
                                                    Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Formulir: Rachel Venya
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <td>Rachel Venya</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Email</th>
                                                                    <td>rachelsisopan@gmail.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>No Handphone</th>
                                                                    <td>081240000000</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Judul Pesan</th>
                                                                    <td>
                                                                        Penjaga Kawasan Tidak Ramah
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Detail Keluhan / Isi Pesan</th>
                                                                    <td>
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit hic optio animi, odit numquam earum id dolorum incidunt, porro, itaque dolor nobis. Provident, quibusdam? Exercitationem sed esse voluptatum accusamus. Enim dolores commodi harum voluptas ad repudiandae laboriosam molestias? Laboriosam laudantium voluptate hic accusamus quibusdam magnam maiores vitae, reprehenderit molestiae accusantium.
                                                                    </td>
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
                                            <td class="text-center">Wawan</td>
                                            <td>Penjaga Kawasan Tidak Ramah</td>
                                            <td>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis neque odio quo repellat obcaecati.
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-4" data-toggle="modal" data-target="#detailKunjungan">
                                                    Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Formulir: Rachel Venya
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <td>Rachel Venya</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Email</th>
                                                                    <td>rachelsisopan@gmail.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>No Handphone</th>
                                                                    <td>081240000000</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Judul Pesan</th>
                                                                    <td>
                                                                        Penjaga Kawasan Tidak Ramah
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Detail Keluhan / Isi Pesan</th>
                                                                    <td>
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit hic optio animi, odit numquam earum id dolorum incidunt, porro, itaque dolor nobis. Provident, quibusdam? Exercitationem sed esse voluptatum accusamus. Enim dolores commodi harum voluptas ad repudiandae laboriosam molestias? Laboriosam laudantium voluptate hic accusamus quibusdam magnam maiores vitae, reprehenderit molestiae accusantium.
                                                                    </td>
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
                                            <td class="text-center">Gusti</td>
                                            <td>Penjaga Kawasan Tidak Ramah</td>
                                            <td>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis neque odio quo repellat obcaecati.
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-4" data-toggle="modal" data-target="#detailKunjungan">
                                                    Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Formulir: Rachel Venya
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <td>Rachel Venya</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Email</th>
                                                                    <td>rachelsisopan@gmail.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>No Handphone</th>
                                                                    <td>081240000000</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Judul Pesan</th>
                                                                    <td>
                                                                        Penjaga Kawasan Tidak Ramah
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Detail Keluhan / Isi Pesan</th>
                                                                    <td>
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit hic optio animi, odit numquam earum id dolorum incidunt, porro, itaque dolor nobis. Provident, quibusdam? Exercitationem sed esse voluptatum accusamus. Enim dolores commodi harum voluptas ad repudiandae laboriosam molestias? Laboriosam laudantium voluptate hic accusamus quibusdam magnam maiores vitae, reprehenderit molestiae accusantium.
                                                                    </td>
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
                                            <td class="text-center">Chiko Jeriko</td>
                                            <td>Penjaga Kawasan Tidak Ramah</td>
                                            <td>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis neque odio quo repellat obcaecati.
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sim-kawasan mt-auto px-4" data-toggle="modal" data-target="#detailKunjungan">
                                                    Detail
                                                </button>
                                                <div class="modal fade" id="detailKunjungan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKunjunganLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="detailKunjunganLabel">
                                                            Detail Formulir: Rachel Venya
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <td>Rachel Venya</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Email</th>
                                                                    <td>rachelsisopan@gmail.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>No Handphone</th>
                                                                    <td>081240000000</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Judul Pesan</th>
                                                                    <td>
                                                                        Penjaga Kawasan Tidak Ramah
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Detail Keluhan / Isi Pesan</th>
                                                                    <td>
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit hic optio animi, odit numquam earum id dolorum incidunt, porro, itaque dolor nobis. Provident, quibusdam? Exercitationem sed esse voluptatum accusamus. Enim dolores commodi harum voluptas ad repudiandae laboriosam molestias? Laboriosam laudantium voluptate hic accusamus quibusdam magnam maiores vitae, reprehenderit molestiae accusantium.
                                                                    </td>
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