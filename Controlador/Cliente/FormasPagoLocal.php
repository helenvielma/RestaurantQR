<?php
	include_once "../../Modelo/IntranetCliente/FormasPago.php";
	
	$obj = new FormasPago();
	$lista = $obj->getFormasPago();
	
	try
	{
?>

	<span>Formas de pago</span>
	<br />
	<?php
	foreach ( $lista as $local )
	{
		?>
			<span class="span_pago"><?php print $local->getNombreFormaPago(); ?> <input type="checkbox" value="<?php print $local->getIdFormaPago(); ?>" /></span>
		<?php
	}
	?>		

<?php
	}
	catch ( exception $ex )
	{
		//
	} 
?>