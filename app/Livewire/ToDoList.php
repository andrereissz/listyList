<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ToDoList extends Component
{

    public ?string $search = null;

    #[Computed]
    public function tasks()
    {
        return Task::search($this->search)
            ->where('user_id', Auth::user()->id)
            ->orderBy('deadline', 'ASC')
            ->get();
    }

    public function render()
    {
        return view('livewire.to-do-list');
    }
}
