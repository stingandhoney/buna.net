@extends('Layouts.app')
@section('content')
<div class="p-5 w-5/12 mx-auto py-10 my-16  border rounded-md text-gray-600 hover:shadow">
    <h3 class="font-thin text-3xl text-gray-700 mb-10 text-center">Enregistrement des catégories</h3>
{{--    @if ($errors->any())--}}
{{--        <div class="bg-red-600 text-white text-sm p-2 mb-5 rounded-md">--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}
    <form action="{{ route('category.create') }}" method="post">
        @csrf
        <div class="flex flex-col mb-10">
            <label class="text-sm " for="denomination">Dénomination</label>
            <input class="border rounded-md p-3" type="text" name="denomination" id="denomination"
                   autocomplete="off" value="{{ old('denomination') }}">
            @error('denomination')
            <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div class="flex flex-col mb-10">
            <label class="text-sm " for="base_symbol">Cote de base</label>
            <input class="border rounded-md p-3" type="text" name="base_symbol" id="base_symbol"
                   autocomplete="off" value="{{ old('base_symbol') }}">
            @error('base_symbol')
            <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <input class="p-3 hover:bg-blue-900 bg-blue-800 text-white rounded-md cursor-pointer shadow-md w-full" type="submit">
    </form>

</div>

@stop
