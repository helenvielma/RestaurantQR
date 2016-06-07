<?php

include_once "../../Modelo/BDConexion.php";
include_once "../../Modelo/Clases/Local.php";
include_once "../../Modelo/Clases/FormaPago.php";

/**
 * Clase locales, esta clase es la encargada de realizar las transaccciones
 * correspondientes
 */
class Locales extends Conexion
{
	private $conexion;
	// Necesaria para su uso en las funciones
	private $locales;
	private $last_id_direccion;
	private $last_id_local;
	private $id_persona;
	private $id_usuario;
	private $plato_array;
	private $id_local;

	public function __construct( )
	{
		/** Estos tres llamados son necesarios para que la clase se conecte con la base de datos **/
		parent::ConectaBD( );
		$this -> conexion = parent::getConexion( );
		return true;
	}

	/**
	 * Método para listar locales, se debe de crear un objeto de la clase correspondiente "Locales"
	 * la cual deberá de ser llenado para luego poder mostrar los datos por pantalla
	 * todas las vistas que requieran de mostrar algun dato obtenido previamente de la base de datos
	 * deberan de seguir este modelo, generando una lista y llenandola acorde a la clase
	 */
	public function listarLocales_id( $id_usuario )
	{
		// Genero un arreglo
		$this -> locales = array( );

		$selectSql = "SELECT * FROM LOCAL , empresa, usuarios WHERE usuarios.idUsuarios = empresa.idUsuarios AND local.idEmpresa = empresa.idEmpresa AND usuarios.idUsuarios =  '$id_usuario' ORDER BY local.Nombre_Local ASC";
		$datos = mysql_query( $selectSql );

		if ( mysql_num_rows( $datos ) > 0 )
		{
			while ( $f = mysql_fetch_array( $datos ) )
			{
				$local = new Local( $f["idLocal"], $f["Nombre_Local"], $f["URLQR"], $f["idTipo"], $f["idDireccion"], $f["idEmpresa"]);
				array_push( $this -> locales, $local );
				// En esta tupla es cuando inserto el objeto
			}

			return true;
		}
		else
		{
			return false;
		}
	}

	/*
	 * Esta funcion permite, mediante el id del usuario que ha iniciado la sesion
	 * saber si un administrador le ha asociado alguna empresa a su cuenta o no.
	 */
	public function comprobar_asociados_empresa( $id_usuario )
	{
		try
		{
			$select_usuario_asociado_empresa = "SELECT usuarios.Nombre_Usuarios FROM usuarios, empresa WHERE usuarios.idUsuarios = empresa.idUsuarios AND usuarios.idUsuarios = '$id_usuario'";

			$datos = mysql_query( $select_usuario_asociado_empresa );
			if ( mysql_num_rows( $datos ) > 0 )
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		catch ( exception $ex )
		{
			//
		}
	}
	
	public function deshabilitarLocal( $id_local )
	{
		try
		{
			$sql = "UPDATE `local` SET `Estado`=0 WHERE `idLocal`='$id_local'";
			$result = mysql_query( $sql );
			
			if ( $result > 0 ) return true; else return false;
		}
		catch ( exception $ex )
		{
			//
		}
	}
	
	public function reactivar_local( $id_local )
	{
		try
		{
			$sql = "UPDATE `local` SET `Estado`=1 WHERE `idLocal`='$id_local'";
			$result = mysql_query( $sql );
			
			if ( $result > 0 ) return true; else return false;
		}
		catch ( exception $ex )
		{
			//
		}
	}
	
	public function comprobarDesactivados( $id_usuario )
	{
		try
		{
			$sql = "SELECT * FROM LOCAL , empresa, usuarios WHERE usuarios.idUsuarios = empresa.idUsuarios AND local.idEmpresa = empresa.idEmpresa AND usuarios.idUsuarios =  '$id_usuario' AND local.Estado = 0";
			$result = mysql_query($sql);
			
			if ( mysql_num_rows( $result ) > 0 )
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		catch ( exception $ex )
		{
			//
		}
	}
	
	public function get_estado_local( $id_local )
	{
		try
		{
			$estado = null;
			
			$sql = "SELECT Estado from local WHERE local.idLocal = '$id_local'";
			$result = mysql_query($sql);
			
			if ( mysql_num_rows($result) > 0 )
			{
				while ( $f = mysql_fetch_array($result) )
				{
					$estado = $f[ "Estado" ];
				}
			}
			
			return $estado;
		}
		catch ( exception $ex )
		{
			//
		}
	}

	/*
	 * Genera una cadena de texto con el formato correcto para mostrar la direccion de un local
	 */
	public function armarDireccion( $id_direccion )
	{
		try
		{
			$direccion = null;

			$sql = "SELECT * FROM direccion WHERE idDireccion = '$id_direccion'";
			$result = mysql_query( $sql );

			if ( mysql_num_rows( $result ) > 0 )
			{
				while ( $f = mysql_fetch_array( $result ) )
				{
					$direccion = $f["Calle"] . " #" . $f["Numero"];
				}
			}

			return $direccion;
		}
		catch ( exception $ex )
		{
			//
		}
	}
	
	public function armarDireccion_idLocal( $id_local )
	{
		try
		{
			$direccion = null;

			$sql = "SELECT * FROM direccion, local WHERE direccion.idDireccion = local.idDireccion AND local.idLocal = '$id_local'";
			$result = mysql_query( $sql );

			if ( mysql_num_rows( $result ) > 0 )
			{
				while ( $f = mysql_fetch_array( $result ) )
				{
					$direccion = $f["Calle"] . " #" . $f["Numero"];
				}
			}

			return $direccion;
		}
		catch ( exception $ex )
		{
			//
		}
	}
	
	public function nombreLocal_idLocal( $id_local )
	{
		try
		{
			$nombre_local = null;

			$sql = "SELECT * FROM local WHERE idLocal = '$id_local'";
			$result = mysql_query( $sql );

			if ( mysql_num_rows( $result ) > 0 )
			{
				while ( $f = mysql_fetch_array( $result ) )
				{
					$nombre_local = $f["Nombre_Local"];
				}
			}

			return $nombre_local;
		}
		catch ( exception $ex )
		{
			//
		}
	}
	
	/*
	 * Permite, mediante el id del usuario, saber cual es el local casa matriz
	 */
	public function getLocalMatriz( $id_usuario )
	{
		try
		{
			$local = null;
			
			$sql = "SELECT local.idLocal FROM usuarios, empresa, local WHERE usuarios.idUsuarios = empresa.idUsuarios AND local.idEmpresa = empresa.idEmpresa AND local.idTipo = '5' AND usuarios.idUsuarios = '$id_usuario'";
			$result = mysql_query($sql);
			
			if ( mysql_num_rows($result) > 0 )
			{
				while ( $f = mysql_fetch_array( $result ) )
				{
					$local = $f[ "idLocal" ];
				}
			}
		
			return $local;
		}
		catch ( exception $ex )
		{
			//
		}
	}
	
	/*
	 * le ingresa una direccion a un local
	 */
	public function ingresarDireccion( $run, $region, $calle, $provincias, $numero_dir, $comuna, $villa, $sector, $block, $piso,  $id_usuario )
	{		
		try
		{
			$id_comuna  = $this->getIdComuna($comuna);	
			$this->getIdPersona($id_usuario);			
			$id_persona = $this->id_persona;
			$this->id_usuario = $id_usuario;
			
				
			$sql_insert_local = "INSERT INTO `direccion` (`Calle`, `Numero`, `Villa-Poblacion-Condominio`, `piso`, `block`, `sector`, `idPersonas`, `idComunas`, `idTipo`, `Estado`, `idUsuariosAudit`)
			 VALUES	('$calle', $numero_dir, '$villa', '$piso', '$block', '$sector', '$id_persona', '$id_comuna', 6, 1, 2)";
			 
			$result = mysql_query($sql_insert_local);
			
			if ( $result > 0 )
			{
				$this->last_id_direccion = mysql_insert_id();
			} 
		}
		catch ( exception $ex )
		{
			//
		}
	}

	/*
	 * Permite obtener el id de la comuna mediante su nombre
	 */
	private function getIdComuna ( $comuna )
	{
		try
		{
			$id_comuna = null;
			
			$sql = "SELECT * from comunas WHERE Nombre_Comunas = '$comuna'";			
			$result = mysql_query($sql);
			
			if ( mysql_num_rows($result) > 0 )
			{
				while ( $f = mysql_fetch_array($result) )
				{
					$id_comuna = $f[ "idComunas" ];
				}
			}
			
			return $id_comuna;
			 
		}
		catch ( exception $ex )
		{
			//
		}
	}
	
	/*
	 *	Permite obtener el id de una persona
	 */
	private function getIdPersona( $id_usuario )
	{
		try
		{
			$sql = "SELECT * FROM usuarios WHERE idUsuarios =  '$id_usuario'";
			$result = mysql_query($sql);
			
			if ( mysql_num_rows($result) > 0 )
			{
				while ( $f = mysql_fetch_array($result) )
				{
					$this->id_persona = $f[ "idPersonas" ];	
				}
			}
		}
		catch ( exception $ex )
		{
			//
		}
	}

	public function ingresarLocal( $nombre, $empresa, $id_empresa )
	{
		try
		{	
			$sql_insert_local = "INSERT INTO local ( Nombre_Local, URLQR, idTipo, idDireccion, idEmpresa, Estado, idUsuariosAudit) VALUES ( '$nombre', 'http://qr.cl', 6, $this->last_id_direccion, $id_empresa, 1, 2 )";
			$result = mysql_query( $sql_insert_local );
			
			if ( $result > 0 )
			{
				$this->last_id_local = mysql_insert_id();
			}
		}
		catch ( exception $ex )
		{
			//
		}
	}
	
	public function get_id_local()
	{
		try
		{
			
		}
		catch ( exception $ex )
		{
			//
		}
	}
	
	public function ingresarPlatos ( $nom_plat1, $nom_plat2, $nom_plat3, $des_plat1, $des_plat2, $des_plat3, $pre_plat1, $pre_plat2, $pre_plat3 )
	{
		try
		{
			$sql_insert_plato1 = "INSERT INTO `proyecto2_final`.`menu` (`Nombre_Menu_es`, `Nombre_Menu_en`, `Precio`, `idLocal`, `Estado`, `idUsuariosAudit`) VALUES ('$nom_plat1', '$des_plat1', '$pre_plat1', '$this->last_id_local', 1, 2)";
			$sql_insert_plato2 = "INSERT INTO `proyecto2_final`.`menu` (`Nombre_Menu_es`, `Nombre_Menu_en`, `Precio`, `idLocal`, `Estado`, `idUsuariosAudit`) VALUES ('$nom_plat2', '$des_plat2', '$pre_plat2', '$this->last_id_local', 1, 2)";
			$sql_insert_plato3 = "INSERT INTO `proyecto2_final`.`menu` (`Nombre_Menu_es`, `Nombre_Menu_en`, `Precio`, `idLocal`, `Estado`, `idUsuariosAudit`) VALUES ('$nom_plat3', '$des_plat3', $pre_plat3, '$this->last_id_local', 1, 2)";
			
			$sq_result_plat1 = mysql_query( $sql_insert_plato1 ); 
			$sq_result_plat2 = mysql_query( $sql_insert_plato2 );
			$sq_result_plat3 = mysql_query( $sql_insert_plato3 );
			
			if ( $sq_result_plat1 > 0 && $sq_result_plat2 > 0 && $sq_result_plat3 > 0 ) return true; else return false; 
		}
		catch ( exception $ex )
		{
			//
		}
	}
	
	public function ingresarFormasPago()
	{
		try
		{
		}
		catch ( exception $ex )
		{
			//
		}
	}
	
	public function getDatoMenu( $id_local )
	{
		try
		{
			$this->plato_array = array( );
			
			$sql = "SELECT * from local, menu WHERE local.idLocal = menu.idLocal AND local.idLocal = '$id_local'";
			$result = mysql_query($sql);
			
			if ( mysql_num_rows( $result ) > 0 )
			{
				
			}
			else
			{
				
			}
		}
		catch ( exception $ex )
		{
			//
		}
	}
	
	/***************************************/
	/******** EDITAR LOCAL *****************/
	/***************************************/
	public function editarLocal( $nombre_local )
	{
		try
		{
			$query = "UPDATE `local` SET `Nombre_Local`='$nombre_local' WHERE `idLocal`='$this->id_local'";
			$result = mysql_query( $query );
			
			if ( $result > 0 ) return true; else return false;
		}
		catch ( exception $ex )
		{
			//
		}
	}
	
	public function editarMenu( $nom_plat1, $nom_plat2, $nom_plat3, $des_plat1, $des_plat2, $des_plat3, $pre_plat1, $pre_plat2, $pre_plat3, $id_plato1, $id_plato2, $id_plato3 )
	{
		try
		{
			echo $query1 = "UPDATE `menu` SET `Nombre_Menu_es`='$nom_plat1', `Nombre_Menu_en`='$des_plat1', `Precio`=$pre_plat1 WHERE `idMenu`='$id_plato1'";
			echo $query2 = "UPDATE `menu` SET `Nombre_Menu_es`='$nom_plat2', `Nombre_Menu_en`='$des_plat2', `Precio`=$pre_plat2 WHERE `idMenu`='$id_plato2'";
			echo $query3 = "UPDATE `menu` SET `Nombre_Menu_es`='$nom_plat3', `Nombre_Menu_en`='$des_plat3', `Precio`=$pre_plat3 WHERE `idMenu`='$id_plato3'";
			
			$result1 = mysql_query($query1);
			$result2 = mysql_query($query2);
			$result3 = mysql_query($query3);
			
			if ( $result1 > 0 && $result2 > 0 && $result3 > 0 ) return true; else return false;
		}
		catch ( exception $ex )
		{
			//
		}
	}

	public function editarDireccion( $calle, $provincias, $numero_dir, $comuna, $villa, $sector, $block, $piso )
	{
		try
		{
			$id_dire_local = $this->getIdDireccionLocal( $this->id_local );
			$sql = "UPDATE `direccion` SET `Calle`='$calle', `Numero`='$numero_dir', `Villa-Poblacion-Condominio`='$villa', `Piso`='$piso', `Block`='$block', `Sector`='$sector', `idComunas`='$comuna' WHERE `idDireccion`='$id_dire_local'";  
			$result = mysql_query($sql);
			
			if ( $result > 0 ) return true; else false;
		}
		catch ( exception $ex )
		{
			//
		}
	}
	
	private function getIdDireccionLocal( $id_local )
	{
		try
		{
			$id_dire_local = null;
			
			$sql = "SELECT * FROM local INNER JOIN direccion ON local.idDireccion = direccion.idDireccion WHERE local.idLocal = '$id_local'";
			$result = mysql_query( $sql );
			
			if ( mysql_num_rows($result) > 0 )
			{
				while ( $f = mysql_fetch_array($result) )
				{
					$id_dire_local = $f[ "idDireccion" ];
				}
			}
			
			return $id_dire_local;
		}
		catch ( exception $ex )
		{
			//
		}
	}

	/*** SETS ***/
	public function setIdLocal( $id_local )
	{
		$this-> id_local = $id_local;
	}
	
	/**********/
	/** Gets **/
	/**********/
	public function getArrayLocales()
	{
		return $this -> locales;
	}
	
	public function getArrayPlatos()
	{
		return $this->plato_array;
	}
	
	public function getMensaje()
	{
		return "holi";
	}

}
?>