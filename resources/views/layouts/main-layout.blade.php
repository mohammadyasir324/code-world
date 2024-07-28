<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Main Layout</title>
</head>
<body class="relative text-gray-600 min-h-dvh pt-28 bg-gray-200">
    <div class=" text-lg w-full h-full">
        <div class="bg-sky-800 text-white w-full  py-5 flex justify-between px-10 absolute top-0">
            <div class="flex justify-between gap-10">
                <a href="/home" class="hover:text-teal-300 cursor-pointer">Request</a>
                <a href="/visitors" class="hover:text-teal-300 ">See List</a>
            </div>
            <a href="/register" class="hover:text-gray-300">logout</a>
        </div>
        @yield('content')
    </div>
    <div class="absolute -bottom-10 bg-gray-700 text-teal-300 w-full py-2 text-center">
        Afghan Power Hospital Copyright @ 2024
    </div>
</body>
</html>
