@extends('layouts.dashboard-superAdmin')

@section('title', 'Edit Data Acara Kawasan')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Berita Kawasan Konservasi</h2>
                <p class="dashboard-subtitle">
                    Ubah Data Berita Mengenai Kabar Terkini di Kawasan Konservasi
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
                        <form action="{{ route('Adminmanage-event.update', $data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card card-edit-profile">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputFoto">
                                            Foto Acara
                                        </label>
                                        <div class="custom-file">
                                            <input type="file" name="photo" class="custom-file-input" id="inputFoto" value="{{ $data->photo }}">
                                            <label class="custom-file-label" for="inputFoto">{{ $data->photo }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputJudulAcara">Judul Acara</label>
                                        <input type="text" name="title" class="form-control" id="inputJudulAcara" value="{{ $data->title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="InputTanggal">
                                            Tanggal Masuk
                                        </label>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="date" class="form-control" id="event_date" name="tanggal_masuk" value="{{ $data->event_date }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputKawasan">Tambah Lokasi Event</label>
                                        <select class="form-control" id="inputKawasan" name="conservation_area_id">
                                          <option selected disabled value="{{ $data->conservation_area_id }}">Jangan Diubah Bila Tidak Ingin Diedit</option>
                                          @foreach ($conservation_areas as $conservation)
                                            <option value="{{ $conservation->id }}">{{ $conservation->name }}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputIsiAcara">Isi Acara</label>
                                        <textarea class="form-control" name="event_content" id="inputIsiAcara" rows="3">
                                            {{ $data->event_content }}
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
        CKEDITOR.replace( 'event_content' );
    </script>
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Gijgo
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/calendar_icon.png') }}" height="19">'
                }
            });
        });
    </script>
@endpush