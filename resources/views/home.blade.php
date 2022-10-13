@extends('app')

@section('mataTitle', 'Movie')

@section('content')

    <h1>Train-list</h1>

<div class="card_wrapper">
    @foreach ($trains as $train)
        <div class="card">
            <a href="">
                <h3>{{ $train->azienda }}</h3>
                <h3>Data : {{ $train->data }}</h3>
                <h5>codice del treno : {{ $train->codice_treno }}</h5>
                <p>numero di carrozze : {{ $train->numero_carrozze }}</p>
                <p>
                    Partenza : {{ $train->stazione_di_partenza }} -- {{ $train->orario_di_partenza }}
                </p>
                <p>
                    Arrivo : {{ $train->stazione_di_arrivo }} -- {{ $train->orario_di_arrivo }}
                </p>

            </a>
            <div class="badge">
                <div class="text_badge">{{ $train->codice_treno }}</div>
            </div>

        </div>
    @endforeach
</div>

@endsection
