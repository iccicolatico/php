
<?php
	
	if(isset($_POST["submit"])){
		$edad=$_POST["edad"];
		
		if ($_POST["edad"]>65) {
		
			$tarifa="JUBILADO 4 €";	
		
		}if (17<=$_POST["edad"] && $_POST["edad"]<=65) {

			$tarifa="ADULTO 8 €";	
	
		}if (17>$_POST["edad"] && $_POST["edad"]>=13) {

			$tarifa="JOVEN  4€";	
	
		}if ($_POST["edad"]<13){

			$tarifa="GRATIS";
		
		}

	}	
	
	if(isset($_POST["borrar"])){
		$tarifa="";	
	}		
?>

<?php include '_header.php' ?>


<div class="well">Tarifa Cine</div>	

<br>

<form action="tarifacine.php" method="post">
	
		<TABLE WIDTH="100%" HEIGHT="100%">
			<TR>
				<TD VALIGN="MIDDLE" ALIGN="CENTER">
					<div class="caja">
					EDAD:<input type="number" name="edad"  align="center" placeholder="edad" value="<?php echo $edad; ?>" /><br><br>
					<input type="submit" name="submit" value="Pagar" /> <input type="submit" name="borrar" value="Borrar" /><br><br>
					Tarifa de: <?php echo $tarifa ?></div>	
					</div>
				</TD>
			</TR>
		</TABLE>
	
</form>

<br>



<?php include '_footer.php' ?>