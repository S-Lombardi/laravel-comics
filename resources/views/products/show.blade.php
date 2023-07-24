@extends ('layouts.app')

@section ('content')
{{-- Rettangolo blu sotto al fumetto --}}
<div class="rectangle-thumb"></div>
<div class="container">
    <div class="row p-5">
        {{-- COL LEFT --}}
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

        {{-- COL RIGHT --}}
        <div class="col-auto">
            {{-- Immagine Advertisement --}}
            <div class="d-flex flex-column align-items-end">
                <h6 class="text-uppercase">Advertisement</h6>
                <img src="{{Vite::asset('./resources/img/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>

{{-- TALENT -SPECS --}}
<div class="">
    <div class="container">
        <div class="row">
            {{-- TABLE LEFT --}}
            <div class="col-6">
                <table class="table">
                    <thead>
                      <tr>
                        <th>Talent</th>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td> Art by: {{implode(",",$comic ['artists'])}}</td>
                        </tr>
                        <tr>
                            <td>Written by: {{implode(",",$comic ['writers'])}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- FINE TABLE LEFT --}}

            {{-- TABLE RIGHT --}}
            <div class="col-6">
                <table class="table">
                    <thead>
                      <tr>
                        <th>Specs</th>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td> Series: {{$comic ['series']}}</td>
                        </tr>
                        <tr>
                            <td>U.S Price: {{$comic ['price']}}</td>
                        </tr>
                        <tr>
                            <td>On Sale Date: {{ date('Y-M-d', strtotime($comic['sale_date']))}}</td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            {{-- FINE TABLE RIGHT --}}
        </div>
    </div>
</div>
@endsection