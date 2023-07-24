<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
<body>
    <!-- HEADER -->
    @include('partials.header')
    
    <!-- JUMBOTRON -->
    <div id="jumbotron">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}">
    </div>
    
    {{-- COMICS --}}
    <main>
        @yield('content')
    </main>
    
    <!-- FOOTER -->
    @include('partials.footer')
</body>