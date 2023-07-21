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
   
   <header >
        <div class="container">
            <div class="row a ">
                <!-- COL LEFT -->
                <div class="col">
                    <!-- Logo -->
                    <div>
                        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" >
                    </div>
                </div>
                <!-- FINE COL LEFT -->

                <!-- COL RIGHT -->
                <div class="col">
                    <ul class= "d-flex align-items-center h-100">
                        <li>
                            <a href="">Characters</a>
                        </li>
                        <li>
                            <a href="">Comics</a>
                        </li>
                        <li>
                            <a href="">Movies</a>
                        </li>
                        <li>
                            <a href="">Games</a>
                        </li>
                        <li>
                            <a href="">Collectibles</a>
                        </li>
                        <li>
                            <a href="">Videos</a>
                        </li>
                        <li>
                            <a href="">Fans</a>
                        </li>
                        <li>
                            <a href="">News</a>
                        </li>
                    </ul>
                </div>
                <!-- FINE COL RIGHT -->



            </div>
        </div>



    </header>

</body>

</html>