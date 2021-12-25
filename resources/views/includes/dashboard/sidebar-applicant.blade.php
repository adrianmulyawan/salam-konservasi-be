<div class="border-right sidebar-dashboard" id="sidebar-wrapper">
    <!-- Gambar/Logo Sidebar -->
    <div class="sidebar-heading text-center">
        <a href="{{ route('home') }}">
            <img src="{{ url('frontend/images/dashboard/dashboard_ic.svg') }}" alt="" class="my-4">
        </a>
    </div>
    <!-- Menu Sidebar -->
    <div class="list-group list-group-flush">
        <a href="{{ route('dashboardApplicant') }}" class="list-group-item list-group-item-action">
            Dashboard
        </a>
        <a href="{{ route('dashboardSubmission') }}" class="list-group-item list-group-item-action">
            Pengajuan Izin Masuk
        </a>
        <a href="{{ route('dashboardPayment') }}" class="list-group-item list-group-item-action">
            Pembayaran Retribusi
        </a>
        <a href="{{ route('areaEntryPermit') }}" class="list-group-item list-group-item-action">
            Surat Izin Masuk
        </a>
        <a href="{{ route('settingAccountApplicant') }}" class="list-group-item list-group-item-action">
            Pengaturan Akun
        </a>
        <a href="#" class="list-group-item list-group-item-action mt-5">
            Keluar
        </a>
    </div>
</div>