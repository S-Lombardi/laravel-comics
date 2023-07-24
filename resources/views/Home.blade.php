@extends('layouts.app')  <!-- estendo il contenuto di questa pagina con quello di app.blade -->

<!-- COMICS -->
@section ('content')
<main class="bg-dark">
    <div class="container"> 
        <span class="p-3 bg-primary text-uppercase">
            Current Series
        </span>
        <div class="row">
            <div class="col-12 d-flex flex-wrap p-5">
                @foreach($comics as  $id => $comic)
                <div class="flex-column col-auto col-md-4 col-lg-2 d-flex align-items-center my-3">
                    <a href="{{route('products.show', $id)}}">  
                        <!-- Immagini -->
                        <img class="comic-size" src="{{ $comic['thumb']}}" alt="">
                        <!-- titoli -->
                        <div>
                            <h6 class="text-light text-center text-uppercase ">
                                {{ $comic['title']}}
                            </h6>
                        </div>
                    </a>
                </div>
                @endforeach()
            </div>
        </div>
    </div>
    <!-- FOOTER TOP - BLU -->
    

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-5 footer-top">
                <ul class="d-flex align-items-center h-100 justify-content-around">
                    <li>
                        <a href="/" class="text-white text-decoration-none">
                            <img class="w-25" src="{{Vite::asset('./resources/img/buy-comics-digital-comics.png')}}" alt="">
                            <span class="ms-3 ">
                                DIGITAL COMICS
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="/" class="text-white text-decoration-none">
                            <img class="w-25" src="{{Vite::asset('./resources/img/buy-comics-merchandise.png')}}" alt=""> 
                            <span class="ms-3 ">
                                DC MERCHANDISE
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="/" class="text-white text-decoration-none">
                            <img class="w-25" src="{{Vite::asset('./resources/img/buy-comics-subscriptions.png')}}" alt=""> 
                            <span class="ms-3 ">
                                SUBSCRIPTION
                            </span>
                        </a>
                    </li>
                    <li  class="d-flex">
                        <a href="/" class="text-white text-decoration-none">
                            <img class="footer-icons w-25" src="{{Vite::asset('./resources/img/buy-comics-shop-locator.png')}}" alt="">
                            <span class="align-self-center ms-3 ">
                                COMIC SHOP LOCATOR
                            </span>
                        </a>
                    </li>
                    <li class="text-center d-flex">
                        <a href="/" class="text-white text-decoration-none">
                            <img class="footer-icons w-25" src="{{Vite::asset('./resources/img/buy-dc-power-visa.svg')}}" alt=""> 
                            <span class="align-self-center ms-3 ">
                                DC POWER VISA
                            </span>
                        </a>
                    </li>
                </ul>
                <!-- FOOTER TOP - BLU -->
            </div>
        </div>
    </div>
</main>
@endsection 
<!-- FINE COMICS -->