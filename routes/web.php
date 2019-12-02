<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/



// Route::get('/', function () {
//     return view('welcome','WelcomeController@index');
// });

Auth::routes();

Route::redirect('/','welcome');
Route::GET('welcome','WelcomeController@index');
Route::GET('welcome/produto/{$id}','WelcomeController@detprodu')->name('welcome.modal');


Route::get('listas','ListaController@index');    
Route::get('listas/consultalista/{$tipo}','ListaController@consultalista' )->name('lista.consultalista');
// Route::resource('listas','ListaController');

Route::group(['prefix' => 'admin'], function(){
    Route::get('','AdminController@index');
    Route::resource('categoria','CategoriaController');
   //Route::GET('categoria','CategoriaController@index');
   //Route::get('/categoria/cadastro','CategoriaController@create');
   //Route::get('/categoria/editar/{$id}', 'CategoriaController@edit');
   //Route::post('categoria/create', 'CategoriaController@store');
   //Route::POST('categoria/edit','CategoriaController@update');
   //Route::post('categoria/save','CategoriaController@save');    
   
   Route::get('listas','AdminController@listas');
   Route::get('produtos','AdminController@produtos');
   Route::get('usuarios','AdminController@usuarios');

});
//Route::resource('admin/categoria','AdminController@categoria');

Route::get('/home', 'HomeController@index')->name('home');


