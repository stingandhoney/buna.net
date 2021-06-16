@extends('Layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-white p-4 rounded-md">
           <x-post :post="$post"/>
        </div>
    </div>
@endsection
