@php
    $state= 'partenza'
@endphp

@extends('layouts.default_layout')
@section('page_title')
    Treni In Partenza
@endsection

@section('content')
<header>
    {{-- titolo partenze --}}   
    <h1>Treni in partenza / Departure trains</h1><span><a class="btn btn-outline-warning btn-custom" href="/">ritorna alla home</a></span>
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
                {{$state == 'partenza'?'destinazione':($state == 'arrivo'?'Proveniente da':'')}}
            </div>
            <div class="col">
                {{$state == 'partenza'?'Orario di partenza':($state == 'arrivo'?'Orario di arrivo':'')}}
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

        {{-- treni --}}
        @foreach ($trains as $train)

            <x-trains-table
                :company="$train->company"
                :train_type="$train->train_type"
                :train_number="$train->train_type"
                :arrival_station="$train->arrival_station"
                :departure_time="$train->departure_time"
                :is_on_time="$train->is_on_time"
                :delay_minutes="$train->delay_minutes"
                :is_cancelled="$train->is_cancelled"
                :platform="$train->platform"
            />
        @endforeach

    </div>
</main>
   

@endsection


