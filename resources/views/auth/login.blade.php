@extends('Layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-4 rounded-md">
            @if(session('status'))
                <h3 class="w-full text-white bg-red-600 text-sm text-center p-4 mb-4 rounded-md">
                    {{ session('status') }}
                </h3>
            @endif
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="flex flex-col mb-10">
                    <label class="text-sm sr-only" for="email">Email</label>
                    <input class="border rounded-md p-3 @error('email') border-red-700 @enderror" type="text"
                           name="email" id="email"
                           autocomplete="off" value="{{ old('email') }}" placeholder="Email">
                    @error('email')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-col mb-5">
                    <label class="text-sm sr-only" for="password">Mot de passe</label>
                    <input class="border rounded-md p-3 @error('password') border-red-700 @enderror" type="password"
                           name="password" id="password"
                           autocomplete="off" placeholder="Mot de passe">
                    @error('password')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex items-center mb-10">
                    <input class="border rounded-md mr-3"  type="checkbox"
                           name="remember" id="remember">
                    <label class="text-sm" for="remember">Se souvenir de moi</label>
                </div>

                <input class="p-3 hover:bg-blue-900 bg-blue-800 text-white rounded-md cursor-pointer shadow-md w-full"
                       type="submit">
            </form>
        </div>
    </div>
@endsection
