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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('template/', function(){
    return view('template.index');
})->name('index');


Route::get('template/productos', function(){
    return view('template.products');
})->name('productos');


Route::get('template/categorias', function(){
    return view('template.categories');
})->name('categorias');

Route::post('template/categorias','CategorieController@store')->name('categorie.store');

Route::get('template/clientes','CustomerController@index')->name('clientes');

Route::post('template/clientes','CustomerController@store')->name('customer.store');

Route::post('template/clientes/editar','CustomerController@edit')->name('customer.edit');

Route::post('template/clientes/delete','CustomerController@delete')->name('customer.delete');

