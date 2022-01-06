@extends('layouts.dashboard-superAdmin')

@section('title', 'Edit Data Kawasan Konservasi')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Kawasan Konservasi</h2>
                <p class="dashboard-subtitle">
                    Ubah Data Kawasan Konservasi
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
                        <form action="{{ route('Adminmanage-conservation-area.update', $data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card card-edit-profile">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName">
                                            Nama Kawasan
                                        </label>
                                        <input type="text" name="name" value="{{ $data->name }}" class="form-control" id="inputName" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputLokasi">
                                            Lokasi Kawasan
                                        </label>
                                        <input type="text" name="location" value="{{ $data->location }}" class="form-control" id="inputLokasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputTentang">
                                            Tentang Kawasan
                                        </label>
                                        <textarea class="form-control" name="description" id="inputTentang" rows="4">
                                            {{ $data->description }}
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputLuas">
                                            Luas Kawasan
                                        </label>
                                        <input type="text" name="area" value="{{ $data->area }}" class="form-control" id="inputLuas">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPeta">
                                            Peta Kawasan
                                        </label>
                                        <div class="custom-file">
                                            <input type="file" name="map" value="{{ $data->map }}" class="custom-file-input" id="inputPeta">
                                            <label class="custom-file-label" for="inputPeta">{{ $data->map }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPenginapan">Tempat Penginapan</label>
                                        <select class="form-control" id="inputPenginapan" name="is_homestay">
                                          <option selected disabled>
                                              @if ($data->is_homestay == 1)
                                                  Tersedia
                                              @else
                                                  Tidak
                                              @endif
                                          </option>
                                          <option value="1">Tersedia</option>
                                          <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputResto">Tempat Makan</label>
                                        <select class="form-control" id="inputResto" name="is_resto">
                                          <option selected disabled>
                                            @if ($data->is_resto == 1)
                                                Tersedia
                                            @else
                                                Tidak
                                            @endif
                                          </option>
                                          <option value="1">Tersedia</option>
                                          <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputStatus">Status Kawasan</label>
                                        <select class="form-control" id="inputStatus" name="is_open">
                                          <option selected disabled>
                                            @if ($data->is_open == 1)
                                                Buka
                                            @else
                                                Tutup
                                            @endif
                                          </option>
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