<?php include '_header.php' ?>

<?php

$cartas=array("As","2","3","4","5","6","7","8","9","10","Jota","Reina","Rey");
$palos=array("de corazones"," de treboles","de diamantes","de picas");
$resultado1="img/red_joker.png";
$resultado2="img/red_joker.png";

if (isset($_POST["go"])){
	
	while (($p1==$p2)&&($c1==$c2)) {
		$p1=rand(1,4);
		$p2=rand(1,4);
		$c1=rand(1,13);
		$c2=rand(1,13);	
	}
	$resultado1="img/" . $c1 . "_of_" . $p1 . ".png";
	$resultado2="img/" . $c2 . "_of_" . $p2 . ".png";

}if (isset($_POST["reset"])){

	$resultado1="img/red_joker.png";
	$resultado2="img/red_joker.png";

}


?>


 <div class="well">Juego de Cartas</div>

<br>

<form action="juegocartas.php" method="post">
	<div class="row">
		<div class="col-md-6"><div class="well">JUGADOR 1: <?php echo $cartas[$c1-1]; ?> <?php echo $palos[$p1-1]; ?></div></div>
		<div class="col-md-6"><div class="well">JUGADOR 2: <?php echo $cartas[$c2-1]; ?> <?php echo $palos[$p2-1]; ?></div></div>
	</div>
	<br><br>
	<div class="row">		
		<div class="col-md-6"><img src="<?php echo $resultado1; ?>"></div>
		<div class="col-md-6"><img src="<?php echo $resultado2; ?>"></div>
		</div>
	<br><br>	
	
	<br><br>
		<input type="submit" name="go" value="Go!">  
		<input type="submit" name="reset" value="Reset">
			
</form>		
	




<?php include '_footer.php' ?>