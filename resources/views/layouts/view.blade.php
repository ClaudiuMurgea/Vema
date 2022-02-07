<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
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
    <body x-data="{
        mobileSide: false,
    }">
        <div class="min-h-full bg-gray-100">
            @include('layouts.navigation')
            <div class="py-1  bg-white border-x border-gray-200 mx-auto" style="max-width: 1366px;"></div>
            <div class="w-full h-full m-auto border border-t-0 border-gray-200 pr-4 bg-white" style="max-width: 1366px;">
                <div class="flex pb-12">
                    @include('layouts.sidebar')
              
                    <div class="h-1/6 flex flex-col w-full ml-1">
                        <div class="flex inline-flex border-b border-gray-200 mr-2 sm:mr-6 md:mr-10 justify-center lg:justify-start">
                            <span class="w-2.5 h-5 py-10  bg-no-repeat bg-cover" style="background-image: url(../svg/ArrowBack.SVG); background-size:100% 100%"></span>
                            <span class="text-3xl lg:text-4xl pb-3 pt-5 pl-5 font-extrabold lato__heavy">Title goes here</span>
                        </div>

                        <div class="h-1/6 flex flex-row w-full space-x-1 sm:space-x-4 space-y-8 md:space-x-10 md:space-y-10 lg:space-y-4 lg:space-x-12 pt-8 lg:pt-10">
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover mt-8 ml-2 sm:ml-10 md:ml-8 lg:ml-12 lg:mt-4" style="background-image: url(../svg/Ins.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Inv.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Pro.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Sub.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Pur.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Pla.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Per.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Cap.SVG); background-size:100% 100%"></span>
                        </div>  

                        <div class="h-1/6 flex flex-row w-full space-x-1 sm:space-x-4 space-y-8 md:space-x-10 md:space-y-10 lg:space-y-12 lg:space-x-12 pt-6">
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover mt-8 ml-2 sm:ml-10 md:ml-8 lg:ml-12 lg:mt-12" style="background-image: url(../svg/Aia.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Acc.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Cd5.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Contracts.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Dob.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Dra.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/W9.SVG); background-size:100% 100%"></span>
                        </div>
                        
                        <div class="h-1/6 flex flex-row w-full space-x-1 sm:space-x-4 space-y-8 md:space-x-10 md:space-y-10  lg:space-y-12 lg:space-x-12 pt-28">
                            <span class="py-4 sm:py-5 md:py-6 px-7 bg-no-repeat bg-cover mt-8 ml-2 sm:ml-10 md:ml-8 lg:ml-12 lg:mt-12" style="background-image: url(../svg/Shield.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Dollar.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/BulletText.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Sub.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Pur.SVG); background-size:100% 100%"></span>
                            <span class="scale-x-75 md:scale-x-100 py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Plans3.PNG); background-size:106% 106%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Cap.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Cap.SVG); background-size:100% 100%"></span>
                        </div>  

                        <div class="h-1/6 flex flex-row w-full space-x-1 sm:space-x-4 space-y-8 md:space-x-10 md:space-y-10 lg:space-y-12 lg:space-x-12 pt-6">
                            <span class="py-4 sm:py-5 md:py-6 px-7 bg-no-repeat bg-cover mt-8 ml-2 sm:ml-10 md:ml-8 lg:ml-12 lg:mt-12" style="background-image: url(../svg/Aia.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Calc.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Cd5.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Contracts.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Dob.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/Pen.SVG); background-size:100% 100%"></span>
                            <span class="py-4 sm:py-5 md:py-6 px-7  bg-no-repeat bg-cover" style="background-image: url(../svg/W9.SVG); background-size:100% 100%"></span>
                        </div>
                        <x-modal class="bg-violet-500" trigger="mobileSide"></x-modal>

                        <footer class="flex justify-center text-xs text-gray-400 pt-72">
                            <p>(c) 2020 Vema Group LLC </p> 
                            <div class="pl-12">
                                Built with  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="inline text-red-600 feather feather-activity"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                <span class="text-xs"> by SPLASHCREATIVE </span>
                            </div>
                        </footer>

                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>
