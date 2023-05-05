@extends('layout.app')

@section('main')
    <div class="container">
        <h1 class="text-center mb-4">Treni</h1>
        <ul>
            @foreach ($tmp as $item)
                <li>{{$item->azienda}}</li>
            @endforeach
        </ul>
    </div>
@endsection
