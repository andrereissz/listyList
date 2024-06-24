<div>

    <div class="flex pb-8 gap-6">
        <x-icon-text-input wire:model.live.debounce.125ms="search" icon='search' placeholder='Find a task' />

        <livewire:submit-modal></livewire:submit-modal>
    </div>

    <div class="grid lg:grid-cols-5 md:grid-cols-3 gap-4 max-sm:hidden">

        @foreach ($this->tasks as $task)
            <div
                class="col lg:h-40 md:h-40 bg-white p-3 rounded-lg hover:scale-110 hover:transition-transform transition-transform">
                <div class="card text-center">

                    <div class="w-full p-2 text-sm h-14 rounded-sm shadow-inner">
                        {{ $task->name }}
                    </div>

                    <div class="h-5 my-2">
                        {{ $task->deadline }}
                    </div>

                    <div class="card card-actions items-center">
                        <div class="flex gap-4">
                            <button class="btn btn-circle">
                                <x-icons.edit />
                            </button>
                            <button class="btn btn-circle">
                                <x-icons.delete />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>



    <!-- Responsive list -->

    @foreach ($this->tasks as $task)
        <div class="sm:hidden">
            <div class="flex max-w-7xl mx-auto sm:px-6 px-2 py-4 my-2 bg-base-100 shadow-sm rounded-lg">
                <p>{{ $task->name }}</p>
            </div>
        </div>
    @endforeach

</div>
