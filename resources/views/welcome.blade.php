<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/vema.js') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
        <title>Vema</title>
    </head>
    <body>
        <x-app-layout>
        </x-app-layout>
    </body>
</html>
