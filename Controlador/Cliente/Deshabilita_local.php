<?php 
	include_once "../../Modelo/IntranetCliente/Locales.php";
	$obj = new Locales();
	
	try
	{
		$id_local = $_POST[ "id_local" ];
		$obj->deshabilitarLocal( $id_local );
	}
	catch ( exception $ex )
	{
		
	}
?>