@extends('layouts.dashboard-leader')

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
                        <div class="card card-edit-profile">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">
                                        Nama
                                    </label>
                                    <input type="text" name="nama" class="form-control" id="inputName" value="{{ $item->name }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">
                                        Email
                                    </label>
                                    <input type="email" name="email" class="form-control" id="inputEmail" value="{{ $item->email }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone">
                                        No Telpon
                                    </label>
                                    <input type="text" name="no_telpon" class="form-control" id="inputPhone" value="{{ $item->phone_number }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="inputJudul">
                                        Judul Pesan
                                    </label>
                                    <input type="text" name="judul" class="form-control" id="inputJudul" value="{{ $item->form_title }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="isiPesan">Isi Pesan</label>
                                    <textarea class="form-control" name="isi_pesan" id="isiPesan" rows="3" value="{{ trim($item->form_content) }}" disabled>
                                        {{ trim($item->form_content) }}
                                    </textarea>
                                </div>
                                <a href="{{ route('LeaderuserAspirationLeader') }}" class="btn btn-close mt-auto px-5">Tutup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection