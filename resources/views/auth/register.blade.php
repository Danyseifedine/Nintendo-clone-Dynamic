<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-xl overflow-hidden sm:rounded-2xl">
            <!-- Nintendo Logo -->
            <div class="flex justify-center mb-8">
                <h1 class="text-[#e60012] text-4xl font-extrabold uppercase tracking-tighter inline-block relative">
                    Nintendo
                    <span class="absolute bottom-0 left-0 w-full h-1 bg-[#e60012] rounded"></span>
                </h1>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" class="font-bold text-gray-700" />
                    <x-text-input id="name"
                        class="block mt-1 w-full rounded-xl border-gray-300 focus:border-[#e60012] focus:ring focus:ring-[#e60012] focus:ring-opacity-20"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required
                        autofocus
                        autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" class="font-bold text-gray-700" />
                    <x-text-input id="email"
                        class="block mt-1 w-full rounded-xl border-gray-300 focus:border-[#e60012] focus:ring focus:ring-[#e60012] focus:ring-opacity-20"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="font-bold text-gray-700" />

                    <x-text-input id="password"
                        class="block mt-1 w-full rounded-xl border-gray-300 focus:border-[#e60012] focus:ring focus:ring-[#e60012] focus:ring-opacity-20"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="font-bold text-gray-700" />

                    <x-text-input id="password_confirmation"
                        class="block mt-1 w-full rounded-xl border-gray-300 focus:border-[#e60012] focus:ring focus:ring-[#e60012] focus:ring-opacity-20"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between mt-6">
                    <a class="text-sm text-gray-600 hover:text-[#e60012] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#e60012]"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <button type="submit"
                        class="bg-[#e60012] text-white font-bold py-2 px-6 rounded-full shadow-lg hover:shadow-[#e60012]/50 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 active:translate-y-1 active:shadow-none">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
