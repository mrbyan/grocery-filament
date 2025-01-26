<?php

namespace App\Livewire\Components;

use Livewire\Component;

class TitleSection extends Component
{
    public $label;
    public $route;

    public function render()
    {
        return view('livewire.components.title-section');
    }
}
