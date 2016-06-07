<?php
	include_once "../../Modelo/IntranetCliente/Locales.php";
	session_start();

	try
	{
		$obj = new Locales();	
		$id_usuario = $_SESSION[ "id_usuario" ];	
		
		if ( $obj->comprobar_asociados_empresa($id_usuario) )
		{
			echo '1';
		}
		else
		{
			echo '2';
		}
		
	}
	catch ( exception $ex )
	{
		
	}
?>
