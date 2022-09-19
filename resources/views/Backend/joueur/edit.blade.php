<form action="{{ route('joueur.update', [$item->equipe->id, $item->id]) }}" method="post">
    @csrf
    @method('put')
    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
        <div>
            <label class="text-gray-700 dark:text-gray-200" for="prenom">Prenom</label>
            <input name="prenom" id="prenom" type="text"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                value="{{ $item->prenom }}">
        </div>

        <div>
            <label  class="text-gray-700 dark:text-gray-200" for="nom">Nom</label>
            <input name="nom" id="nom" type="text"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                value="{{ $item->nom }}">
        </div>

        <div>
            <label class="text-gray-700 dark:text-gray-200" for="age">Age</label>
            <input name="age" id="age" type="text"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                value="{{ $item->age }}">
        </div>

        <div>
            <label class="text-gray-700 dark:text-gray-200" for="phone">Telephone</label>
            <input name="phone" id="phone" type="text"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                value="{{ $item->phone }}">
        </div>

        <div>
            <label class="text-gray-700 dark:text-gray-200" for="mail">Mail</label>
            <input name="mail" id="mail" type="text"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                value="{{ $item->mail }}">
        </div>

        <div>
            <label class="text-gray-700 dark:text-gray-200" for="origine">Origine</label>
            <input name="origine" id="origine" type="text"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                value="{{ $item->origine }}">
        </div>

        <div>
            <label class="text-gray-700 dark:text-gray-200" for="genre">Genre</label>
            <select name="genre" id="genre" class="select select-info w-full max-w-xs">
                <option disabled selected>Select genre</option>

                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="text-gray-700 dark:text-gray-200" for="role">Role</label>
            <select name="role" id="role" class="select select-info w-full max-w-xs">
                <option disabled selected>Select role</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->role }}</option>
                @endforeach
            </select>
        </div>
        
        <div>
            <label class="text-gray-700 dark:text-gray-200" for="img">Image</label>
            <input type="file" name="img" id="img">
        </div>

    </div>

    <div class="flex justify-end mt-6">
        <button type="submit"
            class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
    </div>
</form>
{{-- @extends('layouts.app')
@section('content')
    <h1>Edit.joueur</h1>
    <form action="{{ route('joueur.update', [$item->equipe->id, $item->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <input type="text" placeholder="nom" name="nom" value="{{ $item->nom }}">
        <input type="text" placeholder="prenom" name="prenom" value="{{ $item->prenom }}">
        <input type="text" placeholder="age" name="age" value="{{ $item->age }}">
        <input type="text" placeholder="phone" name="phone" value="{{ $item->phone }}">
        <input type="text" placeholder="mail" name="mail" value="{{ $item->mail }}">
        <select name="genre" id="">
            <option value="">Selectionner un genre</option>
            @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
            @endforeach
        </select>
        <input type="text" placeholder="origine" name="origine" value="{{ $item->origine }}">
        <select name="role" id="">
            <option value="">Selectionner un post</option>
            @foreach ($roles as $role)
            <option value="{{$role->id}}">{{$role->role}}</option>
            @endforeach
        </select>
        <input type="file" name="img" id="">

        <button type="submit">Metre a joure</button>
    </form>
@endsection --}}