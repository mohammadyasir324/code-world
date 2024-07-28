@extends('layouts.main-layout')

@section('content')
    <div class="bg-white py-10 px-10 mx-auto w-4/6 flex flex-col gap-6 rounded-2xl shadow-md">
        <p class="text-sky-800 font-bold text-2xl border-b-2 border-b-blue-500 w-fit">Order for <span class="">{{$visitor->name}}</span></p>
        <div class="border-sky-600 border-2 rounded-2xl py-5 px-3 flex flex-col gap-4">
            <p class="text-gray-500 font-semibold text-xl">Name: <span class="text-orange-600">{{$visitor->name}}</span></p>
            <p class="text-gray-500 font-semibold text-xl">Email: <span class="text-orange-600">{{$visitor->email}}</span></p>
            <p class="text-gray-500 font-semibold text-xl">Gender: <span class="text-orange-600">{{$visitor->gender}}</span></p>
            <p class="text-gray-500 font-semibold text-xl">Description: <span class="text-orange-600">{{$visitor->description}}</span></p>
        </div>

        <form action="/visitors/{{$visitor->id}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="flex gap-4">
                <button class="bg-blue-800 text-white py-1 px-3 rounded-md hover:bg-orange-500">Request Checked</button>
                <a href="/visitors/{{ $visitor->id }}/edit" class="bg-blue-800 text-white py-1.5 px-3 rounded-md hover:bg-orange-500">Edit Order</a>
            </div>
        </form>

        <a href="/visitors" class="text-sky-800 border-b-2 border-b-sky-800 hover:text-sky-600 hover:border-b-sky-600 w-fit">Check all requests</a>
    </div>
@endsection
