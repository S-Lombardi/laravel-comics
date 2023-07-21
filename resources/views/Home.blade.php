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
    <!-- FINE HEADER -->

    <!-- JUMBOTRON -->
    <div>
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    </div>

    <!-- FINE JUMBOTRON -->

    <!-- COMICS -->
    <main class="bg-dark p-5 mt-3">
        <div class="container">
            <div class="row">
                
                <div class="col border me-3">
                    comics
                </div>
                <div class="col border me-3">
                    comics
                </div>
                <div class="col border me-3">
                    comics
                </div>
                <div class="col border me-3">
                    comics
                </div>

            
                
            </div>
        </div>

    </main>
    <!-- FINE COMICS -->
    





</body>

</html>