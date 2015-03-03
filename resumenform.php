<?php include ('_header.php') ?>

<div class="well">Tus datos son:</div>

	<?php 
    	$nombre=$_POST["nombre"];
    	$apellidos=$_POST["apellidos"];
    	$edad=$_POST["edad"];
    	$sexo=$_POST["sexo"];
    	$dni=$_POST["dni"];
    	$direccion=$_POST["direccion"];
    	$email=$_POST["email"];
    	$telefono=$_POST["telefono"];
    	$usuario=$_POST["usuario"];
    	$password=$_POST["password"];
		
		$hora= date ("h:i:s");
		$dia=date("l");

		if ($dia=="Monday") $dia="Lunes";
		if ($dia=="Tuesday") $dia="Martes";
		if ($dia=="Wednesday") $dia="Miércoles";
		if ($dia=="Thursday") $dia="Jueves";
		if ($dia=="Friday") $dia="Viernes";
		if ($dia=="Saturday") $dia="Sabado";
		if ($dia=="Sunday") $dia="Domingo";

		$dia2=date("d");
		
		$mes=date("F");
		
		if ($mes=="January") $mes="Enero";
		if ($mes=="February") $mes="Febrero";
		if ($mes=="March") $mes="Marzo";
		if ($mes=="April") $mes="Abril";
		if ($mes=="May") $mes="Mayo";
		if ($mes=="June") $mes="Junio";
		if ($mes=="July") $mes="Julio";
		if ($mes=="August") $mes="Agosto";
		if ($mes=="September") $mes="Setiembre";
		if ($mes=="October") $mes="Octubre";
		if ($mes=="November") $mes="Noviembre";
		if ($mes=="December") $mes="Diciembre";

		$ano=date("Y");
		$nacimiento=$ano - $edad;
	?>	
	
<pre>
	<p>Fecha: <?php echo "$hora $dia, $dia2 de $mes de $ano" ?>
	<p>Naciste el año: <?php echo $nacimiento ?> 	
	<p>Te llamas : <?php echo $nombre ?> tiene <?php echo strlen($nombre) ?> caracteres. ==> <?php echo strtoupper($nombre)?></p>
	<p>Tu D.N.I. es:<?php echo $dni ?></p>
	<p>Sexo: <?php echo $sexo ?></p>		
	<p>Dirección: <?php echo $direccion ?></p>
	<p>Dirección de correo: <?php echo $email ?></p>
	<p>Teléfono: <?php echo $telefono ?></p>
	<p>Usuario: <?php echo $usuario ?></p>
	<p>Password: <?php echo $password ?></p>
</pre>
        
    


<?php include ('_footer.php') ?>