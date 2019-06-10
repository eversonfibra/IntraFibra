@extends('layout.app')

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Menus</h5>

@if(count($ms) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Descrição</th>
                    <th>Hierarquia</th>
                    <th>obs</th>
                    <th>Tabela</th>
                    <th>Parametros</th>
                    <th>Permissão</th>
                    <th>Id Ligação</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
    @foreach($ms as $cat)
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->descri}}</td>
                    <td>{{$cat->hierarquia}}</td>
                    <td>{{$cat->obs}}</td>
                    <td>{{$cat->position}}</td>
                    <td>{{$cat->preParametros}}</td>
                    <td>{{$cat->permissao}}</td>
                    <td>{{$cat->ligacao_pai	}}</td>
                    <td>{{$cat->link}}</td>
                    <td>
                      
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
@endif        
    </div>
    <div class="card-footer">
        <a href="cadastroMenuNovo" class="btn btn-sm btn-primary" role="button">Novo menu</a>
    </div>
</div>

@endsection