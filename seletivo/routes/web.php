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

Route::get('/seletivos/remove/{id}','SeletivoController@remover')->name('seletivos.remove');
Route::resource('seletivos', 'SeletivoController');

Route::get('/cargos/remove/{id}','CargoController@remover')->name('cargos.remove');
Route::resource('cargos','CargoController');

Route::get('/escolaridades/remove/{id}','EscolaridadeController@remover')->name('escolaridades.remove');
Route::resource('escolaridades','EscolaridadeController');





//Route::group(['prefix' => 'admin'], function () {
  //Route::get('/', 'Admin\AdminController@index');
 ///Route::resource('admin', 'Admin\AdminController');
 // Route::resource('usuarios', 'AdminController');
//});
Route::get('/inscricao', 'CandidatoController@create');
    
Route::post('/inscricao', ['uses'=>'CandidatoController@store'])->name('candidatos.store');
//Route::post('inscricao/',['as' => 'candidato.experiencia.store', 'uses'=>'CandidadoController@experienciaStore']);
//Route::post('/inscricao',['as' => 'candidato.formacao.store', 'uses'=>'CandidadoController@formacaoStore']);

Route::group(['middleware' => 'auth'], function () {
   
    Route::resource('admin', 'Admin\AdminController');
    Route::resource('usuarios', 'Admin\UsuarioController');
    //Route::post('usuarios/create/{papel}', ['as'=>'usuarios.papel.store','uses'=>'Admin\UsuarioController@papelStore']);
    Route::resource('papeis','Admin\PapelController');
    Route::get('/usuarios/remove/{id}',  [
          'uses'=>'Admin\UsuarioController@remover'
      ]
    )->name('usuarios.remove');

    Route::put('usuarios/{id}/edit', ['as'=>'usuarios.edit','uses' => 'Admin\UsuarioController@update']);
    Route::get('usuarios/papel/{id}', ['as'=>'usuarios.papel','uses'=>'Admin\UsuarioController@papel']);
    Route::post('usuarios/papel/{papel}', ['as'=>'usuarios.papel.store','uses'=>'Admin\UsuarioController@papelStore']);
    Route::delete('usuarios/papel/{usuario}/{papel}', ['as'=>'usuarios.papel.destroy','uses'=>'Admin\UsuarioController@papelDestroy']);
    //usuarios/{id}/edit
   // usuarios/create
   // usuarios/remove/{id}

    Route::resource('papeis', 'Admin\PapelController');

    Route::get('papeis/permissao/{id}', ['as'=>'papeis.permissao','uses'=>'Admin\PapelController@permissao']);
    Route::post('papeis/permissao/{permissao}', ['as'=>'papeis.permissao.store','uses'=>'Admin\PapelController@permissaoStore']);
    Route::delete('papeis/permissao/{papel}/{permissao}', ['as'=>'papeis.permissao.destroy','uses'=>'Admin\PapelController@permissaoDestroy']);
    
       
    
});

    Route::get('seletivos/cargo/{id}', ['as'=>'seletivos.cargo','uses'=>'SeletivoController@cargo']);
    Route::post('seletivos/cargo/{cargo}', ['as'=>'seletivos.cargo.store','uses'=>'SeletivoController@cargoStore']);
    Route::delete('seletivos/cargo/{seletivo}/{cargo}', ['as'=>'seletivos.cargo.destroy','uses'=>'SeletivoController@cargoDestroy']);



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