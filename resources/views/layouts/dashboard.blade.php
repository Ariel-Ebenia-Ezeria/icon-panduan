<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/compiled/png/logo.png" type="image/x-icon">
    <title>@yield('title')</title>

    {{-- Style --}}
    @stack('prepend-style')
    @include('includes.dashboard.style')
    @stack('addon-style')

</head>

<body>
    <script src="/assets/static/js/initTheme.js"></script>
    <div id="app">
        {{-- Sidebar --}}
        @include('includes.dashboard.sidebar')
        {{-- End Sidebar --}}

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            {{-- Content --}}
            @yield ('content')
            {{-- End Content --}}

            {{-- Footer --}}
            @include('includes.dashboard.footer')
            {{-- End Footer --}}
        </div>
    </div>

    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.dashboard.script')
    @stack('addon-script')
</body>

</html>