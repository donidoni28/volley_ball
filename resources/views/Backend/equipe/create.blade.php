{{-- @extends('layouts.app')
@section('content')
    <h1>Create.equipe</h1>
    <form action="{{route('equipe.store')}}" method="post">
        @csrf
        <input type="text" placeholder="nom" name="nom" id="">
        <input type="text" placeholder="ville" name="ville" id="">
        <select name="continents" id="">
            <option selected="selected" value="">Choisisez un continent</option>
            @foreach ($continents as $continent)
                <option value="{{$continent->id}}">{{$continent->continent}}</option>
            @endforeach
        </select>
        <button type="submit">Cree equipe</button>
    </form>
@endsection --}}
<div class="modal">
    <div class="modal-box relative">
        <label for="my-modal-newteam" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-inherit">
            <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">create team</h2>
            <form action="{{ route('equipe.store') }}" method="post">
                @csrf
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="nom">Nom de l'equipe</label>
                        <input placeholder="nom" name="nom"  id="nom" type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                            >
                    </div>

                    <div>
                        <label name="ville" class="text-gray-700 dark:text-gray-200" for="ville">Ville</label>
                        <input placeholder="ville" name="ville" id="nom" type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                            >
                    </div>

                    <select name="continents" id="">
                        <option value="">Choisisez un continent</option>
                        @foreach ($continents as $continent)
                                <option value="{{ $continent->id }}">{{ $continent->continent }}</option>
                        @endforeach
                    </select>

                </div>

                <div class="flex justify-end mt-6">
                    <button type="submit"
                        class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">create</button>
                </div>
            </form>
        </section>
    </div>
</div>