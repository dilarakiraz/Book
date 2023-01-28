<x-guest-layout>
    <x-jet-authentication-card>
        <div class="logot" >
        <x-slot name="logo">
            <a class="logo" href="{{route('home')}}">
                <img src="{{ asset('assets')}}/img/logo.jpg" style="height: 150px" alt="kitapkurdu.com">
                <img src="{{ asset('assets')}}/img/logotext.jpg" style="height: 30px" alt="kitapkurdu.com">
            </a>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div style="color:#FF0000FF;">
                <x-jet-label for="email" value="{{ __('Email') }}" style="color:#FF0000FF;" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4" style="color:#FF0000FF;" >
                <x-jet-label for="password" value="{{ __('Password') }}" style="color:#FF0000FF;" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4" style="color:#FF0000FF;">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600" style="color:#FF0000FF;">{{ __('Beni Hatırla') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4" style="color:#FF0000FF;">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-blue-900" href="{{ route('password.request') }}" style="position: absolute;left: 5%;color: white;">
                        {{ __('Şifremi Unuttum') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Giriş') }}
                </x-jet-button>
            </div>
        </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
