<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="bg-gray-200 text-gray-800 antialiased font-sans">

    <form id="logout-form" action="{{ route('logout') }}" method="post" class="hidden">
        @csrf
    </form>

    <div id="app">
        <main class="h-screen">
            @yield('content')
        </main>
    </div>

    </body>
</html>
