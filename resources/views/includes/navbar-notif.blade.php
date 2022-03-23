<!-- Header (Navbar dan Header) -->
<div class="header" data-aos="fade-down">
    <!-- Navigasi -->
    <div class="container">
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
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('conservationArea') }}" class="nav-link">Kawasan Konservasi</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('news') }}" class="nav-link">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('event') }}" class="nav-link">Acara</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">SOP</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('download') }}" class="nav-link">Unduh</a>
                    </li>
                </ul>
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
                </ul>
                <!-- Profile Picture & Notif: Mobile Menu -->
                <ul class="navbar-nav d-block d-lg-none">
                    <li class="nav-item">
                        <a href="{{ route('dashboardApplicant') }}" class="nav-link">
                            Hi, {{ \Illuminate\Support\Str::of(Auth::user()->name)->words(1, '') }}
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>