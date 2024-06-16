<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <div class="p-6 bg-white dark:bg-gray-800 shadow-md rounded-lg">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-6">{{ __('Login Gallifrey Admin Shop') }}</h2>
        <form method="POST" action="#">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="admin_email" :value="__('Admin Email')"/>
                <x-text-input
                    id="admin_email"
                    class="block mt-1 w-full"
                    type="email"
                    name="email"
                    :value="old('email')"
                    autocomplete="username"
                    required
                    autofocus
                />
                <x-input-error
                    :messages="$errors->get('email')"
                    class="mt-2"
                />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label
                    for="admin_password"
                    :value="__('Password')"
                />
                <x-text-input
                    id="admin_password"
                    class="block mt-1 w-full"
                    type="password"
                    name="password"
                    required autocomplete="current-password"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="admin_remember_me" class="inline-flex items-center">
                    <input id="admin_remember_me" type="checkbox"
                           class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                           name="remember">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('admin.password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                       href="{{ route('admin.password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
