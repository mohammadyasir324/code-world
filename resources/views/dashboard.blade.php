<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        {{ __("You're logged in!") }}
                    </div>

                    <a href="/home" class="text-blue-700 border-b-2 border-b-blue-500">You can request for help now</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
