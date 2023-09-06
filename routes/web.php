<?php

use App\Livewire\CartComponent;
use App\Livewire\CheckoutComponent;
use App\Livewire\HomeComponent;
use App\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



//  Route::get('/shop', ShopComponent::class)-> 
//     name('livewire.shop');
   




// Route::get('/',function(){
// return view('layouts.app');
// });

Route::get('/',
         HomeComponent::class);
        // ->name('home.index');

// Route::controller(HomeComponent::class)->group(function(){

//     Route::get('/', 'livewire.home');
//     Route::get('/shop','livewire.shop');
// });
Route::get('/shop',
ShopComponent::class);
           
            // ->name('livewire.shop-component');

// Route::get('/cart',CartComponent::class)->name('shop.cart');

// Route::get('/checkout',CheckoutComponent::class)->name('shop.checkout');

// App\Livewire\ShopComponent::redirect('/shop', with('error','Here we Go'));