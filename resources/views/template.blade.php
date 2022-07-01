<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
    <title>Document</title>
</head>
<body>
    <div class="container px-4 mx-auto">
        <header class="flex justify-between items-center py-4">
            <div class="flex items-center flex-grow gap-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/elefante.png')}}" class="h-12" alt="">
                </a>
                <form action="{{ route('home') }}" method="GET" class="flex-grow">
                    <input class="border border-gray-400 rounded py-2 px-4 w-1/2" type="text" name="search" value="{{ request('search') }}" placeholder="Buscar" >
                </form>
            </div>
            @auth
            <a href="{{ route('dashboard') }}">Dashboard</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            @endauth
        </header>
        <div class="opacity-60 h-px mb-8" style="
            background-image: linear-gradient(to right top, 
            #051937, 
            #004d7a, 
            #008793,
            #00bf72, 
            #a8eb12
        );"></div>
        @yield('content')
        <p class="py-16">
             <img src="{{ asset('assets/img/elefante.png')}}" class="h-12 mx-auto" alt="">
        </p>
    </div>
</body>
</html>