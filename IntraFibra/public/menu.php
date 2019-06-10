
@extends('layout.app')

@section('body')
@CSRF
<div class='card border'>
    <div class='card-body'>
        <h5 class='card-title'>Cadastro de funcionario</h5>


        <table class='table table-ordered table-hover' id='table'>
            <thead>
                <tr>
                    <th>id</th><th>created_at</th><th>updated_at</th><th>descri</th><th>hierarquia</th><th>obs</th><th>Tabela</th><th>preParametros</th><th>permissao</th><th>ligacao_pai</th><th>link</th>
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
        <h4 class='modal-title'>Cadastro de funcionario</h4>
<div class='card border'>
    <div class='card-body'>
      <h5 class='card-title'>Novo menu:</h5>
      <hr>
        <form action='/cadastroMenuNovoEnvia' method='post'>
            @csrf


            <div class='form-group'>
                <label for='nomeMenu'>Nome do usúario:</label>
                <input type='text' class='form-control' name='nomeMenu' 
                       id='nomemenu' >
            </div>
       
              
        
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

'<td>'+ v.id +'</td>'+'<td>'+ v.created_at +'</td>'+'<td>'+ v.updated_at +'</td>'+'<td>'+ v.descri +'</td>'+'<td>'+ v.hierarquia +'</td>'+'<td>'+ v.obs +'</td>'+'<td>'+ v.Tabela +'</td>'+'<td>'+ v.preParametros +'</td>'+'<td>'+ v.permissao +'</td>'+'<td>'+ v.ligacao_pai +'</td>'+'<td>'+ v.link +'</td>'+

  '</tr>';
    return linha;
  }
   
  function ListaUsuarios(){
    $.getJSON('api/ListaUsuarios',function(users){
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

