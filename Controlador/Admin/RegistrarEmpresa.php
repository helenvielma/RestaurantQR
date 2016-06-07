<?php
	include_once "../../Modelo/IntranetCliente/Locales.php";
	include_once "../../Modelo/Empresas.php";
	session_start();
	
	try
	{
		$obj = new Locales();
		$obj_emp = new Empresas();
		
	
		$nombre  = $_POST[ "nombre_local" ]; 
		$empresa = $_POST[ "empresa" ];
		//$run 	 = $_POST[ "run" ];
		
		// Direccion
		$region 	 = $_POST[ "region" ]; 
		$calle  	 = $_POST[ "calle" ]; 
		$provincias  = $_POST[ "provincias" ];
		$numero_dir  = $_POST[ "numero_dir" ];
		$comuna 	 = $_POST[ "comunas" ];
		$villa		 = $_POST[ "villa" ];
		$sector	     = $_POST[ "sector" ];
		$block	     = $_POST[ "block" ];
		$piso		 = $_POST[ "piso" ];  
		
		$id_usuario = $_SESSION[ "id_usuario" ];		
		$obj_emp->getIdEmpresa( $id_usuario );
		$id_empresa = $obj_emp->getIdEmpresaQuery(); 
		
		//$obj->ingresarDireccion( $run, $region, $calle, $provincias, $numero_dir, $comuna, $villa, $sector, $block, $piso,  $id_usuario );
		//$obj->ingresarLocal( $nombre, $empresa, $id_empresa );
	}
	catch ( exception $ex )
	{
		
	}
?>