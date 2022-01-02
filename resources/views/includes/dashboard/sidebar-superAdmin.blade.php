<!-- 1. Sidebar -->
<div class="border-right sidebar-dashboard" id="sidebar-wrapper">
    <!-- Gambar/Logo Sidebar -->
    <div class="sidebar-heading text-center">
        <a href="#">
            <img src="{{ url('frontend/images/dashboard/dashboard_ic.svg') }}" alt="" class="my-4">
        </a>
    </div>
    <!-- Menu Sidebar -->
    <div class="list-group list-group-flush">
        <a href="{{ route('AdmindashboardAdmin') }}" class="list-group-item list-group-item-action">
            Dashboard
        </a>
        <a href="{{ route('Adminmanage-conservation-area.index') }}" class="list-group-item list-group-item-action">
            Kelola Kawasan Konservasi
        </a>
        <a href="{{ route('Adminmanage-conservation-area-gallery.index') }}" class="list-group-item list-group-item-action">
            Kelola Gallery Kawasan
        </a>
        <a href="{{ route('Adminmanage-news.index') }}" class="list-group-item list-group-item-action">
            Kelola Berita Kawasan
        </a>
        <a href="{{ route('Adminmanage-event.index') }}" class="list-group-item list-group-item-action">
            Kelola Acara Kawasan
        </a>
        <a href="{{ route('Admindestination-entry.index') }}" class="list-group-item list-group-item-action">
            Kelola Tujuan Masuk Kawasan
        </a>
        <a href="{{ route('Adminentrance-fee.index') }}" class="list-group-item list-group-item-action">
            Kelola Tarif Masuk Kawasan
        </a>
        <a href="{{ route('Adminvisitor-equipment.index') }}" class="list-group-item list-group-item-action">
            Kelola Peralatan Pengunjung
        </a>
        <a href="{{ route('Adminmanage-user.index') }}" class="list-group-item list-group-item-action">
            Kelola User
        </a>
        <a href="{{ route('AdminmanageSubmission') }}" class="list-group-item list-group-item-action">
            Pengajuan Izin Masuk
        </a>
        <a href="{{ route('AdminmanageTransaction') }}" class="list-group-item list-group-item-action">
            Pembayaran Retribusi
        </a>
        <a href="{{ route('AdminmanageEntryPermit') }}" class="list-group-item list-group-item-action">
            Kelola Surat Izin Masuk
        </a>
        <a href="{{ route('AdminentryPermit') }}" class="list-group-item list-group-item-action">
            Surat Izin Masuk
        </a>
        <a href="{{ route('AdminuserAspirationAdmin') }}" class="list-group-item list-group-item-action">
            Form Kepuasan & Kekurangan
        </a>
        <a href="{{ route('AdminvisitorControlAdmin') }}" class="list-group-item list-group-item-action">
            Data Keluar Masuk Pengunjung
        </a>
        <a href="{{ route('AdminsettingAccountAdmin') }}" class="list-group-item list-group-item-action">
            Pengaturan Akun
        </a>
        <a href="#" class="list-group-item list-group-item-action mt-5">
            Keluar
        </a>
    </div>
</div>