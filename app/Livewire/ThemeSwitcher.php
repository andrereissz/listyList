<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Computed;


class ThemeSwitcher extends Component
{

    public $theme = 'mytheme';

    #[Computed]
    public function switchTheme(){

        ($this->theme === 'mytheme') ? $this->theme = 'dark' : $this->theme = 'mytheme';

    }

    public function render()
    {
        return view('livewire.theme-switcher');
    }
}
