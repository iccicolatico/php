<?php include '_header.php' ?>
<br>
<div class="well">Login</div>

<form action="procesa_datos.php" method="post">
	<div class="container">
    	<div class="row">
        	<div class="col-md-offset-5 col-md-3">
            	<div class="form-login">
            		<h4>Bienvenido</h4>
            		<input type="text" name="usuario" value="" class="form-control input-sm chat-input" placeholder="usuario" />
            		</br>
            		<input type="password" name="password" value="" class="form-control input-sm chat-input" placeholder="password" />
            		</br>
            		<div class="wrapper">
            			
            			<span class="group-btn">
            				<button type="submit" class="btn btn-primary">Enviar</button> 
                 			
            			</span>
            		</div>
        		</div>
        	</div>
    	</div>
	</div>
</form>
<?php include '_footer.php' ?>