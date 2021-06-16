@extends('Layouts.app')

@section('content')
    <div class="w-10/12 mx-auto bg-white p-4">
        <h1 class="capitalize text-xl ">étudiants</h1>
        <div class="flex">
            <div class="w-6/12 p-4 bg-gray-100 mr-10 rounded-md">
                <ul>
                    @foreach($students as $student)
                        <li>
                            <div>{{ $student->full_name }}</div>
                            <h2>diplômes:</h2>
                            <ul class="ml-10">
                                @foreach($student->diplomas as $diploma)
                                    <li>
                                        <div>{{$diploma->name}}</div>
                                        <div class="text-sm">
                                            @if($diploma->graduates->diploma_obtaining_date)
                                                {{  $diploma->graduates->diploma_obtaining_date   }}
                                            @endif
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
            <form class="flex-1" action="{{ route('students') }}" method="post">
                @csrf
                <div class="flex flex-col mb-10">
                    <label class="text-sm sr-only" for="civility">Civility</label>
                    <input class="border rounded-md p-3 @error('civility') border-red-700 @enderror" type="text"
                           name="civility" id="civility"
                           autocomplete="off" value="{{ old('civility') }}" placeholder="Civilité">
                    @error('civility')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-col mb-10">
                    <label class="text-sm sr-only" for="full_name">Nom complet</label>
                    <input class="border rounded-md p-3 @error('full_name') border-red-700 @enderror" type="text"
                           name="full_name" id="full_name"
                           autocomplete="off" value="{{ old('full_name') }}" placeholder="Nom complet">
                    @error('full_name')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-col mb-10">
                    <label class="text-sm sr-only" for="is_male">Sexe</label>
                    <input class="border rounded-md p-3 @error('is_male') border-red-700 @enderror" type="text"
                           name="is_male" id="is_male"
                           autocomplete="off" value="{{ old('is_male') }}" placeholder="Sexe">
                    @error('is_male')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-col mb-10">
                    <label class="text-sm sr-only" for="birth_date">Date de Naissance</label>
                    <input class="border rounded-md p-3 @error('birth_date') border-red-700 @enderror" type="date"
                           name="birth_date" id="birth_date"
                           autocomplete="off" value="{{ old('birth_date') }}" placeholder="Date de naissance">
                    @error('birth_date')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <hr class="py-5">

                <div class="flex flex-col mb-10">
                    <label class="text-sm sr-only" for="diploma_name">Grade</label>
                    <input class="border rounded-md p-3 @error('diploma_name') border-red-700 @enderror" type="text"
                           name="diploma_name" id="diploma_name"
                           autocomplete="off" value="{{ old('diploma_name') }}" placeholder="Grade">
                    @error('diploma_name')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <input class="p-3 hover:bg-blue-900 bg-blue-800 text-white rounded-md cursor-pointer shadow-md w-full"
                       type="submit">
            </form>
        </div>
    </div>
@endsection
