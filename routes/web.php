<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


/* --- Perfil --- */
Route::group(['middleware' => ['auth'], 'namespace' => 'Backend'], function () {
    Route::get('perfil', 'ProfileController@index')->name('profile');
    Route::post('perfil/detalhes/editar', 'ProfileController@updateDetails')->name('profile.update.details');
    Route::get('perfil/senha/alterar', 'ProfileController@password')->name('profile.password');
    Route::post('perfil/senha/alterar', 'ProfileController@updatePassword')->name('profile.update.password');
});

/* --- Categorias --- */

Route::group(['middleware' => ['auth'], 'namespace' => 'Backend'], function () {
    Route::get('categoria', 'CategoryController@index')->name('category.list');
    Route::get('categoria/criar', 'CategoryController@create')->name('category.create');
    Route::post('categoria/criar', 'CategoryController@store')->name('category.store');
    Route::get('categoria/{id}/editar', 'CategoryController@edit')->name('category.edit');
    Route::post('categoria/{id}/editar', 'CategoryController@update')->name('category.update');
    Route::get('categoria/{id}/excluir', 'CategoryController@destroy')->name('category.destroy');
    Route::get('categoria/{id}/restaurar', 'CategoryController@restore')->name('category.restore');
    Route::get('categoria/{id}/excluir-permanentemente', 'CategoryController@destroyPermanently')->name('category.destroyPermanently');
});


Route::get('produtos', 'ProductController@index')->name('product.list');
Route::get('produtos/criar', 'ProductController@create')->name('product.create');
Route::post('produtos/criar', 'ProductController@store')->name('product.store');
Route::get('produtos/{id}/editar', 'ProductController@edit')->name('product.edit');
Route::put('produtos/{id}/editar', 'ProductController@update')->name('product.update');