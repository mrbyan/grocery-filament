<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
class ProductDetailPage extends Component
{
    public $product;

    public function mount($slug)
    {
        $this->product = Product::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.product-detail-page')
            ->title($this->product->name);
    }
}
