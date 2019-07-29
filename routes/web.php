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

Route::get('/home', function () {
   return view('home');
});

Route::get('/test', function () {
   $cart = \App\Cart::find(1);
   dd($cart->productos[0]->image);
});

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/agregarProducto', 'ProductsController@crear');

Route::post('/agregarProducto', 'ProductsController@agregarProducto');

Route::get('/borrarProducto', 'ProductsController@borrarProducto');

Route::post('/borrarProducto', 'ProductsController@borrarProducto');

Route::get('/misProductos', 'ProductsController@misProductos');

Route::get('/index', 'ProductsController@misProductos');

Route::get('/inicio', function () {
   return view('inicio');
});
Auth::routes();
