@extends('layouts.main-layout')

@section('content')
    <div class="bg-white flex flex-col w-4/6 mx-auto gap-6 p-5 rounded">
        <p class="text-2xl text-sky-700 font-bold border-b border-b-blue-600  w-32">All Visitors</p>
        @foreach($visitors as $visitor)
            <div class="bg-white shadow-md py-5 px-3 w-full border-2 border-gray-300 rounded-xl flex justify-between">
                <a href="/visitors/{{$visitor->id}} " class="text-sky-800 hover:text-orange-500 font-semibold">{{ $visitor->name }} </a>
                <p class="text-gray-400 font-semibold "> {{$visitor->gender}} </p>
            </div>
        @endforeach
    </div>
@endsection
