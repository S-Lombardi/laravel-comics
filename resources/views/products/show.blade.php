@extends ('layouts.app')


{{-- Dettagli fumetti --}}
@section ('content')
<div class="container">
    <div class="row">
        <div class="col">
            {{-- Titolo --}}
            <h1>{{ $comic ['title']}}</h1>
        </div>
        <div class="col">
            <h6 class="text-uppercase">Advertisement</h6>
            <img src="{{Vite::asset('./resources/img/adv.jpg')}}" alt="">
        </div>
    </div>
</div>


@endsection