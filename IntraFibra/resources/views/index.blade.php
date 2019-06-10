@extends('layout.app')

@section('body')

<div class="jumbotron bg-light border border-secondary">
    <div class="row">
    	 @foreach($menus as $menu)
       @if($menu->hierarquia == 1)
        <div class="card-deck">
            <div class="card border border-primary">
              
          
        <div class="card-body " style="width: 20rem;">
            <h5 class="card-title"> {{$menu->descri}}</h5>
          <p class="card=text">
                      {{$menu->obs}}
                    </p>
                    <hr>
                      <table>
        	  @foreach($menus as $submenu)

        	    @if($submenu->ligacao_pai  == $menu->id)
        	    
        	   
        	    	<tr>
        	    		<td> <p class="card=text"> {{$submenu->obs}} </p> </td>
                        <td> <a href=" {{$submenu->link}}" class="btn btn-primary"> {{$submenu->descri}}</a></td>
                    </tr>
              
                @endif
              @endforeach
        </table>
       </div>
     



            </div>                      
        </div>
          @endif
    @endforeach
    </div>
</div>
@endsection