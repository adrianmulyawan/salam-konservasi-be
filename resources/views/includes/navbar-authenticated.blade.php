 <!-- Navigasi -->
 <div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light navbar-conservation bg-white">
        <!-- Logo -->
        <a href="index.html" class="navbar-brand">
            <img src="frontend/images/logo-salam-konservasi.png" alt="logo-salam-konservasi">
        </a>

        <!-- Humberger Button -->
        <button class="navbar-toggler navbar-toggler-right"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu-menu -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item">
                    <a href="index.html" class="nav-link active">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="conservationArea.html" class="nav-link">Kawasan Konservasi</a>
                </li>
                <li class="nav-item">
                    <a href="news.html" class="nav-link">Berita</a>
                </li>
                <li class="nav-item">
                    <a href="events.html" class="nav-link">Acara</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">SOP</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Penggunaan Sistem</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Unduh</a>
                </li>
            </ul>
            <!-- Profile Picture & Notif: Desktop -->
            <ul class="navbar-nav d-none d-lg-flex">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <img src="frontend/images/ic_profile.png" alt="" class="rounded-circle mr-2 profile-picture">
                        Hi, Adrian
                    </a>
                    <div class="dropdown-menu">
                        <a href="pemohon/dashboard.html" class="dropdown-item">Dashboard</a>
                        <a href="#" class="dropdown-item">Pengaturan Akun</a>
                        <div class="dropdown-divider"></div>
                        <a href="index.html" class="dropdown-item">Logout</a>
                    </div>
                </li>
                <!-- Notif -->
                <li class="nav-item">
                    <a href="#" class="nav-lin d-inline-block mt-3">
                        <img src="frontend/images/ic_notif.png" alt="" height="24">
                        <div class="notification">4</div>
                    </a>
                </li>
            </ul>
            <!-- Profile Picture & Notif: Mobile Menu -->
            <ul class="navbar-nav d-block d-lg-none">
                <li class="nav-item">
                    <a href="pemohon/dashboard.html" class="nav-link">
                        Hi, Adrian
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block">
                        Notifikasi
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>