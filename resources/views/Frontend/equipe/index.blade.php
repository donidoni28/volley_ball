@extends('layouts.app')
@section('content')
    <h1>Index.equipe</h1>
    <section class="bg-white dark:bg-gray-900">

        <div class="container px-6 py-10 mx-auto">
            <div class="xl:flex flex-col xl:items-center xl:-mx-4">
                <div class="xl:h-1/5 xl:mx-4 flex">
                    <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white mb-10">Nos Equipes
                    </h1>
                </div>

                <div class="grid grid-cols-1 gap-10 mt-8 xl:mt-0 xl:mx-4 xl:w-1/2 md:grid-cols-4">

                    
                        @foreach ($equipes as $equipe)
                            <label for="my-modal-{{ $equipe->id }}"
                                class="flex  w-40 h-40 dark:bg-gray-800 btn modal-button bg-cover  rounded-xl aspect-square center">
                                <p class="">{{ $equipe->nom }}</p>
                            </label>
                            <!-- Put this part before </body> tag -->

                            <input type="checkbox" id="my-modal-{{ $equipe->id }}" class="modal-toggle" />
                            @include('Frontend.equipe.show')
                            {{-- <a href="{{ route('equipe.show', $equipe->id) }}">Voire Equipe</a> --}}
                        @endforeach

                    <label for="my-modal-newteam"
                        class="block w-40 h-40 bg-inherit btn modal-button bg-cover bg-center rounded-xl aspect-square"
                        style="background-image: url({{ asset('images/plus.png') }})"></label>
                    <!-- Put this part before </body> tag -->

                    <input type="checkbox" id="my-modal-newteam" class="modal-toggle" />
                    @include('Backend.equipe.create')
                </div>
            </div>

        </div>
    </section>
@endsection