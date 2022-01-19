@extends('layouts.dashboard-superAdmin')

@section('title', 'Dashboard Kelola Kawasan')

@section('content')
    <!-- Content -->
    <div class="section-content section-dashboard section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <!-- 1. Heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kelola Kawasan Konservasi</h2>
                <p class="dashboard-subtitle">
                    Daftar Kawsan Konservasi KKPD Kalimantan Barat
                </p>
                <div class="col-6 ml-0">
                    <p data-aos="fade-up" class="dashboard-title">
                        @include('includes.flash-message')
                    </p>
                </div>
            </div>
            <div class="dashboard-content">
                <!-- 2. Table Data Kawasan -->
                <div class="card card-conservation">
                    <!-- 2.1 Add Data Kawasan -->
                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('Adminmanage-conservation-area.create') }}" class="btn btn-add-data mt-2 px-3">
                                + Tambah Data Kawasan
                            </a>
                        </div>
                    </div>
                    <!-- 2.2 Tabel Daftar Kawasan -->
                    <div class="row mt-2">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Kawasan</th>
                                            <th class="text-center">Lokasi Kawasan</th>
                                            <th class="text-center">Status Kawasan</th>
                                            <th class="text-center">Author</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0; ?>
                                        @forelse ($items as $item)
                                            <?php $no++ ?>
                                            <tr>
                                                <tr>
                                                    <td class="text-center">{{ $no }}</td>
                                                    <td class="text-center">{{ $item->name }}</td>
                                                    <td class="text-center">{{ $item->location }}</td>
                                                    <td class="text-center">
                                                        @if ( $item->is_open == 1 )
                                                            Buka
                                                        @else
                                                            Tutup
                                                        @endif
                                                    </td>
                                                    <td class="text-center">{{ $item->user->name }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ route('Adminmanage-conservation-area.edit', $item->id) }}" class="btn btn-info mt-auto">
                                                            <i class="fa fa-pencil-alt"></i>
                                                        </a>
                                                        <form action="{{ route('Adminmanage-conservation-area.destroy', $item->id) }}" method="post" class="d-inline confirm-delete">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="text-center" colspan="6">Belum Ada Data Apapun</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="row justify-content-end mr-2">
                        {{ $items->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $('.confirm-delete').click(function () {    
            swal({
                title: "Apakah Anda Yakin?",
                text: "Data Yang Akan Dihapus Tidak Dapat Dikembalikan!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Data Berhasil Dihapus", {
                    icon: "success",
                    });
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
        });
    </script>
@endpush