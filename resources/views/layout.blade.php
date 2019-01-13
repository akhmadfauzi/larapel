 <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Cari Konveksi')</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="links">
                <a href="/">Home</a>
                <a href="/contact">Contact</a>
                <a href="/about">About</a>
                <a href="/projects">Projects</a>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>
