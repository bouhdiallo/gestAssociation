<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="nom" :value="__('nom')" />
            <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

<!-- Date de creation -->
<div class="mt-4">
    <x-input-label for="date" :value="__('date de creation')" />
    <x-text-input id="date_creation" class="block mt-1 w-full" type="date" name="date_creation" :value="old('date_creation')" required autocomplete="date_creation" />
    <x-input-error :messages="$errors->get('date_creation')" class="mt-2" />
</div>


    <!-- Slogan -->
    <div class="mt-4">
        <x-input-label for="slogan" :value="__('slogan')" />
        <x-text-input id="slogan" class="block mt-1 w-full" type="slogan" name="slogan" :value="old('slogan')" required autocomplete="slogan" />
        <x-input-error :messages="$errors->get('slogan')" class="mt-2" />
    </div>

         <!-- logo -->
    <div class="mt-4">
        <x-input-label for="logo" :value="__('logo')" />
        <x-text-input id="logo" class="block mt-1 w-full" type="file" name="logo" :value="old('logo')" required autocomplete="logo" />
        <x-input-error :messages="$errors->get('logo')" class="mt-2" />
    </div>



        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>




