<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Signup extends Component
{
    public function render()
    {
        return view('livewire.auth.signup');
    }
}
