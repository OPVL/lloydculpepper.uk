<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta name="description" content="The upstart developer, with too much free time and not enough work">
    <script defer src="https://kit.fontawesome.com/d83d45983d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="preconnect" href="https://source.unsplash.com">
    <link rel="preconnect" href="https://images.unsplash.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon//favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon//favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon//site.webmanifest') }}">
</head>

<body>
    {{-- @section('sidebar')
    This is the master sidebar.
    @show --}}

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
