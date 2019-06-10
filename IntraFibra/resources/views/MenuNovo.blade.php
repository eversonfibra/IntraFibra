@extends('layout.app')

@section('body')
<div class="card border">
    <div class="card-body">
      <h5 class="card-title">Novo menu:</h5>
      <hr>
        <form action="/cadastroMenuNovoEnvia" method="post">
            @csrf
            <div class="form-group">
                <label for="nomeMenu">Nome do menu/pagina:</label>
                <input type="text" class="form-control" name="nomeMenu" 
                       id="nomemenu" >
            </div>
                <div class="form-group">
                <label for="Descricao">Descrição:</label>
                <input type="text" class="form-control" name="Descricao" 
                       id="Descricao" >
            </div>
                <div class="form-group">
                <label for="Hierarquia">Hierarquia:</label>
                <input type="text" class="form-control" name="Hierarquia" 
                       id="Hierarquia" >
            </div>
                <div class="form-group">
                <label for="Tabela">Tabela do Banco:</label>
                <input type="text" class="form-control" name="Tabela" 
                       id="Tabela" >
            </div>
                <div class="form-group">
                <label for="Parametros">API:</label>
                <input type="text" class="form-control" name="Parametros" 
                       id="Parametros" >
            </div>
                     <div class="form-group">
                <label for="Permissao">Permissão:</label>
                <input type="text" class="form-control" name="Permissao" 
                       id="Permissao" >
            </div>
                   <div class="form-group">
                <label for="Action">Action:</label>
                <input type="text" class="form-control" name="Action" 
                       id="Action" >
            </div>
                     <div class="form-group">
                <label for="Ligacao">Id Ligação</label>
                       <select name="Ligacao">
                        <option value="0">Menu Principal</option>
                        @foreach($ms as $menu)
                         <option value="{{$menu->id}}">{{$menu->descri}}</option>
                        @endforeach
                       </select>                

                      </div>
                     <div class="form-group">
                <label for=">Link">Link para Abrir Pagina:</label>
                <input type="text" class="form-control" name="Link"  id="Link" >
            </div>

              
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>
@endsection