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
<div class="border-top p-4">
    <div class="container">
        <div class="row">
            {{-- TABLE LEFT --}}
            <div class="col-6">
                <table class="table">
                    <thead>
                      <tr>
                        <th>Talent</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="d-flex"> 
                                <div class="col-3">
                                    Art by:
                                </div> 
                                {{implode(",",$comic ['artists'])}}
                            </td>
                        </tr>
                        <tr>
                            <td class="d-flex">
                                <div class="col-3">
                                    Written by:
                                </div> 
                                {{implode(",",$comic ['writers'])}}
                            </td>
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
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="d-flex"> 
                                <div class="col-3">
                                    Series: 
                                </div>
                                {{$comic ['series']}}
                            </td>
                        </tr>
                        <tr>
                            <td class="d-flex">
                                <div class="col-3">
                                    U.S Price:  
                                </div>
                                {{$comic ['price']}}
                            </td>
                        </tr>
                        <tr>
                            <td class="d-flex">
                                <div class="col-3">
                                    On Sale Date:
                                </div>
                                {{ date('Y-M-d', strtotime($comic['sale_date']))}}
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            {{-- FINE TABLE RIGHT --}}
        </div>
    </div>
</div>
@endsection