@extends('Layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-white p-4 rounded-md">
            Accueil
            <div class="my-5">
                <files/>
            </div>
            <form class="mt-12">
{{--                <input-text info="Hello"/>--}}
               <div class="relative mt-6">
                    <input type="text"
                           autocomplete="off"
                           id="email"
                           name="email"
                           class="peer h-10 w-full border-b-2 border-gray-300 placeholder-transparent text-gray-900 focus:outline-none focus:border-rose-600"
                           placeholder="Adresse Email"
                    />
                    <label for="email"
                           class="absolute left-0 -top-3.5 transition-all text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"
                    >
                        Adresse Email
                    </label>
                </div>

                <div class="relative mt-6">
                    <input type="password"
                           autocomplete="off"
                           id="password"
                           name="password"
                           class="peer h-10 w-full border-b-2 border-gray-300 placeholder-transparent text-gray-900 focus:outline-none focus:border-rose-600"
                           placeholder="Mot de passe"
                    />
                    <label for="password"
                           class="absolute left-0 -top-3.5 transition-all text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"
                    >
                        Mot de passe
                    </label>
                </div>
            </form>
        </div>
    </div>
@endsection
