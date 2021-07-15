<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>BUNA - @yield('title')</title>
</head>
<body class="antialiased bg-gray-100">
<div id="app">
    <nav class="p-4 flex justify-between items-center bg-blue-900 text-white mb-6">
        <ul class="flex">
            <li><a class="px-2" href="/">Accueil</a></li>
            <li><a class="px-2" href="{{ route('dashboard') }}">Tableau de bord</a></li>
            <li><a class="px-2" href="{{ route('posts') }}">Articles</a></li>
            <li><a class="px-2 capitalize" href="{{ route('students') }}">étudiants</a></li>
        </ul>
        <ul class="flex">
            {{--        @if(auth()->user())--}}
            @auth
                <li><a class="px-2" href="#">{{auth()->user()->username}}</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="post"  class="px-2 inline">
                        @csrf
                        <button type="submit">Déconnexion</button>
                    </form>
                </li>
            @endauth
            {{--        @else--}}
            @guest
                <li><a class="px-2" href="{{ route('register') }}">Enregistrement</a></li>
                <li><a class="px-2" href="{{ route('login') }}">Connexion</a></li>
            @endguest
            {{--@endif--}}
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>
    {{--<router-view></router-view>--}}
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

