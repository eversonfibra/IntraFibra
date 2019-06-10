<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cadastro_usuario;
class ControleUsuario extends Controller
{
     public function lista_Usuarios_Jn(){
           $user = cadastro_usuario::all();
           return  json_encode($user);
        }
     public function lista_Usuarios_vw(){
     	   return view('controle_user');
     }
     public function usuarios(){
     	return view('usuarios');
     }
}
