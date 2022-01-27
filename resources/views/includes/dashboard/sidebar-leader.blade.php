<!-- 1. Sidebar -->
<div class="border-right sidebar-dashboard" id="sidebar-wrapper">
    <!-- Gambar/Logo Sidebar -->
    <div class="sidebar-heading text-center">
        <a href="../indexAuthUser.html">
            <img src="{{ url('frontend/images/dashboard/dashboard_ic.svg') }}" alt="" class="my-4">
        </a>
    </div>
    <!-- Menu Sidebar -->
    <div class="list-group list-group-flush">
        <a href="{{ route('LeaderdashboardLeader') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/leader') ? 'active' : '' }}">
            Dashboard
        </a>
        <a href="{{ route('LeaderdashboardLeaderSubmission') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/leader/submission*') ? 'active' : '' }}">
            Pengajuan Izin Masuk
        </a>
        <a href="{{ route('LeaderdashboardLeaderPayment') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/leader/payment*') ? 'active' : '' }}">
            Pembayaran Retribusi
        </a>
        <a href="{{ route('LeaderareaEntryLeader') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/leader/area-entry*') ? 'active' : '' }}">
            Surat Izin Masuk
        </a>
        <a href="{{ route('LeadermonthlySubmissionSummary') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/leader/monthly-submission*') ? 'active' : '' }}">
            Rekapan Pengajuan Bulanan
        </a>
        <a href="{{ route('LeaderuserAspirationLeader') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/leader/user-aspiration*') ? 'active' : '' }}">
            Form Kepuasan & Kekurangan
        </a>
        <a href="{{ route('LeaderleaderVisitorControl') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/leader/leader-visitor-control*') ? 'active' : '' }}">
            Data Keluar Masuk Pengunjung
        </a>
        <a href="{{ route('LeadersettingAccountLeader') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard/leader/profile*') ? 'active' : '' }}">
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