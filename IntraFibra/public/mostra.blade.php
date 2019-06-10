
@extends('layout.app')

@section('body')
@CSRF
<div class='card border'>
    <div class='card-body'>
        <h5 class='card-title'>Lista Menus</h5>


        <table class='table table-ordered table-hover' id='table'>
            <thead>
                <tr>
                    <th>id</th><th>created_at</th><th>updated_at</th><th>descri</th><th>hierarquia</th><th>obs</th><th>Tabela</th><th>preParametros</th><th>permissao</th><th>ligacao_pai</th><th>link</th><th>action</th>
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
        <h4 class='modal-title'>Lista Menus</h4>

     
<div class='card border'>
    <div class='card-body'>
     <h5 class='card-title'>Novo action :</h5>

          
    
      <hr>
        <form action='//cadastroMenuNovoEnvia' method='post'>
            @csrf  
    <div class='form-group'>
    <label for='id'>id</label>
    <input type='text' class='form-control' name='id'   id='id' >
    </div>

        </form>


         
    
      <hr>
        <form action='//cadastroMenuNovoEnvia' method='post'>
            @csrf  
    <div class='form-group'>
    <label for='created_at'>created_at</label>
    <input type='text' class='form-control' name='created_at'   id='created_at' >
    </div>

        </form>


         
    
      <hr>
        <form action='//cadastroMenuNovoEnvia' method='post'>
            @csrf  
    <div class='form-group'>
    <label for='updated_at'>updated_at</label>
    <input type='text' class='form-control' name='updated_at'   id='updated_at' >
    </div>

        </form>


         
    
      <hr>
        <form action='//cadastroMenuNovoEnvia' method='post'>
            @csrf  
    <div class='form-group'>
    <label for='descri'>descri</label>
    <input type='text' class='form-control' name='descri'   id='descri' >
    </div>

        </form>


         
    
      <hr>
        <form action='//cadastroMenuNovoEnvia' method='post'>
            @csrf  
    <div class='form-group'>
    <label for='hierarquia'>hierarquia</label>
    <input type='text' class='form-control' name='hierarquia'   id='hierarquia' >
    </div>

        </form>


         
    
      <hr>
        <form action='//cadastroMenuNovoEnvia' method='post'>
            @csrf  
    <div class='form-group'>
    <label for='obs'>obs</label>
    <input type='text' class='form-control' name='obs'   id='obs' >
    </div>

        </form>


         
    
      <hr>
        <form action='//cadastroMenuNovoEnvia' method='post'>
            @csrf  
    <div class='form-group'>
    <label for='Tabela'>Tabela</label>
    <input type='text' class='form-control' name='Tabela'   id='Tabela' >
    </div>

        </form>


         
    
      <hr>
        <form action='//cadastroMenuNovoEnvia' method='post'>
            @csrf  
    <div class='form-group'>
    <label for='preParametros'>preParametros</label>
    <input type='text' class='form-control' name='preParametros'   id='preParametros' >
    </div>

        </form>


         
    
      <hr>
        <form action='//cadastroMenuNovoEnvia' method='post'>
            @csrf  
    <div class='form-group'>
    <label for='permissao'>permissao</label>
    <input type='text' class='form-control' name='permissao'   id='permissao' >
    </div>

        </form>


         
    
      <hr>
        <form action='//cadastroMenuNovoEnvia' method='post'>
            @csrf  
    <div class='form-group'>
    <label for='ligacao_pai'>ligacao_pai</label>
    <input type='text' class='form-control' name='ligacao_pai'   id='ligacao_pai' >
    </div>

        </form>


         
    
      <hr>
        <form action='//cadastroMenuNovoEnvia' method='post'>
            @csrf  
    <div class='form-group'>
    <label for='link'>link</label>
    <input type='text' class='form-control' name='link'   id='link' >
    </div>

        </form>


         
    
      <hr>
        <form action='//cadastroMenuNovoEnvia' method='post'>
            @csrf  
    <div class='form-group'>
    <label for='action'>action</label>
    <input type='text' class='form-control' name='action'   id='action' >
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

'<td>'+ v.id +'</td>'+'<td>'+ v.created_at +'</td>'+'<td>'+ v.updated_at +'</td>'+'<td>'+ v.descri +'</td>'+'<td>'+ v.hierarquia +'</td>'+'<td>'+ v.obs +'</td>'+'<td>'+ v.Tabela +'</td>'+'<td>'+ v.preParametros +'</td>'+'<td>'+ v.permissao +'</td>'+'<td>'+ v.ligacao_pai +'</td>'+'<td>'+ v.link +'</td>'+'<td>'+ v.action +'</td>'+

  '</tr>';
    return linha;
  }
   
  function ListaUsuarios(){
    $.getJSON('api/ListaPaginas',function(users){
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

