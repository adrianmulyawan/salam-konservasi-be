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
                    <!-- Notif -->
                    <li class="nav-item dropdown notification-content">
                        <a href="{{ route('AdminadminNotification') }}" class="nav-link d-inline-block mt-2" id="notificationDropdown" role="button">
                            <img src="{{ url('frontend/images/ic_notif.png') }}" alt="" height="24">
                            <div class="notification">{{ $superAdminNotif > 3 ? '3+' : $superAdminNotif }}</div>
                        </a>
                    </li>
                </ul>
                <!-- Profile Picture & Notif: Mobile Menu -->
                <ul class="navbar-nav d-block d-lg-none">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            Hi, {{ \Illuminate\Support\Str::of(Auth::user()->name)->words(1, '') }}
                        </a>
                        <a href="{{ route('AdminadminNotification') }}" class="nav-link">
                            Notifikasi
                        </a>
                    </li>
                </ul>
            @elseif (Auth::user()->role == 'leader')
                <!-- Profile Picture & Notif: Desktop -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
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
                            <a href="{{ route('LeadersettingAccountLeader') }}" class="dropdown-item">Pengaturan Akun</a>
                            <a href="{{ route('LeadersettingPasswordLeader') }}" class="dropdown-item">Ubah Password</a>
                        </div>
                    </li>
                    <!-- Notif -->
                    <li class="nav-item dropdown notification-content">
                        <a href="{{ route('LeaderleaderNotification') }}" class="nav-link d-inline-block mt-2" id="notificationDropdown">
                            <img src="{{ url('frontend/images/ic_notif.png') }}" alt="" height="24">
                            <div class="notification">{{ $leaderNotif > 3 ? '3+' : $leaderNotif }}</div>
                        </a>
                    </li>
                </ul>
                <!-- Profile Picture & Notif: Mobile Menu -->
                <ul class="navbar-nav d-block d-lg-none">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            Hi, {{ \Illuminate\Support\Str::of(Auth::user()->name)->words(1, '') }}
                        </a>
                        <a href="{{ route('LeaderleaderNotification') }}" class="nav-link">
                            Notifikasi
                        </a>
                    </li>
                </ul>
            @elseif (Auth::user()->role == 'fieldadmin')
                <!-- Profile Picture & Notif: Desktop -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
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
                            <a href="{{ route('settingAccountFieldAdmin') }}" class="dropdown-item">Pengaturan Akun</a>
                            <a href="{{ route('settingPasswordFieldAdmin') }}" class="dropdown-item">Ubah Password</a>
                        </div>
                    </li>
                </ul>
                <!-- Profile Picture & Notif: Mobile Menu -->
                <ul class="navbar-nav d-block d-lg-none">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            Hi, {{ \Illuminate\Support\Str::of(Auth::user()->name)->words(1, '') }}
                        </a>
                    </li>
                </ul>
            @elseif (Auth::user()->role == 'applicant')
                <!-- Profile Picture & Notif: Desktop -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
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
                            <a href="{{ route('settingPasswordApplicant') }}" class="dropdown-item">Ubah Password</a>
                        </div>
                    </li>
                    <!-- Notif -->
                    <li class="nav-item dropdown notification-content">
                        <a href="{{ route('applicantNotification') }}" class="nav-link d-inline-block mt-2" id="notificationDropdown">
                            <img src="{{ url('frontend/images/ic_notif.png') }}" alt="" height="24">
                            <div class="notification">{{ $applicantNotif > 3 ? '3+' : $applicantNotif }}</div>
                        </a>
                    </li>
                </ul>
                <!-- Profile Picture & Notif: Mobile Menu -->
                <ul class="navbar-nav d-block d-lg-none">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            Hi, {{ \Illuminate\Support\Str::of(Auth::user()->name)->words(1, '') }}
                        </a>
                        <a href="{{ route('applicantNotification') }}" class="nav-link">
                            Notifikasi
                        </a>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</nav>