@extends ('layouts.app')


{{-- Dettagli fumetti --}}
@section ('content')
<div class="container">
    <div class="row p-5">
        <div class="col">
            {{-- Copertina fumetto --}}
            <div class="position-relative">
                <img class="comic-position comic-size border" src="{{ $comic['thumb']}}" alt="">

            </div>
            {{-- Titolo --}}
            <h4 class="text-uppercase mb-3">{{ $comic ['title']}}</h4>

            {{-- Prezzo --}}
            <div class="bg-price p-3 mb-3">
                <div>
                    U.S. Price: {{$comic ['price']}}
                </div>
            </div>

            {{-- Descrizione  --}}
            <p>
                {{$comic ['description']}}
            </p>
        </div>
        {{-- Immagine Advertisement --}}
        <div class="col">
            <div class="d-flex flex-column align-items-end">
                <h6 class="text-uppercase">Advertisement</h6>
                <img src="{{Vite::asset('./resources/img/adv.jpg')}}" alt="">

            </div>
        </div>
    </div>
</div>


@endsection