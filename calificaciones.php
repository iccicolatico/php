
<?php
	
	if(isset($_POST["submit"])){
		$nota=$_POST["nota"];
		
		if ($_POST["nota"]<=10 && $_POST["nota"]>=9) {
		
			$calificacion="SOBRESALIENTE";	
		
		}if (9>$_POST["nota"] && $_POST["nota"]>=7) {

			$calificacion="NOTABLE";	
	
		}if (7>$_POST["nota"] && $_POST["nota"]>=6) {

			$calificacion="BIEN";	
	
		}if (6>$_POST["nota"] && $_POST["nota"]>=5) {

			$calificacion="APROBADO";	
	
		}if (5>$_POST["nota"] && $_POST["nota"]>=4) {

			$calificacion="INSUFICIENTE";	
	
		}if (4>$_POST["nota"] && $_POST["nota"]>=3) {

			$calificacion="DEFICIENTE";	
	
		}if ($_POST["nota"]<3){

			$calificacion="MUY DEFICIENTE";
		
		}

	}	
	
	if(isset($_POST["borrar"])){
		$nota="";	
	}		
?>
<?php include '_header.php' ?>


<div class="well">Calificaciones</div>	

<br>

<form action="calificaciones.php" method="post">
	
	<TABLE WIDTH="100%" HEIGHT="100%">
		<TR>
			<TD VALIGN="MIDDLE" ALIGN="CENTER">
				<div class="caja">
					<p>Introduce la nota:<p>
					<input type="number" name="nota"  align="center" placeholder="resultado del exámen" value="<?php echo $nota; ?>" /><br><br>
					<input type="submit" name="submit" value="Calcular" /> <input type="submit" name="borrar" value="Borrar" /><br><br>
					<p>CALIFICACIÓN :<p>
					<?php echo $calificacion ?>
				</div>	
			</TD>
		</TR>
	</TABLE>
</form>
<br>

<a href="http://www.gifs-animados.es/gifs-imagenes/"><img src="http://www.gifs-animados.es/gifs-imagenes/d/dados/gifs-animados-dados-876561.gif" border="0" /></a>
<?php include '_footer.php' ?>