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

Route::get('/','HomeController@index' );

Route::get('/home','HomeController@index');

Auth::routes();

Route::get('/escolaridades/remove/{id}','EscolaridadeController@remover')->name('escolaridade.remove');

Route::resource('escolaridades','EscolaridadeController');


//Route::group(['prefix' => 'admin'], function () {
  //Route::get('/', 'Admin\AdminController@index');
 ///Route::resource('admin', 'Admin\AdminController');
 // Route::resource('usuarios', 'AdminController');
//});
Route::group(['middleware' => 'auth'], function () {
    Route::resource('admin', 'Admin\AdminController');
    Route::resource('usuarios', 'Admin\UsuarioController');
    Route::resource('papeis','Admin\PapelController');
    Route::get('/usuarios/remove/{id}',  [
          'uses'=>'Admin\UsuarioController@remover'
      ]
    )->name('usuarios.remove');
    
    Route::get('usuarios/papel/{id}', ['as'=>'usuarios.papel','uses'=>'Admin\UsuarioController@papel']);
    Route::post('usuarios/papel/{papel}', ['as'=>'usuarios.papel.store','uses'=>'Admin\UsuarioController@papelStore']);
    Route::delete('usuarios/papel/{usuario}/{papel}', ['as'=>'usuarios.papel.destroy','uses'=>'Admin\UsuarioController@papelDestroy']);
  
    Route::resource('papeis', 'Admin\PapelController');

    Route::get('papeis/permissao/{id}', ['as'=>'papeis.permissao','uses'=>'Admin\PapelController@permissao']);
    Route::post('papeis/permissao/{permissao}', ['as'=>'papeis.permissao.store','uses'=>'Admin\PapelController@permissaoStore']);
    Route::delete('papeis/permissao/{papel}/{permissao}', ['as'=>'papeis.permissao.destroy','uses'=>'Admin\PapelController@permissaoDestroy']);
    
     
    
});
Route::resource('seletivos', 'SeletivoController');


//Route::get('admin', 'AdminController@index');



//Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {
   //   Route::resource('admin', 'Admin\AdminController');
  //    Route::resource('usuarios', 'Admin\AdminController');
     // Route::get('/', 'AdminController@index');
      //Route::get('/admin', 'Admin\AdminController@index');
      //Route::resource('usuarios', 'Admin\UsuarioController');
    
      //Route::get('usuarios/papel/{id}', ['as'=>'usuarios.papel','uses'=>'Admin\UsuarioController@papel']);
      //Route::post('usuarios/papel/{papel}', ['as'=>'usuarios.papel.store','uses'=>'Admin\UsuarioController@papelStore']);
     // Route::delete('usuarios/papel/{usuario}/{papel}', ['as'=>'usuarios.papel.destroy','uses'=>'Admin\UsuarioController@papelDestroy']);
    
      //Route::resource('papeis', 'Admin\PapelController');
    
      //Route::get('papeis/permissao/{id}', ['as'=>'papeis.permissao','uses'=>'Admin\PapelController@permissao']);
      //Route::post('papeis/permissao/{permissao}', ['as'=>'papeis.permissao.store','uses'=>'Admin\PapelController@permissaoStore']);
      //Route::delete('papeis/permissao/{papel}/{permissao}', ['as'=>'papeis.permissao.destroy','uses'=>'Admin\PapelController@permissaoDestroy']);
    
//});