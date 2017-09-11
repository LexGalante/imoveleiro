<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('lib/materialize/dist/css/materialize.min.css') }}" media="screen,projection">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
        <script src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
    	<script src="{{asset('lib/materialize/dist/js/materialize.js')}}"></script>
    	<script src="{{asset('js/init.js')}}"></script>
    	
        @include('layouts._site._nav')
        
        <main style="flex: 1 0 auto;">
        	@yield('content')
        </main>	
        
        @include('layouts._site._footer')
    </div>
</body>
</html>
