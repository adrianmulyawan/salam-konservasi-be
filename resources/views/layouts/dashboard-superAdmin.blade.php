<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
</head>
<body>
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            {{-- Sidebar --}}
            @include('includes.dashboard.sidebar-superAdmin')

            {{-- Dashboard Page --}}
            <div id="page-content-wrapper">
                {{-- Navbar --}}
                @include('includes.dashboard.navbar')

                {{-- Content --}}
                @yield('content')
            </div>
        </div>
    </div>

    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
    <script src="{{ url('frontend/scripts/hideSidebar.js') }}"></script>
</body>
</html>