@extends('layouts.main-layout')

@section('content')
    <div class="h-5/6 w-full bg-white -mt-8 flex justify-between">
        <img
        src="/img/hospital.jpg"
        alt="The mail picture of hospital"
        class="w-4/6 h-full"
        >
        {{-- <img src="/Dr-reservation.png" alt="The mail picture of hospital"> --}}
        <div class="bg-white shadow-lg py-10 px-5 w-2/6">
            <div class="bg-white shadow-xl rounded-xl py-10 px-5 mb-10 border-2 border-blue-800">
                <a href="/visitors/create" class="text-blue-800 font-semibold text-2xl hover:text-orange-700">Request guidance for your health</a>
            </div>
            <div class="bg-white shadow-xl rounded-xl py-10 px-5 mb-10 border-2 border-blue-800">
                <p> {{session('message')}} </p>
            </div>

            <p class="text-lg font-semibold text-gray-600">You can get free guidance from our Experts 24 hours a day, 7 days a week!</p>
        </div>
    </div>
@endsection
