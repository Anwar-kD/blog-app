<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Mes postes') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">
                    @foreach ($postes as $poste)
                    <div class="flex">
                        <div>
                            <p class="font-semibold text-lg">{{ $poste->titre }} -
                                {{$poste->description}}
                            </p>
                        </div>
                        <form method="post" action="{{ route('suppressionProduit') }}">
                            @csrf
                            <button type="submit" name="id_produit" value="{{ $poste->id_poste }}" class="w-5">
                                <img type="image" src="{{ asset('img/delete.png') }}" alt="Supprimer un produit" />
                            </button>
                        </form>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
