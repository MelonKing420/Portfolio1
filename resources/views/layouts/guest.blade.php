<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="bg-zinc-700 antialiased text-white">
        <header class="flex py-2 px-4 text-white bg-zinc-800">
            <div class="hidden sm:block">
                <a>
                    <a href="{{ url('/home')}}"><img src="{{ asset ('/img/koen.png') }} " class="w-[50] h-[75px] mx-auto p-3">
                </a>
            </div>
            <nav class="flex justify-center w-full items-center pt-4 sm:block">
                <ul class="flex ">
                    <a href="{{ url('/')}}" class="bg-black-700 p-2 rounded-lg hover:bg-cyan-400 pt-3">Home</a>
                    <a href="{{ url('/projects')}}" class="bg-black-700 p-2 rounded-lg hover:bg-cyan-400 pt-3">Projects</a>
                    <a href="{{ route('contact.create')}}" class="bg-black-700 p-2 rounded-lg hover:bg-cyan-400 pt-3">Contact</a>
                    <a href="{{ url('/login')}}" class="bg-black-700 p-2 rounded-lg hover:bg-cyan-400 pt-3">Login</a>
                </ul>
            </nav>
        </header>


        <div class="font-sans">
            {{ $slot }}
        </div>



        <footer class="flex justify-between fixed bottom-1 text-stone-50">
            <ul>
                <a href="https://twitter.com" target="_blank"><img src="{{ asset ('img/link.png') }} "  class="w-[50] h-[50px] mx-auto p-3"></a>
                <a href="https://facebook.com" target="_blank"><img src="{{ asset ('img/facebook.png') }} " class="w-[50] h-[50px] mx-auto p-3"></a>
                <a href="https://instagram.com" target="_blank"><img src="{{ asset ('img/instagram.png') }} " class="w-[50] h-[50px] mx-auto p-3"></a>
            </ul>
            <p class="fixed right-2 bottom-12">
                © 2022 Koen <br>
                All rights reserved
            </p>
        </footer>
    </body>
</html>
