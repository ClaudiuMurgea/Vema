<div class="min-h-full w-full  flex flex-col items-center pt-6 sm:pt-0">
    <div>
        @if(isset($logo))
            {{ $logo }}
        @endif
    </div>
{{--  sm:max-w-md mt-10 px-6 py-4 bg-white shadow-md  sm:rounded-lg  talem from beneath --}}
    <div class="min-h-full">
        <div class="w-full min-h-full">
            <div>
            {{ $slot }}
            </div>
        </div>
    
    </div>
   
</div>
