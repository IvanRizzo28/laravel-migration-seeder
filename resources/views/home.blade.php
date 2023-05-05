@extends('layout.app')

@section('main')
    <div class="container">
        <h1 class="text-center mb-4">Treni</h1>
        <ul>
            @foreach ($tmp as $item)
                <li class="mb-3">
                    <h3>Compagnia: {{ $item->azienda }}</h3>
                    <p>Partenza: {{ $item->stazione_partenza }}</p>
                    <p>Arrivo: {{ $item->stazione_arrivo }}</p>
                    <p>Orario partenza: {{  $item->orario_partenza}}</p>
                    <p>Orario arrivo: {{ $item->orario_arrivo }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
