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
    <body class="max-h-full">
        <div class="min-h-fit"
            x-data="{
                mobileSide: false,
            }">
            @include('layouts.navigation')
            <div class="py-1 bg-white border-x border-gray-200 mx-auto" style="max-width: 1366px;"></div>
            <div class="w-full max-h-full">
                <div class="flex m-auto border border-y-0 border-gray-200"  style="max-width: 1366px;">
                    @include('layouts.sidebar')
                    <div class="container mx-auto py-6 h-56 w-full mx-auto lg:mr-14">
                        <h1 class="text-3xl font-bold text-center pb-8 sm:text-left sm:pb-3">Dashboard</h1>
                        <div class="w-full h-full rounded bg-gray-100 flex items-center">
                            <div class="flex wrap w-3/12 ml-2 sm:ml-4 md:ml-8 lg:ml-12 m-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity text-blue-500 ml-2 sm:ml-4 md:ml-8 lg:ml-12 mr-4"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                                
                                <div class="flex-col font-bold translate-y-1">
                                    <p>Total Projects</p>
                                    <p class="text-3xl pt-1">14</p>
                                </div>
                            </div>
                            <div class="border-r border-gray-400 text-gray-100 h-16">x</div>

                            <div class="flex wrap w-3/12 ml-2 sm:ml-4 md:ml-8 lg:ml-12 m-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity text-blue-500 ml-2 sm:ml-4 md:ml-8 lg:ml-12 mr-4"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>

                                <div class="flex-col font-bold translate-y-1">
                                    <p>Active Projects</p>
                                    <p class="text-3xl pt-1">14</p>
                                </div>
                            </div>
                            <div class="border-r border-gray-400 text-gray-100 h-16">x</div>

                            <div class="flex wrap w-3/12 ml-2 sm:ml-4 md:ml-8 lg:ml-12 m-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity text-blue-500 ml-2 sm:ml-4 md:ml-8 lg:ml-12 mr-4"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 15 15"></polyline></svg>
                                
                                <div class="flex-col font-bold translate-y-1">
                                    <p>Pending Projects</p>
                                        <p class="text-3xl pt-1">0</p>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <h2 class="font-semibold helvetica mt-16 text-center pb-4 sm:text-left sm:pb-2">Last activity on projects</h2>
                            <table class="w-full text-left">
                                <thead class="text-gray-400 text-sm bg-gray-100 leading-6 sm:leading-8 lg:leading-10">
                                    <th class="pl-4">#</th>
                                    <th>PROJECT</th>
                                    <th>ACTION</th>
                                    <th>BY</th>
                                    <th>DATE</th>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < 3; $i++)
                                        <tr class="border-b border-gray-300 text-xs sm:text-sm">
                                            <td class="pl-4">3124023004443</td>
                                            <td>Lorem ipsum dolor sit amet</td>
                                            <td>LoremIpsum</td>
                                            <td>John Smith</td>
                                            <td>10-05-2020</td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <x-modal class="bg-violet-500 p-4 " trigger="mobileSide"></x-modal>
                </div>
            </div>
        </div>
    </body>
</html>
