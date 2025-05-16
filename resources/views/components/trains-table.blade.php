@props([
    'company',
    'train_type',
    'train_number',
    'arrival_station',
    'departure_time',
    'is_on_time',
    'delay_minutes',
    'is_cancelled',
    'platform'
])



{{-- treno --}}
<div class="row train">

    {{-- nome treno --}}    
    <div class="col">
        <p>
            {{$company}}
        </p>
    </div>

    {{-- tipo treno --}}
    <div class="col">
        <p>
            {{$train_type}}
        </p>
    </div>

    {{-- codice treno --}}
    <div class="col">
        {{$train_number}}
    </div>

    {{-- provenienza/destinazione --}}
    <div class="col">
        <p>
            {{$departure_station ?? $arrival_station}}
        </p>
    </div>

    {{-- orario di partenza / arrivo --}}
    <div class="col">
        {{$departure_time ?? $arrival_time}}
    </div>

    {{-- ritardo --}}
    <div class="col">
        {{$is_on_time ? '/' : "$delay_minutes'" }}
    </div>

    {{-- informazioni -> se è cancellato, in orario o cancellato--}}
    <div class="col">
        <div class="scrolling-text">
            {{-- operatore ternario per treno cancellato in orario o in ritardo --}}
            {{$is_cancelled? 'treno cancellato' : (!$is_on_time?'Treno in ritardo':'treno in orario')}}
        </div>
    </div>
    {{-- binario --}}   
    <div class="col">
        {{$platform}}
    </div>
</div>
