@extends('layouts.app')
@section('content')
    <h1>Index.joueur</h1>
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <div class="xl:flex flex-col xl:items-center xl:-mx-4">
                <div class="xl:h-1/5 xl:mx-4 mb-10">
                    <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">Les joueurs</h1>
                </div>
                
                <p class=" self-start">places: {{$countPlayer}}/{{$maxJoueur}}</p>
                <div class="grid grid-cols-1 gap-10 mt-8 xl:mt-0 xl:mx-4 xl:w-1/2 md:grid-cols-4">
                    @foreach ($joueurs as $item)
                        
                        <div>
                            @if (isset($item))
                                <label for="my-modal-{{ $item->id }}"
                                    class="block w-40 h-40 btn modal-button bg-cover bg-center rounded-xl aspect-square"
                                    style="background-image: url({{ asset('storage/img/'.$item->photo->src) }})"></label>
                                <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                    {{ $item->prenom }} {{ $item->nom }}</h1>
                                <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Post:
                                    {{ $item->role->role }}</p>
                                <!-- Put this part before </body> tag -->

                                <input type="checkbox" id="my-modal-{{ $item->id }}" class="modal-toggle" />
                                @include('Frontend.joueur.modalJoueur')
                            @endif
                        </div>
                    @endforeach

                    <label for="my-modal-newPlayer" class="block w-40 h-40 bg-inherit btn modal-button bg-cover bg-center rounded-xl aspect-square" style="background-image: url({{asset('images/plus.png')}})"></label>
                    <!-- Put this part before </body> tag -->

                    <input type="checkbox" id="my-modal-newPlayer" class="modal-toggle" />
                    @include('Backend.joueur.modalJoueur')
                    {{-- <a href="{{ route('joueur.create', $equipeId) }}"><img src="{{ asset('images/plus.png') }}" alt="" srcset=""></a> --}}
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- <p class="max-w-2xl mt-4 text-gray-500 dark:text-gray-300">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt ex placeat modi magni quia error alias, adipisci rem similique, at omnis eligendi optio eos harum.
                                            </p> --}}
{{-- @if (!count($joueurs))
                            <h1>Pas de joueur</h1>
                        @else
                            <a href="{{ route('equipe.index') }}">Voir Equipe</a>
                    
                            @foreach ($joueurs as $joueur)
                                
                                <a href="{{ route('joueur.show', [$joueur->equipe->id, $joueur->id]) }}">voir joueur</a>
                                <form action="{{ route('joueur.destroy', [$joueur->equipe->id, $joueur->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">suprimer Joueur</button>
                                </form>
                                <p>nom: {{ $joueur->nom }}</p>
                                <p>prenom: {{ $joueur->prenom }}</p>
                                <p>age: {{ $joueur->age }}</p>
                                <p>phone: {{ $joueur->phone }}</p>
                                <p>mail: {{ $joueur->mail }}</p>
                                <p>genre: {{ $joueur->genre->genre }}</p>
                                <p>role: {{ $joueur->role->role }}</p>
                                <p>origine: {{ $joueur->origine }}</p>
                    
                                <img style="width: 10%; height:10%" src="{{ $fileName }}" alt="" srcset="">
                            @endforeach
                        @endif
                        <a href="{{ route('joueur.create', $equipeId) }}">Cree joueur</a> --}}
