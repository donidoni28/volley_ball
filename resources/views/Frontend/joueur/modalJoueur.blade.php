<div class="modal">
    <div class="modal-box relative">
        <label for="my-modal-{{ $item->id }}" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-inherit">
            <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">update player</h2>
            <form action="{{ route('joueur.destroy', [$item->equipe->id, $item->id]) }}" method="post">
                @csrf
                @method('delete')
                
                <button class="btn" type="submit">Effacer joueur</button>
            </form>
            <form action="{{ route('joueur.update', [$item->equipe->id, $item->id]) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="prenom">Prenom</label>
                        <input name="prenom" id="prenom" type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                            value="prenom">
                    </div>

                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="nom">Nom</label>
                        <input name="nom" id="nom" type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                            value="nom">
                    </div>

                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="age">Age</label>
                        <input name="age" id="age" type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                            value="age">
                    </div>

                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="phone">Telephone</label>
                        <input name="phone" id="phone" type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                            value="phone">
                    </div>

                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="mail">Mail</label>
                        <input name="mail" id="mail" type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                            value="mail">
                    </div>

                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="origine">Origine</label>
                        <input name="origine" id="origine" type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                            value="origine">
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
        </section>
    </div>
</div>

