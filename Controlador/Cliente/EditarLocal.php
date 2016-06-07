<?php
	include_once "../../Modelo/IntranetCliente/Locales.php";

	session_start();
	
	try
	{
		$obj = new Locales();

		$id_local = $_GET[ "id_local" ];
		$nombre   = $_GET[ "nombre_local" ]; 
		//$run 	 = $_GET[ "run" ];
		
		// Direccion
		$region 	 = $_GET[ "region" ]; 
		$calle  	 = $_GET[ "calle" ]; 
		$provincias  = $_GET[ "provincias" ];
		$numero_dir  = $_GET[ "numero_dir" ];
		$comuna 	 = $_GET[ "comunas" ];
		$villa		 = $_GET[ "villa" ];
		$sector	     = $_GET[ "sector" ];
		$block	     = $_GET[ "block" ];
		$piso		 = $_GET[ "piso" ];  

		// Forma pago
		//$forma_pago = $_GET[ "formas_pago" ];
		
		// Platos
		$id_plato1 =  $_GET[ "id_plato1" ];
		$nom_plat1 =  $_GET[ "nom_plato1" ];
		$des_plat1 =  $_GET[ "descripcion_plat1" ];
		$pre_plat1 =  $_GET[ "precio_plat1" ];	
	 /*	
		$id_plato1 =  '8';
		$nom_plat1 =  'Ron abuellillo';
		$des_plat1 =  'Ron grandfather';
		$pre_plat1 =  '5990';
	*/
		$id_plato2 =  $_GET[ "id_plato2" ];
		$nom_plat2 =  $_GET[ "nom_plato2" ];
		$des_plat2 =  $_GET[ "descripcion_plat2" ];
		$pre_plat2 =  $_GET[ "precio_plat2" ];
		
		$id_plato3 =  $_GET[ "id_plato3" ];
		$nom_plat3 =  $_GET[ "nom_plato3" ];
		$des_plat3 =  $_GET[ "descripcion_plat3" ];
		$pre_plat3 =  $_GET[ "precio_plat3" ];
	
		$id_usuario = $_SESSION[ "id_usuario" ];

		
		$obj->setIdLocal( $id_local );	
		$obj->editarLocal( $nombre );
		$obj->editarMenu( $nom_plat1, $nom_plat2, $nom_plat3, $des_plat1, $des_plat2, $des_plat3, $pre_plat1, $pre_plat2, $pre_plat3, $id_plato1, $id_plato2, $id_plato3 );
		$obj->editarDireccion( $calle, $provincias, $numero_dir, $comuna, $villa, $sector, $block, $piso );
	}
	catch ( exception $ex )
	{
		
	}
?>