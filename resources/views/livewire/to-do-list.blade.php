<div>

    <div class="flex pb-8 gap-6">
        <x-icon-text-input
        wire:model.live.debounce.125ms="search"
        icon='search'
        placeholder='Find a task'/>

        <a href="#" class="btn btn-primary">Create Task</a>
    </div>

    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-4 max-sm:hidden">

        @foreach ($this->tasks as $task)

            <div class="col lg:h-80 md:h-60 bg-white p-6 rounded-lg">
                <div class="card h-fit w-fit">
                    <div class="card card-title w-full p-2 text-md bg-red-500">
                        <p>{{ $task->name }}</p>
                        <p>Cozinhar macarrão alfredo para minha namorada</p>
                    </div>

                    <div class="card card-body">
                        <p>oi</p>
                    </div>

                    <div class="card card-actions items-center">
                        <div class="flex gap-4">
                            <button class="btn btn-circle">
                                <x-icons.edit/>
                            </button>
                            <button class="btn btn-circle">
                                <x-icons.delete/>
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        @endforeach

    </div>



    <!-- Responsive list -->

    <div class="sm:hidden">
        <div class="flex max-w-7xl mx-auto sm:px-6 px-2 py-4 my-2 bg-slate-200 shadow-sm rounded-lg">
            <p>{{ $task->name }}</p>
        </div>
    </div>

</div>
