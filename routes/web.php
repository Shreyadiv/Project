<?php



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

Route::get('/', 'App\Http\Controllers\PagesController@welcome');
Route::get('/login', 'App\Http\Controllers\MainController@login');

Route::get('/register', 'App\Http\Controllers\MainController@register');
Route::get('/categories', 'App\Http\Controllers\PagesController@categories');

Route::get('/shop', 'App\Http\Controllers\CartController@shop')->name('shop');
Route::get('/cart', 'App\Http\Controllers\CartController@cart')->name('cart.index');
Route::post('/add', 'App\Http\Controllers\CartController@add')->name('cart.store');
Route::post('/update', 'App\Http\Controllers\CartController@update')->name('cart.update');
Route::post('/remove', 'App\Http\Controllers\CartController@remove')->name('cart.remove');
Route::post('/clear', 'App\Http\Controllers\CartController@clear')->name('cart.clear');

Route::resource('/products', App\Http\Controllers\ProductController::class);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');



