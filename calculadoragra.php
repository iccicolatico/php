
<?php include '_header.php' ?>

<form action="calculadoragra.php" method="post">	
<input type="number" name="operando1" value="<?php echo $operando1 ?>" />
<input type="number" name="operando2" />
<br />
<pre>	
<input type="checkbox" name="suma" />suma<br />
<input type="checkbox" name="resta" />resta<br />
<input type="checkbox" name="multiplicacion" />multiplicacion<br />
<input type="checkbox" name="division" />division<br />

<input type="submit" name="calcula" value="Calcular">
</pre>
<div class="well">
<div class="row">
		<input type="button" value="1"/>
		<input type="button" value="2"/>
		<input type="button" value="3"/>
</div>
<br>
<div class="row">
		<input type="button" value="4"/>
		<input type="button" value="5"/>
		<input type="button" value="6"/>
</div>
<br>
<div class="row">
<div class="col-5">
		<input type="button" value="7"/>
		<input type="button" value="8"/>
		<input type="button" value="9"/>
</div>
</div>
</div>
</form>





<?php include '_footer.php' ?>