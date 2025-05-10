<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>


    {{-- Style --}}
    @stack('prepend-style')
    @include('includes.landing.style')
    @stack('addon-style')
</head>

<body>
    <script src="/assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                {{-- Navbar --}}
                @include('includes.landing.navbar')
                {{-- End Navbar --}}
            </header>

            <div class="content-wrapper container">

                <div class="page-heading">
                </div>

                {{-- Content --}}
                @yield ('content')
                {{-- End Content --}}

            </div>

            {{-- Footer --}}
            @include('includes.landing.footer')
            {{-- End Footer --}}

        </div>
    </div>
    <script src="/assets/static/js/components/dark.js"></script>
    <script src="/assets/static/js/pages/horizontal-layout.js"></script>
    <script src="/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="/assets/compiled/js/app.js"></script>


    <script src="/assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/static/js/pages/dashboard.js"></script>

</body>

</html>