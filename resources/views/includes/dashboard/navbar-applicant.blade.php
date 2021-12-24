<nav class="navbar navbar-expand-lg navbar-light navbar-conservation-dashboard fixed-top" data-aos="fade-down">
    <div class="container-fluid">
        <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
            &laquo; Menu
        </button>
        <!-- Navbar Humberger -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu-menu -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Profile Picture & Notif: Desktop -->
            <ul class="navbar-nav d-none d-lg-flex ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <img src="{{ url('frontend/images/ic_profile.png') }}" alt="" class="rounded-circle mr-2 profile-picture">
                        Hi, Adrian
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">
                            Halaman Utama
                        </a>
                        <a href="dashboardSetting.html" class="dropdown-item">Pengaturan Akun</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Logout</a>
                    </div>
                </li>
                <!-- Notif -->
                <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block mt-2">
                        <img src="{{ url('frontend/images/ic_notif.png') }}" alt="" height="24">
                        <div class="notification">4</div>
                    </a>
                </li>
            </ul>

            <!-- Profile Picture & Notif: Mobile Menu -->
            <ul class="navbar-nav d-block d-lg-none">
                <li class="nav-item">
                    <a href="#" class="nav-link">
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
    </div>
</nav>