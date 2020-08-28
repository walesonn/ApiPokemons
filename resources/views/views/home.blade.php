@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            @if(isset($pokemons))
                @foreach($pokemons->pokemon as $pokemon)
                    <div class="col-sm-4 my-2">
                        <div class="card" style="box-shadow: 2px 2px 2px aquamarine;">
                            <div class="card-header" style="background-color: aquamarine;"><h3 class="text-light" style="text-shadow: 2px 2px 2px black;">{{ $pokemon->name }}</h3></div>
                            <div class="card-body d-flex justify-content-center">
                                <img src="{{ $pokemon->img }}" alt="">
                            </div>
                            
                            <div class="card-header ">
                               <p>Tamanho: {{ $pokemon->height }}</p>
                               <p>Peso: {{ $pokemon->weight }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection