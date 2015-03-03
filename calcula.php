<?php include '_header.php' ?>

<?php

	$operando1=$_POST["operando1"];
	$operando2=$_POST["operando2"];
	$operacion=$_POST["operacion"];
	$resultado=0;
	
	if ($operacion=="suma")	{
		$resultado=$operando1+$operando2;
	}
	if ($operacion=="resta") {
		$resultado=$operando1-$operando2;
	}
	if ($operacion=="multiplicacion") {
		$resultado=$operando1*$operando2;
	}
	if ($operacion=="division") {
		$resultado=$operando1/$operando2;
	}
?>

<pre>

	El resultado de la <?php echo $operacion ?> es: <?php echo $resultado ?>

</pre>




<?php include '_footer.php' ?>