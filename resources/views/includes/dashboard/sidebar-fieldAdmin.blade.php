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
        <a href="{{ route('dashboardFieldAdmin') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/fieldAdmin/visit*') ? 'active' : '' }}">
            Kelola Data Pengunjung
        </a>
        <a href="{{ route('visitorCheckout') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/fieldAdmin/data-visitor-checkout*') ? 'active' : '' }}">
            Data Keluar Masuk Pengunjung
        </a>
        <a href="{{ route('settingAccountFieldAdmin') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/fieldAdmin/profile*') ? 'active' : '' }}">
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