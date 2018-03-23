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

Route::get('/home','HomeController@index')->name('home.index');

Auth::routes();

Route::get('/seletivos/remove/{id}','SeletivoController@remover')->name('seletivos.remove');
Route::resource('seletivos', 'SeletivoController');

Route::get('/cargos/remove/{id}','CargoController@remover')->name('cargos.remove');
Route::resource('cargos','CargoController');

Route::get('/escolaridades/remove/{id}','EscolaridadeController@remover')->name('escolaridades.remove');
Route::resource('escolaridades','EscolaridadeController');





// ------------------------ dados pessoas --------------------- //
Route::get('/inscricao/{id}', 'CandidatoController@create')->name('candidatos.create');
//Route::get('/inscricao/edit/{id}', 'CandidatoController@edit')->name('candidatos.edit');
Route::put('/seletivo/{seletivo}/candidato/{candidato}/edit','CandidatoController@update')->name('candidatos.update');


Route::get('inscricao/comprovante/{id}',['as'=>'dados.comprovante','uses'=>'CandidatoController@comprovante']);
Route::get('inscricao/curriculo/{id}',['as'=>'dados.curriculo','uses'=>'CandidatoController@curriculo']);
    

Route::post('/inscricao', ['uses'=>'CandidatoController@store'])->name('candidatos.store');
// END------------------------ dados pessoas ---------------------END //

//Route::get('/inscricao/edit/formacao/{id}', 'CandidatoController@editFormacao')->name('candidatos.formacao.editar');


// ------------------------ formacações ---------------------------  //

Route::get('/seletivo/{seletivo}/candidato/{candidato}/create-formacao', 'FormacaoController@create')->name('candidatos.formacao.create');
Route::post('/seletivo/{seletivo}/candidato/{candidato}/store-formacao', 'FormacaoController@store')->name('candidatos.formacao.store');

Route::get('/seletivo/{seletivo}/candidato/{candidato}/formacao/{formacao}/edit-formacao', 'FormacaoController@edit')->name('candidatos.formacao.editar');

Route::put('/seletivo/{seletivo}/candidato/{candidato}/formacao/{formacao}/update-formacao', 'FormacaoController@update')->name('candidatos.formacao.update');

Route::get('/seletivo/{seletivo}/candidato/{candidato}/formacao/{formacao}/remove-formacao', 'FormacaoController@remove')->name('candidatos.formacao.remove');
Route::delete('/seletivo/{seletivo}/candidato/{candidato}/formacao/{formacao}/destroy-formacao', 'FormacaoController@destroy')->name('candidatos.formacao.destroy');

// END------------------------ formacações ---------------------------END  //





// ------------------------ experiências ---------------------------  //
Route::get('/seletivo/{seletivo}/candidato/{candidato}/create-experiencia', 'ExperienciaController@create')->name('candidatos.experiencia.create');
Route::post('/seletivo/{seletivo}/candidato/{candidato}/store-experiencia', 'ExperienciaController@store')->name('candidatos.experiencia.store');

Route::get('/seletivo/{seletivo}/candidato/{candidato}/experiencia/{experiencia}/edit-experiencia', 'ExperienciaController@edit')->name('candidatos.experiencia.edit');

Route::put('/seletivo/{seletivo}/candidato/{candidato}/experiencia/{experiencia}/update-experiencia', 'ExperienciaController@update')->name('candidatos.experiencia.update');

Route::get('/seletivo/{seletivo}/candidato/{candidato}/experiencia/{experiencia}/remove-experiencia', 'ExperienciaController@remove')->name('candidatos.experiencia.remove');
Route::delete('/seletivo/{seletivo}/candidato/{candidato}/experiencia/{experiencia}/destroy-experiencia', 'ExperienciaController@destroy')->name('candidatos.experiencia.destroy');


// END------------------------ experiências --------------------------- END //


// --------------------------- Cargo -----------------------------------//
Route::get('/inscricao/seletivo/{seletivo}/candidato/{candidato}/cargo-show', ['as'=>'candidatos.cargo.show','uses'=>'CandidatoController@cargoShow']);
Route::post('/inscricao/seletivo/{seletivo}/candidato/{candidato}/cargo-store', ['as'=>'candidatos.cargo.store','uses'=>'CandidatoController@cargoStore']);
Route::delete('/inscricao/seletivo/{seletivo}/candidato/{candidato}/cargo/{cargo}/delete', ['as'=>'candidatos.cargo.destroy','uses'=>'CandidatoController@cargoDestroy']);


// END--------------------------- Cargo ----------------------------------- END//
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


    Route::resource('papeis', 'Admin\PapelController');

    Route::get('papeis/permissao/{id}', ['as'=>'papeis.permissao','uses'=>'Admin\PapelController@permissao']);
    Route::post('papeis/permissao/{permissao}', ['as'=>'papeis.permissao.store','uses'=>'Admin\PapelController@permissaoStore']);
    Route::delete('papeis/permissao/{papel}/{permissao}', ['as'=>'papeis.permissao.destroy','uses'=>'Admin\PapelController@permissaoDestroy']);
    
});

    Route::get('seletivos/cargo/{id}', ['as'=>'seletivos.cargo','uses'=>'SeletivoController@cargo']);
    Route::post('seletivos/cargo/{cargo}', ['as'=>'seletivos.cargo.store','uses'=>'SeletivoController@cargoStore']);
    Route::delete('seletivos/cargo/{seletivo}/{cargo}', ['as'=>'seletivos.cargo.destroy','uses'=>'SeletivoController@cargoDestroy']);

    Route::get('seletivos/escolaridade/{id}', ['as'=>'seletivos.escolaridade','uses'=>'SeletivoController@escolaridade']);
    Route::post('seletivos/escolaridade/{escolaridade}', ['as'=>'seletivos.escolaridade.store','uses'=>'SeletivoController@escolaridadeStore']);
    Route::delete('seletivos/escolaridade/{seletivo}/{escolaridade}', ['as'=>'seletivos.escolaridade.destroy','uses'=>'SeletivoController@escolaridadeDestroy']);

    Route::resource('documentos', 'DocumentoController');
    Route::get('documentos/remove/{id}','DocumentoController@remover')->name('documentos.remove');
    Route::get('/documentos/show/{seletivo_id}','DocumentoController@show');
    Route::get('/documentos/download/{id}','DocumentoController@download')->name('documentos.download');    

    Route::post('documento','Documento@store');
    Route::post('documentos/create/{seletivo_id}', ['as'=>'documento.store','uses'=>'DocumentoController@store']);

    