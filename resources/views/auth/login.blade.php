<x-guest-layout>
    <div
        class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-xl overflow-hidden sm:rounded-2xl">
            <!-- Nintendo Logo -->
            <div class="flex justify-center mb-8">
                <h1 class="text-[#e60012] text-4xl font-extrabold uppercase tracking-tighter inline-block relative">
                    Nintendo
                    <span class="absolute bottom-0 left-0 w-full h-1 bg-[#e60012] rounded"></span>
                </h1>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="font-bold text-gray-700" />
                    <x-text-input id="email"
                        class="block mt-1 w-full rounded-xl border-gray-300 focus:border-[#e60012] focus:ring focus:ring-[#e60012] focus:ring-opacity-20"
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="font-bold text-gray-700" />

                    <x-text-input id="password"
                        class="block mt-1 w-full rounded-xl border-gray-300 focus:border-[#e60012] focus:ring focus:ring-[#e60012] focus:ring-opacity-20"
                        type="password" name="password" required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-[#e60012] shadow-sm focus:ring-[#e60012]"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-6">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 hover:text-[#e60012] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#e60012]"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button type="submit"
                        class="bg-[#e60012] text-white font-bold py-2 px-6 rounded-full shadow-lg hover:shadow-[#e60012]/50 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 active:translate-y-1 active:shadow-none">
                        {{ __('Log in') }}
                    </button>
                </div>

                <div class="demo-account">
                    <p class="text-xs text-gray-600">
                        <p
                            class="text-[#e60012] text-xs hover:underline font-semibold">email: user@user.com   (Regular User)</p>
                        <p
                            class="text-[#e60012] text-xs hover:underline font-semibold">password: user</p>
                    </p>
                </div>

                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">{{ __("Don't have an account?") }}
                        <a href="{{ route('register') }}"
                            class="text-[#e60012] hover:underline font-semibold">{{ __('Register') }}</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
