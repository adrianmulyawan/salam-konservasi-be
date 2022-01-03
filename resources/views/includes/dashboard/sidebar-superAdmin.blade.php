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
        <a href="{{ route('AdmindashboardAdmin') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/admin') ? 'active' : '' }}">
            Dashboard
        </a>
        <a href="{{ route('Adminmanage-conservation-area.index') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/admin/manage-conservation-area*') ? 'active' : '' }}">
            Kelola Kawasan Konservasi
        </a>
        <a href="{{ route('Adminmanage-gallery.index') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/admin/manage-gallery*') ? 'active' : '' }}">
            Kelola Gallery Kawasan
        </a>
        <a href="{{ route('Adminmanage-news.index') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/admin/manage-news*') ? 'active' : '' }}">
            Kelola Berita Kawasan
        </a>
        <a href="{{ route('Adminmanage-event.index') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/admin/manage-event*') ? 'active' : '' }}">
            Kelola Acara Kawasan
        </a>
        <a href="{{ route('Admindestination-entry.index') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/admin/destination-entry*') ? 'active' : '' }}">
            Kelola Tujuan Masuk Kawasan
        </a>
        <a href="{{ route('Adminentrance-fee.index') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/admin/entrance-fee*') ? 'active' : '' }}">
            Kelola Tarif Masuk Kawasan
        </a>
        <a href="{{ route('Adminvisitor-equipment.index') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/admin/visitor-equipment*') ? 'active' : '' }}">
            Kelola Peralatan Pengunjung
        </a>
        <a href="{{ route('Adminmanage-user.index') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/admin/manage-user*') ? 'active' : '' }}">
            Kelola User
        </a>
        <a href="{{ route('AdminmanageSubmission') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/admin/manage-submission*') ? 'active' : '' }}">
            Pengajuan Izin Masuk
        </a>
        <a href="{{ route('AdminmanageTransaction') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/admin/manage-transaction*') ? 'active' : '' }}">
            Pembayaran Retribusi
        </a>
        <a href="{{ route('AdminmanageEntryPermit') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/admin/manage-entry-permit*') ? 'active' : '' }}">
            Kelola Surat Izin Masuk
        </a>
        <a href="{{ route('AdminentryPermit') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/admin/entry-permit*') ? 'active' : '' }}">
            Surat Izin Masuk
        </a>
        <a href="{{ route('AdminuserAspirationAdmin') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/admin/user-aspiration*') ? 'active' : '' }}">
            Form Kepuasan & Kekurangan
        </a>
        <a href="{{ route('AdminvisitorControlAdmin') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/admin/visitor-control*') ? 'active' : '' }}">
            Data Keluar Masuk Pengunjung
        </a>
        <a href="{{ route('AdminsettingAccountAdmin') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/admin/admin-setting-account*') ? 'active' : '' }}">
            Pengaturan Akun
        </a>
        <a href="#" class="list-group-item list-group-item-action mt-5">
            Keluar
        </a>
    </div>
</div>