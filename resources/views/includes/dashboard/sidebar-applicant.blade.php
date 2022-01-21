<div class="border-right sidebar-dashboard" id="sidebar-wrapper">
    <!-- Gambar/Logo Sidebar -->
    <div class="sidebar-heading text-center">
        <a href="{{ route('home') }}">
            <img src="{{ url('frontend/images/dashboard/dashboard_ic.svg') }}" alt="" class="my-4">
        </a>
    </div>
    <!-- Menu Sidebar -->
    <div class="list-group list-group-flush">
        <a href="{{ route('dashboardApplicant') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/applicant') ? 'active' : '' }}">
            Dashboard
        </a>
        <a href="{{ route('dashboardSubmission') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/applicant/submission*') ? 'active' : '' }}">
            Pengajuan Izin Masuk
        </a>
        <a href="{{ route('dashboardPayment') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/applicant/payment*') ? 'active' : '' }}">
            Pembayaran Retribusi
        </a>
        <a href="{{ route('areaEntryPermit') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/applicant/area-entry*') ? 'active' : '' }}">
            Surat Izin Masuk
        </a>
        <a href="{{ route('settingAccountApplicant') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/applicant/profile*') ? 'active' : '' }}">
            Pengaturan Akun
        </a>
        <a href="{{ route('logout') }}" class="list-group-item list-group-item-action mt-5" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Keluar
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>