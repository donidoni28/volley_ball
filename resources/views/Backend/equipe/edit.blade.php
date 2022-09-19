@extends('layouts.app')
@section('content')
    <h1>Edit.equipe</h1>
    <form action="{{ route('equipe.update', $equipe->id) }}" method="post">
        @csrf
        @method('put')
        <input type="text" placeholder="nom" value="{{$equipe->nom}}" name="nom" id="">
        <input type="text" placeholder="ville" value="{{$equipe->ville}}" name="ville" id="">
        {{-- {{ dd($equipe) }} --}}
        <select name="continents" id="">
            <option value="">Choisisez un continent</option>
            @foreach ($continents as $continent)
                @if ($equipe->continent_id == $continent->id)
                    <option selected="selected" value="{{ $continent->id }}">{{ $continent->continent }}</option>
                @else
                    <option value="{{ $continent->id }}">{{ $continent->continent }}</option>
                @endif
            @endforeach
        </select>
        <button type="submit">Modifier equipe</button>
    </form>
@endsection
