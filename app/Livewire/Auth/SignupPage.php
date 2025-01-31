<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class SignupPage extends Component
{
    public function render()
    {
        return view('livewire.auth.signup-page');
    }
}
