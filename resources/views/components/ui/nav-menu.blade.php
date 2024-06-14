<div class="navbar bg-base-100">
    <div class="flex-1">
      <a class="btn btn-ghost text-xl">ListyList</a>
    </div>
    <div class="flex-none gap-2">
      <div class="form-control">
        <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
      </div>
      <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
            <div class="avatar online placeholder">
                <div class="bg-neutral text-neutral-content rounded-full w-16">
                  <span class="text-xl">{{ $name[0] }}</span>
                </div>
              </div>
        </div>
        <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
          <li><a>Logout</a></li>
        </ul>
      </div>
    </div>
</div>
