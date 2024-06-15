<x-layouts.authenticate page='register'>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <input type="text" placeholder="Name" name="name" class="input input-bordered w-full max-w-xs mb-2" />
        @error('name')
            <p class="text-sm text-red-800 mb-2">{{ $message }}</p>
        @enderror

        <input type="email" placeholder="E-mail" name="email" class="input input-bordered w-full max-w-xs mb-2" />
        @error('email')
            <p class="text-sm text-red-800 mb-2">{{ $message }}</p>
        @enderror

        <input type="password" placeholder="Password" name="password" class="input input-bordered w-full max-w-xs mb-2" />
        @error('password')
            <p class="text-sm text-red-800 mb-2">{{ $message }}</p>
        @enderror

        <input type="password" placeholder="Password Confirmation" name="password_confirmation" class="input input-bordered w-full max-w-xs mb-2" />

        <input class="btn btn-primary w-full" type="submit" value="Register">

    </form>

</x-layouts.authenticate>
