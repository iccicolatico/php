<?php include '_header.php' ?>
<?php 	$texto= "La rapida zorra marrón"; ?>
		<div class="well">Cadenas de texto</div>
		
		<div class="row">
			<div class="col-md-6"><strong>minúsculas: </strong><?php echo strtolower($texto) ?></div>
			<div class="col-md-6"><strong>mayúsculas: </strong><?php echo strtoupper($texto) ?></div>
		</div>
		<div class="row">	
			<div class="col-md-6"><strong>1ª mayúsculas: </strong><?php echo ucfirst($texto) ?></div>
			<div class="col-md-6"><strong>1ªs mayúsculas: </strong><?php echo ucwords($texto)?></div>
		</div>
		<div class="row">	
			<div class="col-md-6"><strong>Longitud: </strong><?php echo strlen($texto) ?></div>
			<div class="col-md-6"><strong>Reemplazar: </strong><?php echo str_replace("zorra","Maria",$texto) ?></div>
		</div>
		<div class="row">	
			<div class="col-md-6"><strong>Espacios: </strong><?php echo trim($texto) ?></div>
			<div class="col-md-6"><strong>Buscar: </strong><?php echo strstr($texto,"marrón" ) ?></div>
		</div>
		
		<?php
				$var1=3;
				$var2=4;
			?>
		<br>
		<div class="col-xs-12">
				
				<strong>Matemáticas básicas:</strong><br> ((1+2+3)*4)/2-5 = <?php echo ((1+2+$var1)*$var2)/2-5;?><br>
				Potencia:<?php echo pow(2,8) ?><br>
				Raíz cuadrada:<?php echo sqrt(100) ?><br>
				Nº al azar:<?php echo rand() ?><br>
				Nº al azar (1-10):<?php echo rand(1,10) ?><br>
				Valor absoluto: <?php echo abs(1-300) ?>
			
		</div>	
				
<?php include '_footer.php' ?>