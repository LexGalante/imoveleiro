@extends('layouts.site')

@section('content')
<div class="container">
	<div class="row section">
		<h3 align="center">Contato</h3>
	</div>
    <div class="row section">
    	<div class="col s12 m8">
    		<img alt="" class="responsive.img" src="{{ asset('img/mansao1.jpg') }}">
    	</div>
    	<div class="col s12 m4">
    		<form action="">
    			<div class="input-field">
    				<label>Nome</label>
    				<input type="text" name="nome" class="validate">
    			</div>
    			<div class="input-field">
    				<label>E-mail</label>
    				<input type="email" name="email" class="validate">
    			</div>
    			<div class="input-field">
    				<label>Mensagem</label>
    				<textarea rows="" cols="" class="materialize-textarea"></textarea>
    			</div>
    			<button class="btn blue">Enviar</button>
    		</form>
    	</div>
    </div>
</div>
@endsection