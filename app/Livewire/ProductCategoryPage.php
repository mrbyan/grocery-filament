<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class ProductCategoryPage extends Component
{
    public $category;
    public $products;

    public function mount($slug)
    {
        $this->category = Category::where('slug', $slug)->first();
        $this->products = Product::where('category_id', $this->category->id)->get();
    }

    public function render()
    {
        return view('livewire.product-category-page')
            ->title($this->category->name);
    }
}
