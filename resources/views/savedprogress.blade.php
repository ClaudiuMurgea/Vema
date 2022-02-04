<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/vema.js') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
        <title>Vema</title>
    </head>
    <body>

        <div class="w-full h-full">
            <div class="flex">
                
                <!-- Sidebar starts -->
                <div  style="min-height: 700px" class="absolute lg:relative w-2/12 h-screen  hidden lg:block">
                    <div class="h-16 w-full flex items-center px-8">
                        <a href="#" class="flex between py-4 px-2">
                            <div class="space-y-2 float-left">
                                <div class="w-5 h-0.5 bg-gray-400"></div>
                                <div class="w-6 h-0.5 bg-gray-400"></div>
                                <div class="w-4 h-0.5 bg-gray-400"></div>
                            </div>
                        </a>
                        <h1 class="font-extrabold pl-2 text-blue-700 text-xl">Vema Group LLC </h1>
                    </div>
                    <ul class="py-6">
                        <li class="pl-6 cursor-pointer text-white text-sm leading-3 hover:font-bold tracking-normal pt-5 text-indigo-700 focus:text-indigo-700 focus:outline-none">
                            <div class="flex items-center hover:bg-purple-50 p-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                                </div>
                                <a href="javascript:void(0)" class="ml-2">Overview</a>
                            </div>
                        </li>
                        <li class="pl-6 cursor-pointer text-gray-600 text-sm leading-3 hover:font-bold tracking-normal hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                            <div class="flex items-center hover:bg-purple-50 p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <a href="javascript:void(0)" class="ml-2">Company</a>
                            </div>
                        </li>
                        <li class="pl-6 cursor-pointer text-gray-600 text-sm leading-3 hover:font-bold tracking-normal hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                            <div class="flex items-center hover:bg-purple-50 p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <a href="javascript:void(0)" class="ml-2">Users</a>
                            </div>
                        </li>
                        <li class="pl-6 cursor-pointer text-gray-600 text-sm leading-3 hover:font-bold tracking-normalhover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                            <div class="flex items-center hover:bg-purple-50 p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                                <a href="javascript:void(0)" class="ml-2">Clients</a>
                            </div>
                        </li>
                        <li class="pl-6 cursor-pointer text-gray-600 text-sm leading-3 hover:font-bold tracking-normal hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                            <div class="flex items-center hover:bg-purple-50 p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                                <a href="javascript:void(0)" class="ml-2">Projects</a>
                            </div>
                        </li>
                        <li class="pl-6 cursor-pointer text-gray-600 text-sm leading-3 hover:font-bold tracking-normal hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                            <div class="flex items-center hover:bg-purple-50 p-3">
                                <span class="iconify" data-icon="feather:dollar-sign" data-width="24"></span>
                                <a href="javascript:void(0)" class="ml-2">POs</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--Mobile responsive sidebar-->
                <div class="absolute w-full h-full z-40 transform -translate-x-full lg:hidden" id="mobile-nav">
                    <div class="g-gray-800 opacity-50b absolute h-full w-full lg:hidden" onclick="sidebarHandler(false)"></div>
                    <div class="absolute z-40 sm:relative w-64 md:w-96 shadow pb-4 bg-gray-100 lg:hidden transition duration-150 ease-in-out h-full">
                        <div class="flex flex-col justify-between h-full w-full">
                            <div>
                                <div class="flex items-center justify-between px-8">
                                    <div class="h-16 w-full flex items-center">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg1.svg" alt="logo">
                                    </div>
                                    <button aria-label="close sidebar" id="closeSideBar" class="flex items-center justify-center h-10 w-10 focus:outline-none focus:ring-2 focus:ring-gray-800 rounded" onclick="sidebarHandler(false)">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg2.svg" alt="cross">
                                    </button>
                                </div>
                                <ul class="py-6">
                                    <li class="pl-6 cursor-pointer text-white text-sm leading-3 tracking-normal pb-4 pt-5 text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                        <div class="flex items-center">
                                            <div class="w-6 h-6 md:w-8 md:h-8">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <rect x="4" y="4" width="6" height="6" rx="1" />
                                                    <rect x="14" y="4" width="6" height="6" rx="1" />
                                                    <rect x="4" y="14" width="6" height="6" rx="1" />
                                                    <rect x="14" y="14" width="6" height="6" rx="1" />
                                                </svg>
                                            </div>
                                            <a href="javascript:void(0)" class="ml-2 xl:text-base md:text-2xl text-base">Dashboard</a>
                                        </div>
                                    </li>
                                    <li class="pl-6 cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-4 mb-4 py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                        <div class="flex items-center">
                                            <div class="w-6 h-6 md:w-8 md:h-8">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-puzzle" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1" />
                                                </svg>
                                            </div>
                                            <a href="javascript:void(0)" class="ml-2 xl:text-base md:text-2xl text-base">Products</a>
                                        </div>
                                    </li>
                                    <li class="pl-6 cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mb-4 py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                        <div class="flex items-center">
                                            <div class="w-6 h-6 md:w-8 md:h-8">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <polyline points="8 16 10 10 16 8 14 14 8 16" />
                                                    <circle cx="12" cy="12" r="9" />
                                                </svg>
                                            </div>
                                            <a href="javascript:void(0)" class="ml-2 xl:text-base md:text-2xl text-base">Performance</a>
                                        </div>
                                    </li>
                                    <li class="pl-6 cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                        <div class="flex items-center">
                                            <div class="w-6 h-6 md:w-8 md:h-8">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <polyline points="7 8 3 12 7 16" />
                                                    <polyline points="17 8 21 12 17 16" />
                                                    <line x1="14" y1="4" x2="10" y2="20" />
                                                </svg>
                                            </div>
                                            <a href="javascript:void(0)" class="ml-2 xl:text-base md:text-2xl text-base">Deliverables</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-full">
                                <div class="flex justify-center mb-4 w-full px-6">
                                    <div class="relative w-full">
                                        <div class="text-gray-600 absolute ml-4 inset-0 m-auto w-4 h-4">
                                           <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg3.svg" alt="Search">
                                        </div>
                                        <input class="bg-gray-200 focus:outline-none rounded w-full text-sm text-gray-600 placeholder-gray-600 pl-10 py-2" type="text" placeholder="Search" />
                                    </div>
                                </div>
                                <div class="">
                                    <div class="w-full flex items-center justify-between px-6 pt-1">
                                        <div class="flex items-center">
                                            <img alt="profile-pic" role="img" src="https://tuk-cdn.s3.amazonaws.com/assets/components/boxed_layout/bl_1.png" class="w-8 h-8 rounded-md" />
                                            <p class="md:text-xl text-gray-800 text-base leading-4 ml-2">Jane Doe</p>
                                        </div>
                                        <ul class="flex">
                                            <li class="cursor-pointer text-white pt-5 pb-3">
                                                <a aria-label="open chats" href="javascript:void(0)">
                                                   <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg4.svg" alt="chats">
                                                </a>
                                            </li>
                                            <li aria-label="open notifications" class="cursor-pointer text-white pt-5 pb-3 pl-3">
                                                <a aria-label="open notifications"  href="javascript:void(0)">
                                                   <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg5.svg" alt="notifications">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Mobile responsive sidebar-->
                <!-- Sidebar ends -->
                <div class="w-full">
                    <!-- Navigation starts -->
                    <nav class="h-16 flex items-center lg:items-stretch justify-end lg:justify-between bg-white relative z-10">
                        <div class="lg:flex w-full pr-6">
                            <div class="w-1/2 h-full hidden lg:flex items-center pl-6 pr-24">
                               
                            </div>
                            <div class="w-1/2 hidden lg:flex">
                                <div class="w-full flex items-center pl-8 justify-end">
                              
                                    <div  class="h-full w-20 flex items-center justify-center border-r-2 mr-4 cursor-pointer text-gray-600 ">
                                        <button aria-label="open chats" class="focus:outline-none focus:ring-2 focus:ring-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="15 3 21 3 21 9"></polyline><polyline points="9 21 3 21 3 15"></polyline><line x1="21" y1="3" x2="14" y2="10"></line><line x1="3" y1="21" x2="10" y2="14"></line></svg>
                                        </button>
                                    </div>
                                    <div class="flex items-center relative cursor-pointer" onclick="dropdownHandler(this)">
                                        <div class="rounded-full">
                                            <ul class="p-2 w-full border-r bg-white absolute rounded left-0 mt-12 sm:mt-16 hidden">
                                                <li class="flex w-full justify-between text-gray-600 hover:text-indigo-700 cursor-pointer items-center">
                                                    <div class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" />
                                                            <circle cx="12" cy="7" r="4" />
                                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                        </svg>
                                                        <a href="javascript:void(0)" class="text-sm ml-2">My Profile</a>
                                                    </div>
                                                </li>
                                                <li class="flex w-full justify-between text-gray-600 hover:text-indigo-700 cursor-pointer items-center mt-2">
                                                    <div class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" />
                                                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                                            <path d="M7 12h14l-3 -3m0 6l3 -3" />
                                                        </svg>
                                                        <a href="javascript:void(0)" class="text-sm ml-2">Sign out</a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="relative">
                                                {{-- <img class="rounded-full h-10 w-10 object-cover" src="https://tuk-cdn.s3.amazonaws.com/assets/components/sidebar_layout/sl_1.png" alt="display avatar" role="img" /> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <div class="w-2 h-2 rounded-full bg-green-400 border border-white absolute inset-0 mb-0 mr-0 m-auto"></div>
                                            </div>
                                        </div>
                                        <button aria-label="open profile options" class="cursor-pointer text-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-600 ">
                                           <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg6.svg" alt="down">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button aria-label="Main Menu" class="text-gray-600 mr-8 visible lg:hidden relative focus:outline-none focus:ring-2 focus:ring-gray-600 " onclick="sidebarHandler(true)" id="menu">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg7.svg" alt="toggler">
                        </button>
                    </nav>
                    <!-- Navigation ends -->
                    <!-- Remove class [ h-64 ] when adding a card block -->
                    {{-- <div class="container mx-auto py-10 h-64 md:w-4/5 w-11/12 px-6">
                        <!-- Remove class [ border-dashed border-2 border-gray-300 ] to remove dotted border -->
                        <div class="w-full h-full rounded border-dashed border-2 border-gray-300">
                            <!-- Place your content here -->
                        </div>
                    </div> --}}
                </div>
            </div>
          
          
        </div>
    
    </body>
</html>
