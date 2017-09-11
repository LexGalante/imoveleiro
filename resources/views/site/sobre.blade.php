@extends('layouts.site')

@section('content')
<div class="container">
	<div class="row section">
		<h3 align="center">Sobre</h3>
	</div>
    <div class="row section">
    	<div class="col s12 m8">
    		<img alt="" class="responsive.img" src="{{ asset('img/mansao1.jpg') }}">
    	</div>
    	<div class="col s12 m4">
    		<h4>Empresa</h4>
    		<blockquote>
    			Descrição sobre a empresa
    		</blockquote>
    		<p>Texto Maior sobre a empresa</p>
    	</div>
    </div>
</div>
@endsection