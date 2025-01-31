<?php

use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\SignupPage;
use App\Livewire\CategoryPage;
use App\Livewire\HomePage;
use App\Livewire\ProductCategoryPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\ProductPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');

Route::get('/login', LoginPage::class)->name('login');
Route::get('/signup', SignupPage::class)->name('signup');

Route::get('/categories', CategoryPage::class)->name('categories');
Route::get('/products', ProductPage::class)->name('products.index');
Route::get('/products/{slug}', ProductDetailPage::class)->name('products.detail');
Route::get('/products-category/{slug}', ProductCategoryPage::class)->name('products.category');
