<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} Page</title>
    @vite(['resources/sass/app.scss', 'resources/sass/themes/dark/app-dark.scss'])
    <link rel="shortcut icon" href="{{ asset('assets/static/images/logo/logo-telu-2.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('assets/static/images/logo/logo-telu-2.png') }}" type="image/png">
</head>

<body>
    @vite('resources/js/initTheme.js')
    <div id="app">
        <div id="sidebar">
            @include('layouts.partials.sidebar')
        </div>
        <div id="main">
            @include('layouts.partials.header')
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            {{ $slot }}
            @include('layouts.partials.footer')
        </div>
    </div>
    <script src="{{ asset('assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    @vite(['resources/js/app.js'])
    <script src="{{ asset('assets/js/app.js') }}" type="module"></script>

</body>

</html>
