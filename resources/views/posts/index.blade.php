@extends('Layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-white p-4 rounded-md">
            <form action="{{ route('posts') }}" method="post" class="mb-4">
                @csrf
                <div class="flex flex-col mb-10">
                    <label class="text-sm sr-only" for="body">Message</label>
                    <textarea class="border rounded-md p-3 bg-gray-50 @error('body') border-red-700 @enderror"
                              name="body" id="body" cols="30" rows="4"
                              autocomplete="off" placeholder="Corps du message"></textarea>
                    @error('body')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <input class="p-3 hover:bg-blue-900 bg-blue-800 text-white rounded-md cursor-pointer shadow-md"
                       type="submit" value="Envoyer">
            </form>
            @if($posts->count())
                @foreach($posts as $post)
                   <x-post :post="$post"/>
                @endforeach

                {{ $posts->links() }}

            @else
                <p>Aucun article</p>
            @endif

        </div>
    </div>
@endsection
