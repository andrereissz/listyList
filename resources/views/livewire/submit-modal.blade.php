<div>
    <button class="btn btn-primary text-white" onclick="create_task_modal.showModal()">Create Task</button>
    <dialog id="create_task_modal" class="modal">
        <div class="modal-box bg-base-200">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>

            <h3 class="font-bold text-lg py-5">Let's create a new Task!</h3>

            <form action="{{ route('task.store') }}" method="POST">
                <x-text-input name="task" placeholder="Task Name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                <div class="my-3">
                    <div>
                        <label for="date">Due to</label>
                        <input name="date" id="date" class="input input-bordered" min="{{ $this->mindate }}"
                            type="date">
                    </div>
                </div>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
</div>
