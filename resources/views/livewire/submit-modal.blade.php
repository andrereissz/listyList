<div>
    <button class="btn btn-primary text-white" onclick="create_task_modal.showModal()">Create Task</button>
    <dialog id="create_task_modal" class="modal">
        <div class="modal-box bg-base-200">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>

            <h3 class="font-bold text-lg py-5">Let's create a new Task!</h3>

            <form action="{{ route('task.store') }}" method="POST">
                @csrf

                <x-text-input name="name" placeholder="Task Name" class="my-2" />
                <x-input-error :messages="$errors->get('name')" class="my-2" />

                <div class="my-2">
                    <label for="deadline">Deadline</label>
                    <input name="deadline" id="deadline" class="input input-bordered" min="{{ $this->mindate }}"
                        type="date">
                    <x-input-error :messages="$errors->get('deadline')" class="my-2" />
                </div>

                <div class="flex items-center align-middle justify-center w-full">
                    <input type="submit" class="btn btn-primary text-white my-2 w-40">
                </div>

            </form>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
</div>
