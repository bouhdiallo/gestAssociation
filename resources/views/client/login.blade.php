{{--     
    <x-guest-layout>
        <form method="POST" action="{{ route('connexClient')}}"> 
            @csrf
    
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')"/>
    
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password"/>
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>        
    
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
    
                <x-primary-button class="ms-4">
                    {{ __('Se connecter') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout> --}}
    
    
    
    
    





































{{-- <!-- Password -->
<form method="POST" action="">





    <div class="mt-4">
        <x-input-label for="email" :value="__('email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>  <br><br>

<div class="mt-4">
    <x-input-label for="password" :value="__('Password')"/>

    <x-text-input id="password" class="block mt-1 w-full"
                    type="password"
                    name="password"
                    required autocomplete="new-password"/>

    <x-input-error :messages="$errors->get('password')" class="mt-2" />

        <x-primary-button class="ms-4">
            {{ __('Se connecter') }}
        </x-primary-button>
</div>
  </form> --}}