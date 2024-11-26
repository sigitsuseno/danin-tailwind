<x-web-layout>

    <div class="flex flex-col items-center justify-center w-full h-screen">
        <div class="w-full p-4 bg-white rounded-lg shadow-lg md:w-96 dark:bg-slate-800">
            <div class="flex items-center justify-center w-full h-24">
                <div class="h-20 mb-6 w-52">
                    <img src="{{ asset('img/logo2.png') }}" alt="" class="object-contain w-full h-full">
                </div>
            </div>
            {{-- <div class="flex flex-col gap-2">
                <div class="grid grid-cols-[30%,1fr] items-center">
                    <label for="username" class="dark:text-white">Username</label>
                    <input type="text" id="username"
                        class="px-3 py-1 border border-indigo-200 rounded-lg bg-slate-100 focus:outline-indigo-500 dark:border-none outline-1" />
                    @error('username')
                        <span class="text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid grid-cols-[30%,1fr] items-center">
                    <label for="user" class="dark:text-white">user</label>
                    <input type="text" id="user"
                        class="px-3 py-1 border border-indigo-200 rounded-lg bg-slate-100 focus:outline-indigo-500 dark:border-none outline-1" />
                    @error('username')
                        <span class="text-xs">{{ $message }}</span>
                    @enderror
                </div>
            </div> --}}
            <form method="POST" action="/login">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="username" :value="__('Username')" />
                    <x-text-input id="username" class="block w-full mt-1 " type="username" name="username"
                        :value="old('username')" />
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block w-full mt-1" type="password" name="password"
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="text-sm text-gray-600 ms-2">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="ms-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

</x-web-layout>
