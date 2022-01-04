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
                    <a href="{{ route('home') }}" class="nav-link">
                        Home
                    </a>
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
                    <a href="#" class="nav-link">Penggunaan Sistem</a>
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
                {{-- Profile Pictur & Notif: Desktop --}}
                <ul class="navbar-nav d-none d-lg-flex">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                            <img src="{{ url('frontend/images/ic_profile.png') }}" alt="" class="rounded-circle mr-2 profile-picture">
                            Hi, {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu">
                            <a href="pemohon/dashboard.html" class="dropdown-item">Dashboard</a>
                            <a href="#" class="dropdown-item">Pengaturan Akun</a>
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
                    <li class="nav-item">
                        <a href="#" class="nav-lin d-inline-block mt-3">
                            <img src="{{ url('frontend/images/ic_notif.png') }}" alt="" height="24">
                            <div class="notification">4</div>
                        </a>
                    </li>
                </ul>
                <!-- Profile Picture & Notif: Mobile Menu -->
                <ul class="navbar-nav d-block d-lg-none">
                    <li class="nav-item">
                        <a href="pemohon/dashboard.html" class="nav-link">
                            Hi, {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-inline-block">
                            Notifikasi
                        </a>
                    </li>
                </ul>
            @endauth
        </div>
    </nav>
</div>