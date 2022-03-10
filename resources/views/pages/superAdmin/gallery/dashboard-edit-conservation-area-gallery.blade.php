@extends('layouts.dashboard-superAdmin')

@section('title', 'Edit Data Galeri Kawasan Konservasi')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Galeri Kawasan Konservasi</h2>
                <p class="dashboard-subtitle">
                    Ubah Data Galeri Kawasan Konservasi
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
                        <form action="{{ route('Adminmanage-gallery.update', $data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card card-edit-profile">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputKawasan">Nama Kawasan</label>
                                        <select class="form-control" id="inputKawasan" name="conservation_area_id" required>
                                          <option value="{{ $data->conservation_area_id }}" selected disabled>Jangan Diubah (Bila Tidak Ingin Edit Data)</option>
                                          @foreach ($conservation_areas as $conservation)
                                            <option value="{{ $conservation->id }}">{{ $conservation->name }}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPeta">
                                            Foto Kawasan
                                        </label>
                                        <div class="custom-file">
                                            <input type="file" name="photo" class="custom-file-input" id="inputPeta" required>
                                            <label class="custom-file-label" for="inputPeta">{{ $data->photo }}</label>
                                        </div>
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