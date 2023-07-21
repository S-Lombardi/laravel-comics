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
    <div id="jumbotron">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}">
    </div>

    <!-- FINE JUMBOTRON -->

    <!-- COMICS -->
    <main class="bg-dark p-5">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap">

                    @foreach($comics as $comic)
                    <div class="flex-column col-auto col-md-4 col-lg-2 d-flex justify-content-center my-3">
                        <!-- Immagini -->
                        <img src="{{ $comic['thumb']}}" alt="">
                        <!-- titoli -->
                        <div>
                            <h5 class="text-light ">
                                {{ $comic['title']}}
                            </h5>
                        </div>
                    </div>
                    @endforeach()
                </div>
            </div>
        </div>

    </main>
    <!-- FINE COMICS -->
    





</body>

</html>