@extends('layouts.dashboard-superAdmin')

@section('title', 'Dashboard Aspirasi Pengguna')

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
                                        <?php $counter = 0; ?>
                                        @forelse ($forms as $form)
                                            <?php $counter += 1 ?>
                                            <tr>
                                                <td class="text-center">{{ $counter }}</td>
                                                <td class="text-center">{{ $form->name }}</td>
                                                <td>
                                                    {{ $form->form_title }}
                                                </td>
                                                <td>
                                                    {{ Str::limit($form->form_content, 20, '...') }}
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('AdminuserAspirationDetailAdmin', $form->id) }}" class="btn btn-sim-kawasan mt-auto px-4">Detail</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="text-center" colspan="5">Belum Ada Data Apapun</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="row justify-content-end mr-1">
                        {{ $forms->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection