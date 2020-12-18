<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>{{ $title ?? 'Live Guestbook' }}</title> 
        @livewireStyles
    </head>
    <body class="bg-gray-800">

        <header>
            <div class="container mx-auto px-5 py-8 max-w-screen-md bg-black mt-5 rounded-t-lg text-gray-300">
                <h2 class="text-2xl">{{ __('Live Guestbook') }}</h2>
                <p class="text-gray-400">{{ __('You can write anything and then everyone can read it !') }}</p>
            </div>
        </header>

        <div class="container mx-auto px-5 max-w-screen-md bg-black text-gray-300">
            {{ $slot }}
        </div>
         
        <header>
            <div class="container mx-auto px-5 py-5 max-w-screen-md bg-black mb-5 rounded-b-lg text-gray-500 text-center text-sm">
                <h2>Live Guestbook</h2>
            </div>
        </header>

        @livewireScripts
    </body>
</html>