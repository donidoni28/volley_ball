{{-- @extends('layouts.app')
@section('content')
    <h1>Show.equipe</h1>
    <p>{{ $equipe->nom }}</p>
    <p>{{ $equipe->ville }}</p>
    <p>{{ $equipe->continent->continent }}</p>
    <a href="{{ route('equipe.edit', $equipe->id) }}">modifier l'equipe</a>
    <a href="{{route('joueur.index', $equipe->id)}}"> voir compisition des joueur</a>
    <form action="{{ route('equipe.destroy', $equipe->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Effacer l'equipe</button>
    </form>
@endsection --}}

<div class="modal">
    <div class="modal-box relative">
        <label for="my-modal-{{ $equipe->id }}" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-inherit">
            <form action="{{ route('equipe.destroy', $equipe->id) }}" method="post">
                @csrf
                @method('delete')
                <a href="{{route('joueur.index', $equipe->id)}}" class="btn"> voir compisition des joueur</a>
                <button class="btn" type="submit">Effacer l'equipe</button>
            </form>
            <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Show & update team</h2>
            <form action="{{ route('equipe.update', $equipe->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="nom">Nom de l'equipe</label>
                        <input value="{{$equipe->nom}}" name="nom"  id="nom" type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                            >
                    </div>

                    <div>
                        <label  class="text-gray-700 dark:text-gray-200" for="ville">Ville</label>
                        <input value="{{$equipe->ville}}" name="ville" id="nom" type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                            >
                    </div>
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="continents">continent</label>
                        <select name="continents" id="continents">
                            <option value="">Choisisez un continent</option>
                            @foreach ($continents as $continent)
                                @if ($equipe->continent_id == $continent->id)
                                    <option selected="selected" value="{{ $continent->id }}">{{ $continent->continent }}</option>
                                @else
                                    <option value="{{ $continent->id }}">{{ $continent->continent }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="flex justify-end mt-6">
                    <button type="submit"
                        class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
                </div>
            </form>
            
        </section>
    </div>
</div>