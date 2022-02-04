<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/vema.js') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="min-h-full bg-gray-100">
            @include('layouts.navigation')
            <div class="py-1  bg-white border-x border-gray-200 mx-auto" style="max-width: 1366px;"></div>
            <div class="w-full h-full m-auto border border-t-0 pr-4 bg-white" style="max-width: 1366px;">
                <div class="mr-7 pb-12">
                    <!-- Sidebar starts -->
                    @include('layouts.sidebar')
                    <span class="w-2.5 h-5 py-2 bg-no-repeat bg-cover" style="background-image: url(../svg/ArrowBack.SVG); background-size:100% 100%"></span>
                    <span class="text-4xl pb-3 pt-5 pl-5 font-extrabold lato__heavy">Title goes here</span>
                    <div>
                        <span class="w-40 h-40 py-40 px-40 bg-no-repeat bg-cover" style="background-image: url(../svg/Ins.SVG); background-size:100% 100%"></span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
