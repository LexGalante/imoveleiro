@extends('layouts.site')

@section('content')
<div class="container">
	<div class="row section">
		<h3 align="center">Imovel</h3>
	</div>
    <div class="row section">
    	<div class="col s12 m8">
    		<div class="row">
    			<div class="slider">
    				<ul class="slides">
    					<li>
    						<img alt="" src="{{ asset('img/slide1.jpg') }}">
    						<div class="caption left-align">
								<h3>Slide 2</h3>
								<h5>Realize o sonho da casa propia</h5>
							</div>
    					</li>
    					<li>
    						<img alt="" src="{{ asset('img/slide2.jpg') }}">
    						<div class="caption left-align">
								<h3>Slide 2</h3>
								<h5>Realize o sonho da casa propia</h5>
							</div>
    					</li>
    					<li>
    						<img alt="" src="{{ asset('img/slide3.jpg') }}">
    						<div class="caption left-align">
								<h3>Slide 2</h3>
								<h5>Realize o sonho da casa propia</h5>
							</div>
    					</li>
    					<li>
    						<img alt="" src="{{ asset('img/slide2.jpg') }}">
    						<div class="caption left-align">
								<h3>Slide 2</h3>
								<h5>Realize o sonho da casa propia</h5>
							</div>
    					</li>
    				</ul>
    			</div>
    		</div>
    		<div class="row">
    			<button onclick="sliderPrev()" class="btn">Anterior</button>
    			<button onclick="sliderNext()" class="btn">Próxima</button>
    		</div>
    	</div>
    	<div class="col s12 m4">
    		<h4>Titulo do Imovel</h4>
    		<blockquote>
    			Descrição sobre a imovel
    		</blockquote>
    		<p><b>Cod:</b> </p>
    		<p><b>Status:</b> </p>
    		<p><b>Tipo:</b> </p>
    		<p><b>Endereço:</b> </p>
    		<p><b>CEP:</b> </p>
    	</div>
    </div>
</div>
@endsection
