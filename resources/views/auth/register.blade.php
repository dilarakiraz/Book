
<x-guest-layout>
    <x-jet-authentication-card>
        <div class="mt-4" style="background-color: #000000">
        <x-slot name="logo">
            <a class="logo" href="{{route('home')}}">
                <img src="{{ asset('assets')}}/img/logo.jpg" style="height: 150px" alt="kitapkurdu.com">
                <img src="{{ asset('assets')}}/img/logotext.jpg" style="height: 30px" alt="kitapkurdu.com">
            </a>
        </x-slot>


        <x-jet-validation-errors class="mb-4" />


        <form method="POST" action="{{ route('register') }}" >
            @csrf

            <div  style="color:#FF0000FF;">
                <x-jet-label for="name" value="{{ __('İsim') }}" style="color: red" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div style="color:#FF0000FF;" class="mt-4" >
                <x-jet-label for="email" value="{{ __('Email') }}" style="color: red" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4" style="color:#FF0000FF;">
                <x-jet-label for="password" value="{{ __('Şifre') }}" style="color: red" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4" style="color:#FF0000FF;">
                <x-jet-label for="password_confirmation" value="{{ __('Şifrenizi Tekrar Girin') }}" style="color: red"/>
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
            <div class="berat flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}" style="position: absolute; left: 5%; color: white">
                    {{ __('Zaten Kayıtlı mısın?') }}
                </a>
                <x-jet-button class="ml-4">
                    {{ __('Kayıt Ol') }}
                </x-jet-button>
            </div>
        </form>

    </div>
    </x-jet-authentication-card>

</div>

</x-guest-layout>

