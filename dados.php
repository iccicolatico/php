


<?php 	

$imagen1='<img src="img/dados.png">';
$imagen2='<img src="img/dados.png">';
$imagen3='<img src="img/dados.png">';
$imagen4='<img src="img/dados.png">';
$resultado1=0;
$resultado=0;

if(isset($_POST["start1"])){
		
		$imagen1='<img src="http://www.gifs-animados.es/gifs-imagenes/d/dados/gifs-animados-dados-876561.gif" border="0" />';
		$imagen2='<img src="http://www.gifs-animados.es/gifs-imagenes/d/dados/gifs-animados-dados-876561.gif" border="0" />';
		$imagen3='<img src="http://www.gifs-animados.es/gifs-imagenes/d/dados/gifs-animados-dados-876561.gif" border="0" />';
		$imagen4='<img src="http://www.gifs-animados.es/gifs-imagenes/d/dados/gifs-animados-dados-876561.gif" border="0" />';
	
}

if(isset($_POST["stop1"])){
				
		$resultado=rand(2,12);
		$resultado1=rand(2,12);

			switch ($resultado1) {
				case 2:
					$imagen3='<img src="img/uno.png">';
					$imagen4='<img src="img/uno.png">';		
					break;
				case 3:
					$imagen3='<img src="img/uno.png">';
					$imagen4='<img src="img/dos.png">';
					break;
				case 4:
					$imagen3='<img src="img/tres.png">';
					$imagen4='<img src="img/uno.png">';				
					break;
				case 5:
					$imagen3='<img src="img/cuatro.png">';
					$imagen4='<img src="img/uno.png">';
					break;
				case 6:
					$imagen3='<img src="img/dos.png">';
					$imagen4='<img src="img/cuatro.png">';
			    	break;
			    case 7:
					$imagen3='<img src="img/tres.png">';
					$imagen4='<img src="img/cuatro.png">';
					break;	
				case 8:
					$imagen3='<img src="img/cinco.png">';
					$imagen4='<img src="img/tres.png">';
					break;
				case 9:
					$imagen3='<img src="img/seis.png">';
					$imagen4='<img src="img/tres.png">';
					break;
				case 10:
					$imagen3='<img src="img/cuatro.png">';
					$imagen4='<img src="img/seis.png">';
					break;
				case 11:
					$imagen3='<img src="img/cinco.png">';
					$imagen4='<img src="img/seis.png">';
					break;
				case 12:
					$imagen3='<img src="img/seis.png">';
					$imagen4='<img src="img/seis.png">';
				break;
				}
		
		switch ($resultado) {
			case 2:
				$imagen1='<img src="img/uno.png">';
				$imagen2='<img src="img/uno.png">';		
				break;
			case 3:
				$imagen1='<img src="img/uno.png">';
				$imagen2='<img src="img/dos.png">';
				break;
			case 4:
				$imagen1='<img src="img/tres.png">';
				$imagen2='<img src="img/uno.png">';				
				break;
			case 5:
				$imagen1='<img src="img/cuatro.png">';
				$imagen2='<img src="img/uno.png">';
				break;
			case 6:
				$imagen1='<img src="img/dos.png">';
				$imagen2='<img src="img/cuatro.png">';
		    	break;
		    case 7:
				$imagen1='<img src="img/tres.png">';
				$imagen2='<img src="img/cuatro.png">';
				break;	
			case 8:
				$imagen1='<img src="img/cinco.png">';
				$imagen2='<img src="img/tres.png">';
				break;
			case 9:
				$imagen1='<img src="img/seis.png">';
				$imagen2='<img src="img/tres.png">';
				break;
			case 10:
				$imagen1='<img src="img/cuatro.png">';
				$imagen2='<img src="img/seis.png">';
				break;
			case 11:
				$imagen1='<img src="img/cinco.png">';
				$imagen2='<img src="img/seis.png">';
				break;
			case 12:
				$imagen1='<img src="img/seis.png">';
				$imagen2='<img src="img/seis.png">';
			break;
		}
	}



	

?>


<?php include '_header.php' ?>
		

<div class="well">Juego de Dados</div>

<br>

<form action="dados.php" method="post">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-3"><div class="well">COMPUTER:<br><br><?php echo $imagen1 ?><?php echo $imagen2 ?><br><br><input type="submit" name="start1" value="start">  <input type="submit" name="stop1" value="stop"></div></div>
		<div class="col-md-2"></div>
		<div class="col-md-1"></div>
		<div class="col-md-3"><div class="well">JUGADOR 1:<br><br><?php echo $imagen3 ?><?php echo $imagen4 ?></div></div>
		<div class="col-md-2"></div>
	</div>		
</form>		
	

	
<br>

<?php include '_footer.php' ?>
