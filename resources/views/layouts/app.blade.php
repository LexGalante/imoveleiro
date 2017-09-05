<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('lib/materialize/dist/css/materialize.min.css') }}" media="screen,projection">
    <link rel="stylesheet" href="{{ asset('css/sytle.css') }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title')</title>    
</head>
<body>
    <div id="app">
    	<script type="text/javascript" src="{{ asset('lib/jquery/dist/jquery.js') }}"></script>
		<script src="{{ asset('lib/materialize/dist/js/materialize.min.js') }}"></script>
        
        <nav>
            <div class="nav-wrapper blue">
            	<div class="container">	
                  	<a href="#!" class="brand-logo">Imoveleiro</a>
                  	<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                  	<ul class="right hide-on-med-and-down">
                  		<li><a href="#">Home</a></li>        
                  	</ul>
                  	<ul class="side-nav" id="mobile-demo">
                    	<li><a href="#">Home</a></li> 
                  	</ul>
            	</div>  	
        	</div>
        </nav>
		<div class="container">	
        	@yield('content')
        </div>	
        
        <script src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
    	<script src="{{asset('lib/materialize/dist/js/materialize.js')}}"></script>
    	<script src="{{asset('js/init.js')}}"></script>
    </div>
</body>
</html>
