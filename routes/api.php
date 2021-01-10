<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'v1'], function() 
{

// -- FOTOS / ARCHIVOS -- //
/* Route::apiResource('/tipoUsuario',              'TipoUsuarioController'); 
Route::get('/usuario/lote/tipo/{tipo}',         'UsuarioController@usuarioLoteTipo');
Route::put('/usuario/{usuario}/email',          'UsuarioController@updateEmail');
Route::put('/usuario/{usuario}/password',       'UsuarioController@updatePassword');
Route::apiResource('/usuario',                  'UsuarioController');


// -- USUARIO -- //
Route::apiResource('/perfil',                   'PerfilController');
Route::get('/permiso/perfil/{perfil}/asignacion', 'PermisoController@permisoPerfilAsignacion');
Route::apiResource('/permiso',                  'PermisoController');
Route::apiResource('/usuarioPerfil',            'UsuarioPerfilController');
Route::apiResource('/modulo',                   'ModuloController');
Route::get('/menu/combo',                       'MenuController@combo');
Route::apiResource('/menu',                     'MenuController');
*/
// -- FOTOS / ARCHIVOS -- //
Route::apiResource('/foto',                              'FotoController');
Route::get('/foto/tipoFoto/{tipoFoto}',          'FotoController@fotoTipo');
//Route::apiResource('/tipoFoto',                 'TipoFotoController');

Route::apiResource('/sede',                       'SedeController');

Route::put('/status/resource',                  'StatusController@updateResource');
});