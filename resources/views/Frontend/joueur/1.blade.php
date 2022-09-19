@extends('layouts.app')
@section('content')
    <h1>Show.player</h1>
    @php
        $fileName = asset('img/' . ucfirst($joueur->equipe->nom) . '/' . ucfirst($joueur->prenom) . '_' . ucfirst($joueur->nom) . '/' . $joueur->photo->src);
    @endphp
    <a href="{{ route('joueur.show', [$joueur->equipe->id, $joueur->id]) }}">voir joueur</a>
    <p>nom: {{ $joueur->nom }}</p>
    <p>prenom: {{ $joueur->prenom }}</p>
    <p>age: {{ $joueur->age }}</p>
    <p>phone: {{ $joueur->phone }}</p>
    <p>mail: {{ $joueur->mail }}</p>
    <p>genre: {{ $joueur->genre->genre }}</p>
    <p>role: {{ $joueur->role->role }}</p>
    <p>origine: {{ $joueur->origine }}</p>
    <img src="{{ $fileName }}" alt="" srcset="">
    <a href="{{route('joueur.edit',[$joueur->equipe->id, $joueur->id])}}">modifier joueur</a>
@endsection
