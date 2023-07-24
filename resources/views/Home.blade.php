

@extends('layouts.app')  <!-- estendo il contenuto di questa pagina con quello di app.blade -->


@section ('content')
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
@endsection 

    



