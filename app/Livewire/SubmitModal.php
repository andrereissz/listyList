<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class SubmitModal extends Component
{
    public $mindate = '';

    public function render()
    {
        $this->mindate = Carbon::now()->format('Y-m-d');
        return view('livewire.submit-modal');
    }
}
