@extends('layouts.default_layout')
@section('page_title')
    Treni In Partenza
@endsection

@section('content')
<div class="container">
    {{-- titolo partenze --}}   
    <h1>Treni in partenza / Departure trains</h1>

{{-- riga titoli --}}
    {{-- titoli colonne  --}}
{{-- riga treni --}}
    {{-- nome treno --}}
    {{-- codice treno --}}
    {{-- destinazione --}}
    {{-- orario --}}
    {{-- ritardo --}}
    {{-- informazioni -> se è cancellato, in orario o cancellato--}}
    {{-- binario --}}
</div>

@endsection

@dump($trains)

