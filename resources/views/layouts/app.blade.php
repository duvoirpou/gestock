<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @livewireStyles
    </head>
    <body>

        {{ $slot }}

        @livewireScripts
        <script src="{{ asset('js/app.js') }}" defer data-turbolinks-track="reload"></script>
        {{-- <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/turbolinks@5.2.0/dist/turbolinks.min.js"></script>
        {{-- <script src="{{ asset('js/livewire-turbolinks.js') }}" data-turbolinks-eval="false"></script> --}}
    </body>
</html>

