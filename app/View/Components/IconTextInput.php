<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IconTextInput extends Component
{
    public $icon;

    public function __construct($icon)
    {
        $this->icon = 'icons.'.$icon;
    }

    public function render(): View|Closure|string
    {
        return view('components.icon-text-input');
    }
}
