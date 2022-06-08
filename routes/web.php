<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

$name= 'yym';
//Route::view('/','welcome',["name"=>'yamone']);
Route::view('/','welcome',compact('name'))->name('home');

Route::view('/about','about',compact('name'))->name('about');
Route::view('/contact','contact')->name('contact');


Route::get('/foo', function () {
    return 'hello';
});

Route::get('/add/{x}/{y}',fn($x,$y)=>$x+$y);

Route::get('/my-name/{name?}',fn($name='rain')=>"my Name is $name");

Route::get('/products',[\App\Http\Controllers\ProductController::class,"allProducts"]);

Route::get('/products/price-max/{amount}',[\App\Http\Controllers\ProductController::class,'productByPriceMax']);

Route::get('/products/price-min/{amount}',[\App\Http\Controllers\ProductController::class,'productByPriceMin']);

Route::get('/products/priceBetween/{min}/and/{max}',[\App\Http\Controllers\ProductController::class,'productByPriceBetween']);


Route::post('/productSearch',[\App\Http\Controllers\ProductController::class,'productSearch'])->name('product.search');
