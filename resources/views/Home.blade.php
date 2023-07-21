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
                    <div class="flex-column col-auto col-md-4 col-lg-2 d-flex align-items-center my-3">
                        <!-- Immagini -->
                        <img src="{{ $comic['thumb']}}" alt="">
                        <!-- titoli -->
                        <div>
                            <h6 class="text-light text-center text-uppercase ">
                                {{ $comic['title']}}
                            </h6>
                        </div>
                    </div>
                    @endforeach()
                </div>
            </div>
        </div>

    </main>
    <!-- FINE COMICS -->

    <!-- FOOTER -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <!-- Footer top - BLU -->
                <div class="col-12 px-5 footer-top">
                    <ul class="d-flex align-items-center h-100 justify-content-around">
                        <a href="/" class="text-white text-decoration-none"><li>
                            <img class="w-25" src="{{Vite::asset('./resources/img/buy-comics-digital-comics.png')}}" alt="">
                            <span class="ms-3 ">
                                DIGITAL COMICS
                            </span>
                            </li></a>
                        <a href="/" class="text-white text-decoration-none"><li>
                            <img class="w-25" src="{{Vite::asset('./resources/img/buy-comics-merchandise.png')}}" alt=""> 
                            <span class="ms-3 ">
                                DC MERCHANDISE
                            </span>
                        </li></a>
                        <a href="/" class="text-white text-decoration-none"><li>
                            <img class="w-25" src="{{Vite::asset('./resources/img/buy-comics-subscriptions.png')}}" alt=""> 
                            <span class="ms-3 ">
                                SUBSCRIPTION
                            </span>
                        </li></a>
                        <a href="/" class="text-white text-decoration-none"><li class="d-flex">
                            <img class="footer-icons w-25" src="{{Vite::asset('./resources/img/buy-comics-shop-locator.png')}}" alt="">
                            <span class="align-self-center ms-3 ">
                                COMIC SHOP LOCATOR
                            </span>
                            </li></a>
                        <a href="/" class="text-white text-decoration-none"><li class="text-center d-flex">
                            <img class="footer-icons w-25" src="{{Vite::asset('./resources/img/buy-dc-power-visa.svg')}}" alt=""> 
                            <span class="align-self-center ms-3 ">
                                DC POWER VISA
                            </span>
                        </li></a>
                    </ul>
                    <!-- FINE Footer top - BLU -->
                </div>
            </div>
        </div>
    </footer>



    <!-- FINE FOOTER -->

    





</body>

</html>