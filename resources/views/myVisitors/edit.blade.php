@extends('layouts.main-layout')

@section('content')
    <div class="flex bg-white -mt-5">
        <div class="flex flex-col w-3/6">
            <div class="flex flex-col w-5/6 h-full border-2 shadow-md pb-10 rounded-t-2xl overflow-hidden">
                <img
                    src="/img/Dr-reservation.png"
                    alt="The expert card photo"
                    class="w-full h-auto"
                >
                <p class="pl-5 text-sky-900 text-2xl font-semibold mt-5">Dr.Mansurah Mirzada</p>
                <p class="pl-5 text-gray-400">Expert in Heart disease</p>
            </div>
        </div>


        <form action="/visitors/{{ $visitor->id }}" method="POST" class="w-3/6 border-2 border-gray-300 py-10 px-5 flex flex-col gap-5 rounded-xl">
            @csrf
            @method('PUT')
            <div class="border-2 border-gray-300 shadow-md py-5 px-3 rounded-lg flex gap-10 items-center bg-gray-100">
                <label for="name" class="font-semibold text-sky-800 text-lg">Your name: </label>
                <input type="text" name="name" id="name" value="{{ $visitor->name }}" class="outline-0 py-2 px-2 rounded-2xl w-4/6">
            </div>
            <div class="border-2 border-gray-300 shadow-md py-5 px-3 rounded-lg flex gap-10 items-center bg-gray-100">
                <label for="email" class="font-semibold text-sky-800 text-lg">Your email: </label>
                <input type="email" name="email" id="email" value="{{ $visitor->email }}" class="outline-0 py-2 px-2 rounded-2xl w-4/6">
            </div>
            <div class="border-2 border-gray-300 shadow-md py-5 px-3 rounded-lg flex gap-10 items-center bg-gray-100">
                <label for="gender" class="font-semibold text-sky-800 text-lg">Your gender:</label>
                <select name="gender" id="gender" class="outline-0 py-2 px-2 rounded-2xl w-4/6">
                    <option value="male" {{ $visitor->gender == 'male' ? 'selected' : ''}}>Male</option>
                    <option value="female" {{ $visitor->gender == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="none" {{ $visitor->gender == 'none' ? 'selected' : '' }}>Don't like to say</option>
                </select>
            </div>
            <div class="border-2 border-gray-300 shadow-md py-5 px-3 rounded-lg flex gap-2 flex-col">
                <label for="description" class="font-semibold text-sky-800 text-lg">Explain your problem: </label>
                <textarea name="description" id="description" cols="30" rows="5" class="text-gray-500 font-semibold rounded-xl border-gray-300 outline-0">{{ $visitor->description }}</textarea>
            </div>
            <input type="submit" value="Update Request" class="bg-sky-800 text-white hover:bg-orange-600 py-2 px-4 rounded-lg w-56 mx-auto">
        </form>
    </div>
@endsection


{{--
    For textarea we can not give value inside of opening tag
    so we mut give value between the closing and opening tag!

    {{$visitor->description}}
--}}
