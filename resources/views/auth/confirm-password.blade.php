<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <img src="https://i.pinimg.com/originals/62/a3/f0/62a3f0369f4ef3aa0f07d52b19a4233b.jpg"
        style="    
            position:relative;
            top: 10%;
            max-width: 40%;
            max-height: 40%;
            left: 30%
           
            "
        >
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Confirm') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
