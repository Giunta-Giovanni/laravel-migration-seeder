@extends('layouts.default_layout')
@section('page_title')
    Treni In Partenza
@endsection

@section('content')
<header>
    {{-- titolo partenze --}}   
    <h1>Treni in partenza / Departure trains</h1>
</header>
<main>
    <div class="container train-box">

        {{-- riga titoli --}}
        <div class="row title">
            <div class="col">
                treno
            </div>
            <div class="col">
                tipo
            </div>
            <div class="col">
                codice 
            </div>
            <div class="col">
                destinazione
            </div>
            <div class="col">
                orario di partenza
            </div>
            <div class="col">
                ritardo
            </div>
            <div class="col">
                informazioni
            </div>
            <div class="col">
                binario platform
            </div>
        </div>

        {{-- riga treni --}}
        @foreach ($trains as $train)
        {{-- @dump($train) --}}
            <div class="row train">
                {{-- nome treno --}}    
                <div class="col">
                    <p>
                        {{$train->company}}
                    </p>
                </div>
                {{-- tipo treno --}}
                <div class="col">
                    <p>
                        {{$train->train_type}}
                    </p>
                </div>
                {{-- codice treno --}}
                <div class="col">
                    {{$train->train_number}}
                </div>
                {{-- destinazione --}}
                <div class="col">
                    <p>
                        {{$train->arrival_station}}
                    </p>
                </div>
                {{-- orario --}}
                <div class="col">
                    {{$train->departure_time}}
                </div>
                {{-- ritardo --}}
                <div class="col">
                    {{!$train->is_on_time?$train->delay_minutes:'/' }}
                </div>
                {{-- informazioni -> se è cancellato, in orario o cancellato--}}
                <div class="col">
                    <div class="scrolling-text">
                        {{-- operatore ternario per treno cancellato in orario o in ritardo --}}
                        {{$train->is_cancelled? 'treno cancellato' : (!$train->is_on_time?'Treno in ritardo':'treno in orario')}}
                    </div>
                </div>
                {{-- binario --}}   
                <div class="col">
                    {{$train->platform}}
                </div>
            </div>
        @endforeach
        
    </div>
</main>
   

@endsection


