@props(['trigger'])

<div
    class="flex fixed top-0 left-0 bg-gray-500 bg-opacity-60 items-center w-full h-full"
    x-show="mobileSide"
    x-on:click.self="mobileSide = false"
    x-on:keydown.escape.window="mobileSide = false"
    x-cloak
>
    <div {{ $attributes->merge(['class' => 'm-auto bg-gray-200 shadow-2xl rounded-xl']) }}>
        <button class="float-right text-white" aria-label="Close" x-on:click="mobileSide = false">✖</button>
        <div class="p-8">
            <div class="flex items-center">
                <a class="hover:text-slate-900 hover:bg-violet-300 hover:rounded-lg w-full" href="javascript:void(0)" class="ml-2">
                    <div class="w-full hover:text-amber-200 text-white p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="inline ml-2 mr-1 feather feather-activity hover:text-violet-600"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                        <span class="hover:text-violet-600">Overview</span> 
                    </div>
                </a>
            </div> 
            <div class="flex items-center">
                <a class="hover:text-slate-900 hover:bg-violet-300 hover:rounded-lg w-full" href="javascript:void(0)" class="ml-2">
                    <div class="w-full hover:text-amber-200 text-white p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="inline ml-2 mr-1 feather feather-activity hover:text-violet-600"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span class="hover:text-violet-600">Company</span> 
                    </div>
                </a>
            </div> 

            <div class="flex items-center">
                <a class="hover:text-slate-900 hover:bg-violet-300 hover:rounded-lg w-full" href="javascript:void(0)" class="ml-2">
                    <div class="w-full hover:text-amber-200 text-white p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="inline ml-2 mr-1 feather feather-activity hover:text-violet-600"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span class="hover:text-violet-600">Users</span> 
                    </div>
                </a>
            </div>
            <div class="flex items-center">
                <a class="hover:text-slate-900 hover:bg-violet-300 hover:rounded-lg w-full" href="javascript:void(0)" class="ml-2">
                    <div class="w-full hover:text-amber-200 text-white p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="inline ml-2 mr-1 feather feather-activity  hover:text-violet-600"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                        <span class=" hover:text-violet-600">Clients</span> 
                    </div>
                </a>
            </div>
            <div class="flex items-center">
                <a class="hover:text-slate-900 hover:bg-violet-300 hover:rounded-lg w-full" href="javascript:void(0)" class="ml-2">
                    <div class="w-full hover:text-amber-200 text-white p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="inline ml-2 mr-1 feather feather-activity  hover:text-violet-600"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                        <span class=" hover:text-violet-600">Projects</span> 
                    </div>
                </a>
            </div>
            <div class="flex items-center">
                <a class="hover:text-slate-900 hover:bg-violet-300 hover:rounded-lg w-full" href="javascript:void(0)" class="ml-2 ">
                    <div class="w-full hover:text-amber-200 text-white p-3">
                        <span class="iconify inline ml-2 mr-1  hover:text-violet-600" data-icon="feather:dollar-sign" data-width="24"></span>
                        <span class=" hover:text-violet-600">POs</span> 
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

