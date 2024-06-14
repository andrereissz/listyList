<x-layouts.authenticate page='Login' action='authenticate'>

        <label class="input input-bordered flex items-center gap-2">
            <x-icons.email/>
            <input type="text" class="grow" name="email" id="password" placeholder="Email" />
        </label>

        <label class="input input-bordered flex items-center gap-2">
            <x-icons.password/>
            <input type="password" class="grow" name="password" id="password" placeholder="Password" />
        </label>

        <div class="form-control">
            <label class="cursor-pointer label">
              <span class="label-text">Remember me</span>
              <input type="checkbox" class="checkbox checkbox-primary" />
            </label>
        </div>

        <div class="card-actions items-center justify-end">
            <input class="btn btn-primary w-full" type="submit" value="Login">
            <a class="text-sm" href="">Forgot your password?</a>
        </div>

        <div class="card-actions justify-center items-center pt-3">
            <a class="text-sm" href="{{ route('register') }}">Create an account <u>here</u></a>
        </div>

</x-layouts.authenticate>
