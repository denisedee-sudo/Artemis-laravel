<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <br><br><br><br>
        <h2 class="text-center my-3 text-jindigo">Register New Account</h2>
        <div class="row">
            <div class="col-1 col-lg-2"></div>
            <div class="col-10 col-lg-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
        
                    <!-- Name -->
                    <div>
                        <x-label for="name" :value="__('Name')" />
        
                        <x-input id="name" class="block border rounded py-2 px-3 w-100" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
        
                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" />
        
                        <x-input id="email" class="block border rounded py-2 px-3 w-100" type="email" name="email" :value="old('email')" required />
                    </div>
        
                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />
        
                        <x-input id="password" class="block border rounded py-2 px-3 w-100"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>
        
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />
        
                        <x-input id="password_confirmation" class="block border rounded py-2 px-3 w-100"
                                        type="password"
                                        name="password_confirmation" required />
                    </div>
        
                    <div class="text-center mt-4">
                        <x-button class="btn btn-jindigo hover-maxy my-3">
                            {{ __('Register') }}
                        </x-button>
                        <br>
                        <a class="text-jindigo hover-carmine" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                        <br>
                        
                    </div>
                </form>
            </div>
            <div class="col-1 col-lg-2"></div>
        </div>
        
    </x-auth-card>
</x-guest-layout>
