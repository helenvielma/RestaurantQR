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
		
		// Forma pago
		$forma_pago = $_POST[ "formas_pago" ];
		
		// Platos
		$nom_plat1 =  $_POST[ "nom_plato1" ];
		$des_plat1 =  $_POST[ "descripcion_plat1" ];
		$pre_plat1 =  $_POST[ "precio_plat1" ];
		
		$nom_plat2 =  $_POST[ "nom_plato2" ];
		$des_plat2 =  $_POST[ "descripcion_plat2" ];
		$pre_plat2 =  $_POST[ "precio_plat2" ];
		
		$nom_plat3 =  $_POST[ "nom_plato3" ];
		$des_plat3 =  $_POST[ "descripcion_plat3" ];
		$pre_plat3 =  $_POST[ "precio_plat3" ];
	
		$id_usuario = $_SESSION[ "id_usuario" ];		
		$obj_emp->getIdEmpresa( $id_usuario );
		$id_empresa = $obj_emp->getIdEmpresaQuery(); 
		
		$obj->ingresarDireccion( $run, $region, $calle, $provincias, $numero_dir, $comuna, $villa, $sector, $block, $piso,  $id_usuario );
		$obj->ingresarLocal( $nombre, $empresa, $id_empresa );
		$obj->ingresarPlatos( $nom_plat1, $nom_plat2, $nom_plat3, $des_plat1, $des_plat2, $des_plat3, $pre_plat1, $pre_plat2, $pre_plat3 ) ;
	}
	catch ( exception $ex )
	{
		
	}
?>