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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu','controllerMenu@exibeMenu');
Route::get('/cadastroMenu' , 'controllerMenu@CadastroMenu');
Route::get('/cadastroMenuNovo' , 'controllerMenu@cadastroMenuNovo');
Route::post('/cadastroMenuNovoEnvia' ,'controllerMenu@cadastroMenuNovoEnvia');
Route::get('/cadastro_user' , 'ControleUsuario@lista_Usuarios_vw');
Route::get('/mostra' , 'controllerMenu@mostra');
Route::get('/usuarios' , 'ControleUsuario@usuarios');