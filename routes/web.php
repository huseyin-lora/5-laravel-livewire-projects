<?php

use App\Livewire\Counter;
use App\Livewire\TodoList;
use App\Livewire\Calculator;
use App\Livewire\CascadingDropdown;
use App\Livewire\ProductSearch;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculator', Calculator::class);
Route::get('/counter', Counter::class);
Route::get('/todo-list', TodoList::class);
Route::get('/cascading-dropdown', CascadingDropdown::class);
Route::get('/products', ProductSearch::class)->name('products');
