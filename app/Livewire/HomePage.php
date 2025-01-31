<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Home')]
class HomePage extends Component
{
    public $categories;
    public $products;

    public function mount()
    {
        $this->categories = Category::take(8)->get();
        $this->products = Product::take(6)->get();
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
