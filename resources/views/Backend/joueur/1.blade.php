@extends('layouts.app')
@section('content')
    <h1>Create.joueur</h1>
    {{-- {{ dd() }} --}}
    <form action="{{ route('joueur.store',$equipeId) }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" value="nom" placeholder="nom" name="nom" id="">
        <input type="text" value="prenom" placeholder="prenom" name="prenom" id="">
        <input type="text" value="age" placeholder="age" name="age" id="">
        <input type="text" value="phone" placeholder="phone" name="phone" id="">
        <input type="text" value="mail" placeholder="mail" name="mail" id="">
        <select name="genre" id="">
            <option value="">Selectionner un genre</option>
            @foreach ($genres as $genre)
            <option value="{{$genre->id}}">{{$genre->genre}}</option>
            @endforeach
        </select>
        <input type="text" placeholder="origine" name="origine" id="">
        <select name="role" id="">
            <option value="">Selectionner un post</option>
            @foreach ($roles as $role)
            <option value="{{$role->id}}">{{$role->role}}</option>
            @endforeach
        </select>
        <input type="file" name="img" id="">
        
        {{-- <input type="text" placeholder="role_id" name="role_id" id="">
        <input type="text" placeholder="equipe_id" name="equipe_id" id="">
        <input type="text" placeholder="photo_id" name="photo_id" id=""> --}}
        <button type="submit">Ajouter joueur</button>
    </form>
@endsection
