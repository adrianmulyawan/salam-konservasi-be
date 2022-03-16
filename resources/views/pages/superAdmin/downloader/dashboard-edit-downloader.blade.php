@extends('layouts.dashboard-superAdmin')

@section('title', 'Edit Data Kawasan Konservasi')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Unduhan</h2>
                <p class="dashboard-subtitle">
                    Edit Data Unduhan
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
                        <form action="{{ route('Adminmanage-downloader.update', $data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card card-edit-profile">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputTitle">
                                           Judul Unduhan
                                        </label>
                                        <input type="text" name="title" value="{{ $data->title }}" class="form-control" id="inputTitle" placeholder="Masukan Nama Judul Unduhan" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">
                                            Tentang Kawasan
                                        </label>
                                        <textarea name="description" class="form-control" id="inputDescription" placeholder="Masukan Deskripsi" required>
                                            {{ $data->description }}
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputLink">
                                            Luas Kawasan
                                        </label>
                                        <input type="text" name="link" value="{{ $data->link }}" class="form-control" id="inputLink" placeholder="Masukan link" required>
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