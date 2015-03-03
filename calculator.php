

<?php
	if(isset($_POST["calcula"])){
		$operando1=$_POST["operando1"];
		$operando2=$_POST["operando2"];

	}	
	if(isset($_POST["borrar"])){
		$operando1="0";
		$operando2="0";
	}
?>

<?php include '_header.php' ?>

<div class="well">calculadora</div>


<form action="calculator.php" method="post">
	<input type="number" name="operando1" value="<?php echo $operando1 ?>" />
	<input type="number" name="operando2" value="<?php echo $operando2 ?>" />
	<input type="submit" name="calcula" value="Calcular"/>
	<input type="submit" name="borrar" value="Borrar"/>
</form>
<br>

<div class="well">El resultado es: <?php echo $operando1+$operando2 ?></div>


<?php include '_footer.php' ?>