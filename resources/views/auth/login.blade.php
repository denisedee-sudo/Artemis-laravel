<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        
        <br><br><br><br>
        {{-- <x-auth-validation-errors class="text-carmine" :errors="$errors" /> --}}
        <div class="row">
            <div class="col-1 col-lg-2"></div>
            <div class="col-10 col-lg-4">
                <x-auth-validation-errors class="text-carmine" :errors="$errors" />
                <form  class="border rounded p-5 my-3" method="POST" action="{{ route('login') }}">
                    @csrf
        
                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />
                        <br>
                        <x-input id="email" class="block border rounded py-2 px-3 w-100" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
        
                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />
                        <br>
                        <x-input id="password" class="block border rounded py-2 px-3 w-100"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                    </div>
        
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
        
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        <br>
                        <x-button class="btn btn-jindigo hover-maxy">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
            </div>
            <div class="col-1 col-lg-6"></div>
        </div>
        
    </x-auth-card>
</x-guest-layout>
