<!-- Header (Navbar dan Header) -->
<!-- Navigasi -->
<div class="container" data-aos="fade-down">
    <nav class="row navbar navbar-expand-lg navbar-light navbar-conservation bg-white">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ url('frontend/images/logo-salam-konservasi.png') }}" alt="logo-salam-konservasi">
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
                    <a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('conservationArea') }}" class="nav-link {{ request()->is('conservation-area*') ? 'active' : '' }}">
                        Kawasan Konservasi
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('news') }}" class="nav-link {{ request()->is('news*') ? 'active' : '' }}">
                        Berita
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('event') }}" class="nav-link {{ request()->is('event*') ? 'active' : '' }}">
                        Acara
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">SOP</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Unduh</a>
                </li>
            </ul>
            @guest
                <!-- Mobil Button: Login -->
                <form action="{{ route('login') }}" class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0">
                        MASUK
                    </button>
                </form>
                <!-- Desktop Button: Login -->
                <form action="{{ route('login') }}" class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                        MASUK
                    </button>
                </form>
            @endguest
            @auth
                {{-- Pemohon --}}
                @if (Auth::user()->role == 'applicant')
                     {{-- Profile Pictur & Notif: Desktop --}}
                     <ul class="navbar-nav d-none d-lg-flex">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                                <img src="{{ url('frontend/images/ic_profile.png') }}" alt="" class="rounded-circle mr-2 profile-picture">
                                Hi, {{ \Illuminate\Support\Str::of(Auth::user()->name)->words(1, '') }}
                            </a>
                            <div class="dropdown-menu">
                                <a href="{{ route('dashboardApplicant') }}" class="dropdown-item">Dashboard</a>
                                <a href="{{ route('settingAccountApplicant') }}" class="dropdown-item">Pengaturan Akun</a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <!-- Notif -->
                        <li class="nav-item dropdown notification-content-home">
                            <a href="{{ route('applicantNotification') }}" class="nav-link d-inline-block mt-2" id="notificationDropdown">
                                <img src="{{ url('frontend/images/ic_notif.png') }}" alt="" height="24">
                                <div class="notification">4</div>
                            </a>
                        </li>
                    </ul>
                    <!-- Profile Picture & Notif: Mobile Menu -->
                    <ul class="navbar-nav d-block d-lg-none">
                        <li class="nav-item">
                            <a href="{{ route('dashboardApplicant') }}" class="nav-link">
                                Hi, {{ \Illuminate\Support\Str::of(Auth::user()->name)->words(1, '') }}
                            </a>
                        </li>
                    </ul>
                {{-- Super Admin --}}
                @elseif (Auth::user()->role == 'superadmin')
                    {{-- Profile Pictur & Notif: Desktop --}}
                    <ul class="navbar-nav d-none d-lg-flex">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                                <img src="{{ url('frontend/images/ic_profile.png') }}" alt="" class="rounded-circle mr-2 profile-picture">
                                Hi, {{ \Illuminate\Support\Str::of(Auth::user()->name)->words(1, '') }}
                            </a>
                            <div class="dropdown-menu">
                                <a href="{{ route('AdmindashboardAdmin') }}" class="dropdown-item">Dashboard</a>
                                <a href="{{ route('AdminsettingAccountAdmin') }}" class="dropdown-item">Pengaturan Akun</a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <!-- Notif -->
                        <li class="nav-item dropdown notification-content-home">
                            <a href="{{ route('AdminadminNotification') }}" class="nav-link d-inline-block mt-2" id="notificationDropdown">
                                <img src="{{ url('frontend/images/ic_notif.png') }}" alt="" height="24">
                                <div class="notification">4</div>
                            </a>
                        </li>
                    </ul>
                    <!-- Profile Picture & Notif: Mobile Menu -->
                    <ul class="navbar-nav d-block d-lg-none">
                        <li class="nav-item">
                            <a href="{{ route('AdmindashboardAdmin') }}" class="nav-link">
                                Hi, {{ \Illuminate\Support\Str::of(Auth::user()->name)->words(1, '') }}
                            </a>
                        </li>
                    </ul>
                {{-- Pimpinan --}}
                @elseif (Auth::user()->role == 'leader')
                    {{-- Profile Pictur & Notif: Desktop --}}
                    <ul class="navbar-nav d-none d-lg-flex">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                                <img src="{{ url('frontend/images/ic_profile.png') }}" alt="" class="rounded-circle mr-2 profile-picture">
                                Hi, {{ \Illuminate\Support\Str::of(Auth::user()->name)->words(1, '') }}
                            </a>
                            <div class="dropdown-menu">
                                <a href="{{ route('LeaderdashboardLeader') }}" class="dropdown-item">Dashboard</a>
                                <a href="{{ route('LeadersettingAccountLeader') }}" class="dropdown-item">Pengaturan Akun</a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <!-- Notif -->
                        <li class="nav-item dropdown notification-content-home">
                            <a href="{{ route('LeaderleaderNotification') }}" class="nav-link d-inline-block mt-2" id="notificationDropdown">
                                <img src="{{ url('frontend/images/ic_notif.png') }}" alt="" height="24">
                                <div class="notification">4</div>
                            </a>
                        </li>
                    </ul>
                    <!-- Profile Picture & Notif: Mobile Menu -->
                    <ul class="navbar-nav d-block d-lg-none">
                        <li class="nav-item">
                            <a href="{{ route('LeaderdashboardLeader') }}" class="nav-link">
                                Hi, {{ \Illuminate\Support\Str::of(Auth::user()->name)->words(1, '') }}
                            </a>
                        </li>
                    </ul>
                {{-- Admin Lapangan --}}
                @elseif (Auth::user()->role == 'fieldadmin')
                    {{-- Profile Pictur & Notif: Desktop --}}
                    <ul class="navbar-nav d-none d-lg-flex">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                                <img src="{{ url('frontend/images/ic_profile.png') }}" alt="" class="rounded-circle mr-2 profile-picture">
                                Hi, {{ \Illuminate\Support\Str::of(Auth::user()->name)->words(1, '') }}
                            </a>
                            <div class="dropdown-menu">
                                <a href="{{ route('dashboardFieldAdmin') }}" class="dropdown-item">Dashboard</a>
                                <a href="{{ route('settingAccountFieldAdmin') }}" class="dropdown-item">Pengaturan Akun</a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                    <!-- Profile Picture & Notif: Mobile Menu -->
                    <ul class="navbar-nav d-block d-lg-none">
                        <li class="nav-item">
                            <a href="{{ route('dashboardFieldAdmin') }}" class="nav-link">
                                Hi, {{ \Illuminate\Support\Str::of(Auth::user()->name)->words(1, '') }}
                            </a>
                        </li>
                    </ul>
                @endif
            @endauth
        </div>
    </nav>
</div>