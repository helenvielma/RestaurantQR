<?php 
	include_once "../../Modelo/IntranetCliente/Locales.php";
	$obj = new Locales();
	
	try
	{
		$id_local = $_POST[ "id_local" ];
		$obj->reactivar_local( $id_local );
	}
	catch ( exception $ex )
	{
		
	}
?>