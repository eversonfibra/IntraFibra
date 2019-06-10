<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<title></title>
</head>
<body>
@component('componente_topo')

@endcomponent
     <div class="container">
     <main role="main">
  @hasSection('body')

  @yield('body')

  @endif

        </main>
     </div>


<script src="{{asset('js/app.js')}}" type="text/javascript">
	 

</script>
 @hasSection('javascript')
 @yield('javascript')
@endif
</body>
</html>