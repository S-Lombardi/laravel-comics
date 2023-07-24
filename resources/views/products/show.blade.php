@extends ('layouts.app')


{{-- Dettagli fumetti --}}
@section ('content')
<div class="container">
    <div class="row">
        <div class="col">
            {{-- Titolo --}}
            <h1>{{ $comic ['title']}}</h1>

            {{-- Prezzo --}}
            <div class="bg-success p-3 mb-3">
                <div>
                    U.S. Price: {{$comic ['price']}}
                </div>

            </div>

            {{-- Descrizione --}}
            <p>
                {{$comic ['description']}}
            </p>
        </div>
        <div class="col">
            <h6 class="text-uppercase">Advertisement</h6>
            <img src="{{Vite::asset('./resources/img/adv.jpg')}}" alt="">
        </div>
    </div>
</div>


@endsection