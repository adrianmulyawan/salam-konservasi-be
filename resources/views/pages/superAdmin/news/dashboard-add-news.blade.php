@extends('layouts.dashboard-superAdmin')

@section('title', 'Tambah Data Berita Kawasan')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Berita Kawasan Konservasi</h2>
                <p class="dashboard-subtitle">
                    Tambah Data Berita Mengenai Kabar Terkini di Kawasan Konservasi
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
                        <form action="{{ route('Adminmanage-news.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card card-edit-profile">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputFoto">
                                            Foto Berita
                                        </label>
                                        <div class="custom-file">
                                            <input type="file" name="photo" class="custom-file-input" value="{{ old('photo') }}" id="inputFoto" required>
                                            <label class="custom-file-label" for="inputFoto">Masukan Foto Berita</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputJudulBerita">Judul Berita</label>
                                        <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="inputJudulBerita" placeholder="Masukan Judul Berita">
                                    </div>
                                    <div class="form-group">
                                        <label for="isi_berita">Masukan Isi Berita</label>
                                        <textarea class="form-control" name="news_content" id="isi_berita" rows="3" placeholder="Masukan Isi Berita">
                                            {{ old('news_content') }}
                                        </textarea>
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
        CKEDITOR.replace( 'isi_berita' );
    </script>
@endpush