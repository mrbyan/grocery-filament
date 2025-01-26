<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Signup;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::get('/login', Login::class)->name('login');
Route::get('/signup', Signup::class)->name('signup');
