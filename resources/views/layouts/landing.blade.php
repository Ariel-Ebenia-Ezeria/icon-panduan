<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/compiled/png/logo.png" type="image/x-icon">
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
    
    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.landing.script')
    @stack('addon-script')

</body>

</html>