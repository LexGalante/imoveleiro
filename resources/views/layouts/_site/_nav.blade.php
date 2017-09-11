<header>
    <nav>
        <div class="nav-wrapper indigo darken-4">
        	<div class="container">	
              	<a href="#!" class="brand-logo"><i class="large material-icons">account_balance</i> Imoveleiro</a>
              	<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                 
              	<ul class="right hide-on-med-and-down">
              		<li>
              			<div class="container">	  
                     		<form>
                        		<div class="input-field">
                          			<input id="search" type="search" required>
                          				<label class="label-icon" for="search"><i class="material-icons">search</i></label>
                          			<i class="material-icons">close</i>
                        		</div>
                      		</form>
                        </div> 
              		</li>
              		<li><a href="{{ route('site.home') }}">Home</a></li>
              		<li><a href="{{ route('site.sobre') }}">Sobre</a></li>
              		<li><a href="{{ route('site.contato') }}">Contato</a></li>        
              	</ul>
              	<ul class="side-nav" id="mobile-demo">
                	<li><a href="{{ route('site.home') }}">Home</a></li>
              		<li><a href="{{ route('site.sobre') }}">Sobre</a></li>
              		<li><a href="{{ route('site.contato') }}">Contato</a></li>  
              	</ul>
        	</div>  	
    	</div>
    </nav>
</header>    