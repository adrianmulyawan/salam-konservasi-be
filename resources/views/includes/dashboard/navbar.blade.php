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
            @if (Auth::user()->role == 'superadmin')
                <!-- Profile Picture & Notif: Desktop -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                    <!-- Notif -->
                    <li class="nav-item dropdown notification-content">
                        <a href="#" class="nav-link d-inline-block mt-2" id="notificationDropdown" role="button" data-toggle="dropdown">
                            <img src="{{ url('frontend/images/ic_notif.png') }}" alt="" height="24">
                            <div class="notification">4</div>
                        </a>
                        <div class="dropdown-menu text-center p-2">
                            <div class="card p-2">
                                <a href="#" class="d-flex text-primary">
                                    <i class="fas fa-check my-auto mr-2"></i>
                                    <p class="my-auto">Pengajuan Anda Telah Disetujui</p>
                                </a>
                            </div>
                            <div class="card p-2">
                                <a href="#" class="d-flex text-primary">
                                    <i class="fas fa-check my-auto mr-2"></i>
                                    <p class="my-auto">Pengajuan Anda Telah Disetujui</p>
                                </a>
                            </div>
                            <div class="card p-2">
                                <a href="#" class="d-flex text-danger">
                                    <i class="fas fa-times my-auto mr-2"></i>
                                    <p class="my-auto">Pengajuan Anda Ditolak</p>
                                </a>
                            </div>
                            <div class="card p-2">
                                <a href="#" class="d-flex text-primary">
                                    <i class="fas fa-check my-auto mr-2"></i>
                                    <p class="my-auto">Surat Izin Masuk Telah Terbit</p>
                                </a>
                            </div>
                        </div>
                    </li>
                    <!-- Nav User -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                            <img src="{{ url('frontend/images/ic_profile.png') }}" alt="" class="rounded-circle mr-2 profile-picture">
                            Hi, {{ \Illuminate\Support\Str::of(Auth::user()->name)->words(1, '') }}
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('home') }}" class="dropdown-item">
                                Halaman Utama
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('AdminsettingAccountAdmin') }}" class="dropdown-item">Pengaturan Akun</a>
                            <a href="{{ route('AdminsettingPasswordAdmin') }}" class="dropdown-item">Ubah Password</a>
                        </div>
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
            @elseif (Auth::user()->role == 'leader')
            @elseif (Auth::user()->role == 'fieldadmin')
            @elseif (Auth::user()->role == 'applicant')
                <!-- Profile Picture & Notif: Desktop -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                    <!-- Notif -->
                    <li class="nav-item dropdown notification-content">
                        <a href="#" class="nav-link d-inline-block mt-2" id="notificationDropdown" role="button" data-toggle="dropdown">
                            <img src="{{ url('frontend/images/ic_notif.png') }}" alt="" height="24">
                            <div class="notification">4</div>
                        </a>
                        <div class="dropdown-menu text-center p-2">
                            <div class="card p-2">
                                <a href="#" class="d-flex text-primary">
                                    <i class="fas fa-check my-auto mr-2"></i>
                                    <p class="my-auto">Pengajuan Anda Telah Disetujui</p>
                                </a>
                            </div>
                            <div class="card p-2">
                                <a href="#" class="d-flex text-primary">
                                    <i class="fas fa-check my-auto mr-2"></i>
                                    <p class="my-auto">Pengajuan Anda Telah Disetujui</p>
                                </a>
                            </div>
                            <div class="card p-2">
                                <a href="#" class="d-flex text-danger">
                                    <i class="fas fa-times my-auto mr-2"></i>
                                    <p class="my-auto">Pengajuan Anda Ditolak</p>
                                </a>
                            </div>
                            <div class="card p-2">
                                <a href="#" class="d-flex text-primary">
                                    <i class="fas fa-check my-auto mr-2"></i>
                                    <p class="my-auto">Surat Izin Masuk Telah Terbit</p>
                                </a>
                            </div>
                        </div>
                    </li>
                    <!-- Nav User -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                            <img src="{{ url('frontend/images/ic_profile.png') }}" alt="" class="rounded-circle mr-2 profile-picture">
                            Hi, {{ \Illuminate\Support\Str::of(Auth::user()->name)->words(1, '') }}
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('home') }}" class="dropdown-item">
                                Halaman Utama
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('settingAccountApplicant') }}" class="dropdown-item">Pengaturan Akun</a>
                            <a href="#" class="dropdown-item">Ubah Password</a>
                        </div>
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
            @endif
        </div>
    </div>
</nav>