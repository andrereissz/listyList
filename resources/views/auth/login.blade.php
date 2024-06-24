<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mt-4">
            <x-icon-text-input type="text" name="email" id="email" placeholder="Email" :value="old('email')" autofocus
                autocomplete="username" icon="email" />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-icon-text-input type="password" name="password" id="password" placeholder="Password" icon="password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            @if (Route::has('password.request'))
                <a class="underline text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <div class="form-control">
                <label class="cursor-pointer label">
                    <span class="label-text">Remember me</span>
                    <input type="checkbox" checked="checked" class="checkbox checkbox-primary" />
                </label>
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    <div class="flex items-center justify-center mt-4">
        <a class="underline text-sm text-gray-800" href="{{ route('register') }}">
            {{ __('Create an account here') }}
        </a>
    </div>
</x-guest-layout>
