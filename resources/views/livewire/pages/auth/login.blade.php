<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    public bool $showPassword = false;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <form class="" wire:submit="login">
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input wire:model="form.email" id="email" class="block mt-2 w-full" type="email" name="email"
                          placeholder="johndoe@email.com" required autofocus autocomplete="username"/>
            <x-input-error :messages="$errors->get('form.email')" class="mt-2"/>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" class="flex flex-row justify-between">
                {{ __('Password') }}
                @if (Route::has('password.request'))
                    <a class="font-medium text-[#299D91] hover:text-[#35C9BA] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                       href="{{ route('password.request') }}" wire:navigate>
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </x-input-label>

            <x-text-input wire:model="form.password" placeholder="**************" id="password"
                          class="block mt-2 w-full"
                          :type="$showPassword ? 'text' : 'password'"
                          name="password"
                          required autocomplete="current-password">
                <x-slot name="icon">
                    <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5"
                            wire:click="$toggle('showPassword')">
                        @if($showPassword)
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.87964 9.87988C9.58489 10.1545 9.34848 10.4857 9.18451 10.8537C9.02055 11.2217 8.93238 11.619 8.92527 12.0218C8.91816 12.4246 8.99226 12.8247 9.14315 13.1983C9.29403 13.5718 9.51861 13.9112 9.80348 14.196C10.0884 14.4809 10.4277 14.7055 10.8012 14.8564C11.1748 15.0073 11.5749 15.0814 11.9777 15.0742C12.3805 15.0671 12.7778 14.979 13.1458 14.815C13.5138 14.651 13.845 14.4146 14.1196 14.1199"
                                    stroke="#999DA3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path
                                    d="M10.7305 5.08C11.1518 5.02751 11.5759 5.00079 12.0005 5C19.0005 5 22.0005 12 22.0005 12C21.5534 12.9571 20.9927 13.8569 20.3305 14.68"
                                    stroke="#999DA3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path
                                    d="M6.61 6.61035C4.62125 7.96498 3.02987 9.82561 2 12.0004C2 12.0004 5 19.0004 12 19.0004C13.9159 19.0055 15.7908 18.4455 17.39 17.3904"
                                    stroke="#999DA3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 2L22 22" stroke="#999DA3" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>

                        @else
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 12C2 12 5 5 12 5C19 5 22 12 22 12C22 12 19 19 12 19C5 19 2 12 2 12Z"
                                      stroke="#999DA3" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path
                                    d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                    stroke="#999DA3" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        @endif
                    </button>
                </x-slot>
            </x-text-input>


            <x-input-error :messages="$errors->get('form.password')" class="mt-2"/>
        </div>

        <!-- Remember Me -->
        <div class="block mt-8">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox"
                       class="border-gray-300 text-[#299D91] shadow-sm focus:ring-transparent transition ease-in-out "
                       name="remember">
                <span class="ms-2 text-sm text-[#191D23]">{{ __('Keep me signed in') }}</span>
            </label>
        </div>

        {{-- Login button --}}
        <div class="flex items-center justify-end mt-4 w-full">
            <x-primary-button class="w-full">
                {{ __('Login') }}
            </x-primary-button>
        </div>

        {{-- Divider 'or sign in with' --}}
        <div class="flex items-center justify-center space-x-2 my-6">
            <div class="flex-grow border-t border-gray-300"></div>
            <span class="text-[#999DA3] text-base">or sign in with</span>
            <div class="flex-grow border-t border-gray-300"></div>
        </div>

        {{-- Google login button --}}
        <div>
            <x-secondary-button class="w-full">
                <x-slot name="icon">
                    <img class="size-6" src="{{ asset('icons/Google.png') }}" alt="">
                </x-slot>
                <div class="flex items">Google</div>
            </x-secondary-button>
        </div>

        @if(Route::has('register'))
            <div class="flex justify-center mt-10">
                <a href="{{ route('register') }}"
                   class="text-[#299D91] font-semibold hover:text-[#35C9BA] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Create an account') }}
                </a>
            </div>
        @endif
    </form>
</div>
