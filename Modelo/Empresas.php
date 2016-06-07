<?php 

include_once "../../Modelo/BDConexion.php";
include_once "../../Modelo/Clases/Empresa.php";

class Empresas extends Conexion
{
	private $conexion; // Necesaria para su uso en las funciones
	private $nombre_empresa_query;
	private $id_empresa_query;
	private $rut_empresa_query;
	
    public function __construct()
    {
    	/** Estos tres llamados son necesarios para que la clase se conecte con la base de datos **/
        parent::ConectaBD();        
        $this->conexion = parent::getConexion();   
        return true;
    }
	
	/*******************
	 **** Metodos ******
	 ******************/
	 public function listarEmpresas()
	 {
	 	$empresas = array();
		
		$selectSql = "Select * from empresa ORDER BY empresa.Nombre_Empresa";
		
		$datos = mysql_query( $selectSql );
		
		if ( mysql_num_rows($datos) > 0 )
		{
			while ( $f = mysql_fetch_array( $datos ) )
			{
				$emp = new Empresa( $f["idEmpresa"], $f["Nombre_Empresa"], $f["rutEmpresa"], $f["Descripcion_es"], $f["razon_social"] );
				array_push( $empresas, $emp ); // En esta tupla es cuando inserto el objeto 
			}
			
			return $empresas;
		}
		else
		{
			//header ( "location: ../Vista/falloConexion.php" );
		} 
	 }
	 
	 /*
	  * Funcion que permite ingresar una empresa, y generar una cuenta de login también.
	  */
	 public function ingresarEmpresa( $user, $pass, $nombre, $apellido_pat, $apellido_mat, $run, $nombre_emp, $razon_social, $descrip_es, $descrip_en, $anio_nac, $mes_nac, $dia_nac, $sexo, $cod, $numero, $email, $calle, $provincia, $numero_dir, $comunas, $villa, $sector, $block, $piso )
	 {
	 	try
	 	{
	 		if ( $this->comprobarRun( $run ) )
			{			
				$fecha_nacimiento = "$anio_nac-" . "$mes_nac-" . "$dia_nac";						
				if ( $sexo = "Masculino" ) $sexo = 1; else $sexo = 0;
				
		 		// Insert para persona 
		 		echo $sql_insert_persona = "INSERT INTO personas (Nombre_Personas, Apellido_Pat, Apellido_Mat, Fecha_Nacimiento, Sexo, run, Estado, idUsuariosAudit ) values ( '$nombre', '$apellido_pat', '$apellido_mat', '$fecha_nacimiento', '$sexo', '$run', 1, 2 )";
				$result_sql_insert_persona = mysql_query( $sql_insert_persona );
				
				if ( $result_sql_insert_persona > 0 )
				{
					$id_persona = $this->getIdPersona( $run );
					
					// Inserts para usuario
			 		echo $sql_insert_usuario = "INSERT INTO usuarios ( Nombre_Usuarios, idTipoUsuarios, Password, idPersonas, Estado, idUsuariosAudit ) values ( '$user', 5, '$pass', $id_persona, 1, 2 )";
					$result_sql_insert_usuario = mysql_query( $sql_insert_usuario );
			 		
					if ( $result_sql_insert_usuario > 0 )
					{
						$id_usuario = $this->getIdUsuario($id_persona);
						
						// Inserts para empresa			
						echo $sql_insert_empresa = "INSERT INTO empresa ( Nombre_Empresa, rutEmpresa, Descripcion_es, Descripcion_en, razon_social, idUsuarios, Estado, idUsuariosAudit ) VALUES ( '$nombre_emp', '$run', '$descrip_es', '$descrip_en', '$razon_social', '$id_usuario', 1, 2 ) ";
						$result_sql_insert_empresa = mysql_query( $sql_insert_empresa );	
					}
				}
				return 0;
			}	
			else
			{
				return 1;
			}		
 		
	 	}
		catch ( exception $ex )
		{
			//
		}
	 }
	 
	 /*
	  * Esta función permite pasandole un run, decirte si este ya existe en la base de datos o no.
	  */
	 private function comprobarRun ( $run )
	 {
	 	try
	 	{
	 		$sql = "SELECT run FROM Personas";
			$result = mysql_query( $sql );
			$bandera = true;
			
			if ( mysql_num_rows($result) > 0 )
			{
				while ( $f = mysql_fetch_array($result) )
				{
					if ( $run == $f[ "run" ] )
					{
						$bandera = false;
					}										
				}
			}			
			return $bandera;			
 	 	}
		catch ( exception $ex )
		{
			//
		} 
		
	 }
	 
	 /*
	  * Permite obtener el id de la persona que estamos ingresando, mediante la concordancia del run ingresado.
	  */
	 private function getIdPersona( $run )
	 {
	 	try
	 	{
	 		$id_persona = 0;
	 		
	 		$sql = "SELECT idPersonas FROM Personas WHERE run = '$run'";
	 		$result = mysql_query( $sql );
			
			if ( mysql_num_rows($result) > 0 )
			{
				while ( $f = mysql_fetch_array($result) )
				{
					$id_persona = $f[ "idPersonas" ];
				}
			}
			
			return $id_persona;
	 	}
		catch ( exception $ex )
		{
			//
		}
	 }
	 
	 /**
	  * Función que permite obtener el id de usuario de una persona, mediante el id de persona .-
	  */
	 private function getIdUsuario ( $id_persona )
	 {
	 	try
	 	{
	 		$id_usuario = 0;
			
			$sql = "SELECT * FROM usuarios WHERE idPersonas = '$id_persona'";
			$result = mysql_query( $sql );
			
			if ( mysql_num_rows($result) > 0 )
			{
				while ( $f = mysql_fetch_array($result) )
				{
					$id_usuario = $f["idUsuarios"];
				}
			}
			return $id_usuario;
	 	}
	 	catch ( exception $ex )
		{
			//
		}
	 }
	 
	 /**
	  * Permite obtener datos acerca de una empresa, pasandole el id de un usuario
	  */
	 public function getIdEmpresa( $id_usuario )
	 {
	 	 	try
	 	{
	 		$id_empresa = null;
			
			$sql = "SELECT * FROM usuarios, empresa WHERE usuarios.idUsuarios = empresa.idUsuarios AND usuarios.idUsuarios = '$id_usuario'";
			$result = mysql_query( $sql );
			
			if ( mysql_num_rows($result) > 0 )
			{
				while ( $f = mysql_fetch_array($result) )
				{
					$this->nombre_empresa_query     = $f["Nombre_Empresa"];
					$this->id_empresa_query			= $f[ "idEmpresa" ];
					$this->rut_empresa_query		= $f[ "rutEmpresa" ];
				}
			}
	 	}
	 	catch ( exception $ex )
		{
			//
		}
	 }
	 
	 /*
	  * Permite mostrar la direccion de la casa matriz de una empresa, mediante el id de la empresa
	  */
	 public function getIDMatriz( $id_empresa )
	 {
	 	try
	 	{
	 		$direccion = null;
			
	 		$sql = "SELECT direccion.Calle, direccion.Numero FROM direccion, LOCAL , empresa WHERE local.idTipo =  '5' AND local.idEmpresa = empresa.idEmpresa AND local.idDireccion = direccion.idDireccion AND empresa.idEmpresa = '$id_empresa'";
			$result = mysql_query($sql);
			
			if ( mysql_num_rows($result) )
			{
				while ( $f = mysql_fetch_array($result) )
				{
					$direccion = $f[ "Calle" ] . " #" . $f[ "Numero" ];
				}
			}	
			return $direccion;
	 	}
		catch ( exception $ex )
		{
			//
		}
	 }
	 
	 /** GETTERS **/
	 public function getNombreEmpresaQuery()
	 {
	 	return $this->nombre_empresa_query;
	 }
	 
	 public function getIdEmpresaQuery()
	 {
	 	return $this->id_empresa_query;
	 }
	 
	 public function getRutEmpresaQuery()
	 {
	 	return $this->rut_empresa_query;
	 }
}

?>