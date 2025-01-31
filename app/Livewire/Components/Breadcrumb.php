<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Breadcrumb extends Component
{
    public $backLink;
    public $label;

    public function render()
    {
        return view('livewire.components.breadcrumb');
    }
}
