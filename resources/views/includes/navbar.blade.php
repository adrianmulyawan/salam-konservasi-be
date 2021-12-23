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
        </div>
    </nav>
</div>