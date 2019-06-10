<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\menu;

class controllerMenu extends Controller
{ 

    public function Lista_menus_jn(){
        $m = menu::all();
       return  json_encode($m);
   
    }

    public function exibeMenu(){
     	$menus = menu::all() ;
      return view('index' , compact('menus'));
    }

    public function CadastroMenu(){
       	$ms = menu::all() ;
    	return view('sysCadastroMenu' ,compact('ms'));
    }
    public function cadastroMenuNovo(){
        $ms = menu::all();
    	return view('MenuNovo',compact('ms'));
    }
    public function cadastroMenuNovoEnvia(Request $request){
      $men = new menu();
      $no =  $men->descri = $request->input('nomeMenu');
      $men->obs = $request->input('Descricao');
      $men->Hierarquia = $request->input('Hierarquia');
      $tb = $men->Tabela = $request->input('Tabela');
      $api =$men->preParametros = $request->input('Parametros');
      $men->permissao = $request->input('Permissao');
      $men->Ligacao_pai = $request->input('Ligacao');
      $lk = $men->link = $request->input('Link');
      $Ac = $men->action = $request->input('Action');
      $men->save();
        


$colunas = DB::getSchemaBuilder()->getColumnListing($tb);

$in = "";
$list = "";
$cadast ="";
foreach ($colunas as $col) {

    $in = $in."<th>".$col."</th>";
    $list = $list."'<td>'+ v.".$col." +'</td>'+";
    $cadast = $cadast."  

            @csrf  
    <div class='form-group'>
    <label for='".$col."'>".$col."</label>
    <input type='text' class='form-control' name='".$col."'   id='".$col."' >
    </div>
     


       ";
}




$varpagina = "
@extends('layout.app')

@section('body')
@CSRF
<div class='card border'>
    <div class='card-body'>
        <h5 class='card-title'>".$no."</h5>


        <table class='table table-ordered table-hover' id='table'>
            <thead>
                <tr>
                    ".$in."
                </tr>
            </thead>
            <tbody >
   
                          
            </tbody>
        </table>
       
    </div>
    <div class='card-footer'>
        <button href='cadastroMenuNovo' class='btn btn-sm btn-primary' onclick='exibeCadastro()' role='button'>Novo menu</button>
    </div>
</div>

<div class='modal' id='mod' tabindex='-1' role='dialog'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <div class='modal-body'>
        <h4 class='modal-title'>".$no."</h4>

     
<div class='card border'>
    <div class='card-body'>
     <h5 class='card-title'>Novo " . $col . " :</h5>
    
      <hr>
        <form action='/".$Ac."' method='post'>
        ".$cadast."
         </form>
       </div>
</div>           

        <button class='btn btn-success'>Cadastrar</button>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection

@section('javascript')

<script type='text/javascript'>

  function exibeCadastro(){
           $('#mod').modal('show') ;    
  }

  function montalinha(v){
  var linha ;
  linha = '<tr>'+

".$list."

  '</tr>';
    return linha;
  }
   
  function ListaUsuarios(){
    $.getJSON('".$api."',function(users){
  for(u=0;u<users.length;u++){
linha =  montalinha(users[u]);
$('#table>tbody').append(linha);
  }

    });
  }
$(function(){
ListaUsuarios();
});


</script>

@endsection

" ;
$l = $lk.".blade.php";
$arquivo = fopen($l, 'w');
fwrite($arquivo, $varpagina);
fclose($arquivo);

return redirect('/cadastroMenu');

    }

    public function mostra(){
        return view('/mostra');
    }


  
}
