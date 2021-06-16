@extends('Layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-4 rounded-md">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="flex flex-col mb-10">
                    <label class="text-sm sr-only" for="name">Nom</label>
                    <input class="border rounded-md p-3 @error('name') border-red-700 @enderror" type="text" name="name" id="name"
                           autocomplete="off" value="{{ old('name') }}" placeholder="Nom complet">
                    @error('name')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-col mb-10">
                    <label class="text-sm sr-only" for="username">Nom Utilisateur</label>
                    <input class="border rounded-md p-3   @error('username') border-red-700 @enderror" type="text" name="username" id="username"
                           autocomplete="off" value="{{ old('username') }}" placeholder="Nom utilisateur">
                    @error('username')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-col mb-10">
                    <label class="text-sm sr-only" for="email">Email</label>
                    <input class="border rounded-md p-3 @error('email') border-red-700 @enderror" type="text" name="email" id="email"
                           autocomplete="off" value="{{ old('email') }}" placeholder="Email">
                    @error('email')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-col mb-10">
                    <label class="text-sm sr-only" for="password">Mot de passe</label>
                    <input class="border rounded-md p-3 @error('password') border-red-700 @enderror" type="password" name="password" id="password"
                           autocomplete="off" placeholder="Mot de passe">
                    @error('password')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-col mb-10">
                    <label class="text-sm sr-only" for="password_confirmation">Confirme mot de passe</label>
                    <input class="border rounded-md p-3 @error('password_confirmation') border-red-700 @enderror" type="password" name="password_confirmation"
                           id="password_confirmation"
                           autocomplete="off" placeholder="Confirme mot de passe">
                    @error('password_confirmation')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <input class="p-3 hover:bg-blue-900 bg-blue-800 text-white rounded-md cursor-pointer shadow-md w-full"
                       type="submit">
            </form>
        </div>
    </div>
@endsection
