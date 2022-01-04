@extends('layouts.dashboard-superAdmin')

@section('title', 'Ubah Data Tarif Masuk Kawasan')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Tarif Masuk Kawasan Konservasi</h2>
                <p class="dashboard-subtitle">
                    Ubah Data Tarif Masuk Kawasan Konservasi
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
                        <form action="{{ route('Adminentrance-fee.update', $data->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card card-edit-profile">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputTujuan">Tujuan Masuk Kawasan Konservasi</label>
                                        <select class="form-control" id="inputTujuan" name="purpose_id">
                                          <option selected disabled value="{{ $data->purpose_id }}">Jangan Diubah (Bila Tidak Ingin Edit Data)</option>
                                          @foreach ($purposes as $purpose)
                                              <option value="{{ $purpose->id }}">{{ $purpose->purpose_name }}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputKebangsaan">Kebangsaan</label>
                                        <select class="form-control" id="inputKebangsaan" name="citizen" {{ old('citizen') }}>
                                          <option selected disabled value="{{ $data->citizen }}">Jangan Diubah (Bila Tidak Ingin Edit Data)</option>
                                          <option value="WNI">WNI</option>
                                          <option value="WNA">WNA</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Tarif Masuk Kawasan/Hari</label>
                                        <input type="text" class="form-control" id="price" name="price" value="{{ $data->price }}" placeholder="Masukan Harga Tarif Masuk Kawasan">
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