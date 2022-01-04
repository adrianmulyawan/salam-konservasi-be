@extends('layouts.dashboard-superAdmin')

@section('title', 'Tambah Data Kawasan Konservasi')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Kawasan Konservasi</h2>
                <p class="dashboard-subtitle">
                    Tambah Data Kawasan Konservasi
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        {{-- Tambahkan Error Handling --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('Adminmanage-conservation-area.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card card-edit-profile">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName">
                                            Nama Kawasan
                                        </label>
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="inputName" placeholder="Masukan Nama Kawasan" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputLokasi">
                                            Lokasi Kawasan
                                        </label>
                                        <input type="text" name="location" value="{{ old('location') }}" class="form-control" id="inputLokasi" placeholder="Masukan Lokasi Kawasan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputTentang">
                                            Tentang Kawasan
                                        </label>
                                        <textarea type="text" name="description" value="{{ old('description') }}" class="form-control" id="inputTentang" placeholder="Masukan Tentang Kawasan" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputLuas">
                                            Luas Kawasan
                                        </label>
                                        <input type="text" name="area" value="{{ old('area') }}" class="form-control" id="inputLuas" placeholder="Masukan Lokasi Kawasan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPeta">
                                            Peta Kawasan
                                        </label>
                                        <div class="custom-file">
                                            <input type="file" name="map" value="{{ old('map') }}" class="custom-file-input" id="inputPeta" required>
                                            <label class="custom-file-label" for="inputPeta">Masukan Peta Kawasan</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPenginapan">Tempat Penginapan</label>
                                        <select class="form-control" id="inputPenginapan" name="is_homestay" required>
                                          <option selected disabled>Pilih Tempat Penginapan (Tersedia/Tidak)</option>
                                          <option value="1">Tersedia</option>
                                          <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputResto">Tempat Makan</label>
                                        <select class="form-control" id="inputResto" name="is_resto" required>
                                          <option selected disabled>Pilih Tempat Makan (Tersedia/Tidak)</option>
                                          <option value="1">Tersedia</option>
                                          <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputStatus">Status Kawasan</label>
                                        <select class="form-control" id="inputStatus" name="is_open" required>
                                          <option selected disabled>Pilih Status Kawasan (Buka/Tutup)</option>
                                          <option value="1">Buka</option>
                                          <option value="0">Tutup</option>
                                        </select>
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

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
@endpush