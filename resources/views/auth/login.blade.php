<x-guest-layout>
    <div class="w-full flex bg-gray-50 max-h-full">
        {{-- 2xl:pb-64 xl:pb-44 lg:pb-40 md:pb-36 --}}
        <div class="w-2/4 min-h-fit py-40
            sm:py-40 sm:mx-0
            md:py-28 md:ml-0
            lg:pt-28 lg:ml-6
            xl:pt-28 xl:ml-16
            2xl:py-24 2xl:ml-56">

            <div class="flex w-full h-full bg-white py-0 border">

            <x-auth-card>
                <!-- Session Status -->
                <x-auth-session-status class="pb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="pb-4" :errors="$errors" />

                    <h1 class="font-extrabold pl-1 sm:pl-2 md:pl-0 text-blue-700 text-xl px-0 helvetica pt-1 md:pt-4 md:text-2xl">Vema Group LLC</h1>
                    <h2 class="font-extrabold pl-1 sm:pl-2 md:pl-0 helvetica md:pt-28 md:pb-12 pb-6 pt-12 text-2xl md:text-4xl">Log in</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email Address -->
                        <div class="pl-1 sm:pl-2 md:pl-0">
                            <x-label for="email" :value="__('Email Address')" />

                            <input class="mt-1 w-56 md:w-80 outline-0 border-none border-b border-gray-300 rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" name="email" :value="old('email')" required autofocus placeholder="example@mail.com">
                            <hr class="pb-2 md:pb-3 mr-1 sm:mr-0">
                        </div>

                        <!-- Password -->
                        <div class="pt-3 pl-1 sm:pl-2 md:pl-0">
                            <x-label for="password" :value="__('Password')" />
                        
                            <input id="password" class="mt-1 w-56 md:w-80 outline-0 border-none border-b border-gray-300 rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="Enter your password" >
                            <hr class="pb-3 md:pb-4 mr-1 sm:mr-0">
                        </div>

                        <!-- Remember Me -->
                        <div class="block pt-4 pl-1 sm:pl-2 md:pl-0">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded pb-2 border-2 border-gray-400 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-xs text-gray-600 md:text-sm">{{ __('Keep me logged in') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-center pt-4 pl-1 sm:pl-2 md:pl-0 mr-1 sm:mr-0">

                            <button type="submit" class="w-full p-1 sm:p-3 block bg-violet-600 border border-transparent rounded-md font-semibold text-lg text-white hover:bg-violet-700 active:bg-violet-800 focus:outline-none focus:border-violet-800 focus:ring ring-violet-300 disabled:opacity-25 transition ease-in-out duration-150">
                                Login
                            </button>
                        </div>

                        <div class="flex items-center justify-center mt-4 sm:pl-2 md:pl-0">
                            @if (Route::has('password.request'))
                                <span class="text-sm pr-1">Forgot your password?</span>
                                <a class="text-xs text-violet-600 hover:text-gray-900 font-bold md:text-sm" href="{{ route('password.request') }}">
                                    {{ __('Recover Now') }}
                                </a>
                            @endif
                        </div>
                        <div class="flex justify-center text-xs pt-16 pb-0 translate-y-6 font-bold text-gray-400 pl-1 sm:pl-2 md:text-sm
                            -translate-y-4
                            sm:-translate-y-2
                            md:-translate-y-2 md:translate-x-0
                            lg:translate-y-0
                            ">
                            Built with &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="text-red-600 feather feather-activity"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                            &nbsp; <span class="text-xs"> by SPLASHCREATIVE </span>
                        </div>
                    </form>
                </div>
            </x-auth-card>  
        </div>
        <div class="w-2/4 min-h-fit py-40
            sm:py-40 sm:mx-0
            md:py-28 md:mr-0
            lg:pt-28 lg:mr-6
            xl:pt-28 xl:mr-16
            2xl:py-24 2xl:mr-56">
            <div class="flex w-full h-full bg-cover bg-no-repeat
            " style="background-image: url(../images/VemaLogin.PNG); background-size:100% 100%">
            </div>
        </div>
    </div>
</x-guest-layout>
