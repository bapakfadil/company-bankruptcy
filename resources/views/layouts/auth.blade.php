<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} Page</title>

    @vite([
        "resources/sass/app.scss",
        "resources/sass/themes/dark/app-dark.scss",
        "resources/sass/pages/auth.scss"
    ])
    <link rel="shortcut icon" href="{{ asset('assets/static/images/logo/logo-telu-2.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('assets/static/images/logo/logo-telu-2.png') }}" type="image/png">
</head>

<body>
    @vite('resources/js/initTheme.js')
    <div id="auth">
        {{ $slot }}
    </div>
</body>

</html>
