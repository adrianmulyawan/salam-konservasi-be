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
        <a href="{{ route('LeaderdashboardLeader') }}" class="list-group-item list-group-item-action">
            Dashboard
        </a>
        <a href="{{ route('LeaderdashboardLeaderSubmission') }}" class="list-group-item list-group-item-action">
            Pengajuan Izin Masuk
        </a>
        <a href="{{ route('LeaderdashboardLeaderPayment') }}" class="list-group-item list-group-item-action">
            Pembayaran Retribusi
        </a>
        <a href="{{ route('LeaderareaEntryLeader') }}" class="list-group-item list-group-item-action">
            Surat Izin Masuk
        </a>
        <a href="{{ route('LeadermonthlySubmissionSummary') }}" class="list-group-item list-group-item-action">
            Rekapan Pengajuan Bulanan
        </a>
        <a href="{{ route('LeaderuserAspirationLeader') }}" class="list-group-item list-group-item-action">
            Form Kepuasan & Kekurangan
        </a>
        <a href="{{ route('LeaderleaderVisitorControl') }}" class="list-group-item list-group-item-action">
            Data Keluar Masuk Pengunjung
        </a>
        <a href="{{ route('LeadersettingAccountLeader') }}" class="list-group-item list-group-item-action">
            Pengaturan Akun
        </a>
        <a href="#" class="list-group-item list-group-item-action mt-5">
            Keluar
        </a>
    </div>
</div>