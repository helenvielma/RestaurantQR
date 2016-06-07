<?php

/**
 * 30/06/2013
 * Clase que se encarga de completar arrays con datos acerca de las direcciones, estos
 * son usados principalmente en los formularios de ingreso.
 */

include_once "../Modelo/Clases/Comunas.php";
include_once "../Modelo/Clases/Provincias.php";
include_once "../Modelo/Clases/Regiones.php";
include_once "../Modelo/Clases/Direccion.php";
include_once "../Modelo/BDConexion.php";

class Direcciones extends Conexion
{
	private $conexion; // Necesaria para su uso en las funciones
	
	/* 
	 * Estos arreglos son necesarios para poder mostrar por los formularios
	 * las comunas y regiones, estos se completan de datos una ves se llama el método
	 * "pushDirecciones";
	 */
	private $array_provincias;
	private $array_comunas;

    public function __construct()
    {
    	/** Estos tres llamados son necesarios para que la clase se conecte con la base de datos **/
        parent::ConectaBD();        
        $this->conexion = parent::getConexion();   
		
        return true;
    }
	
	
	/* 
	 *Esta funcion genera arreglos con todas las comunas y regiones desde la base de datos
	 */
	public function pushDirecciones ()
	{
		// declaro las variables como arreglos
	 	$this->array_comunas    = array();
		$this->array_provincias = array();
		
	 	$select_provi   = "Select * from provincias ORDER BY provincias.Nombre_Provincias ASC";
		$select_comunas = "Select * from comunas ORDER BY comunas.Nombre_Comunas ASC ";
	 	   
	    $datos_provi   = mysql_query( $select_provi );
		$datos_comunas = mysql_query( $select_comunas ); 
		mysql_close( $this->conexion );  
		
		/* Si esque contienen datos las consultas que hize, completo los arrays mediante un objeto de cada clase correspondiente */
		if ( (mysql_num_rows($datos_provi) > 0) && (mysql_num_rows($datos_comunas) > 0) )
		{
			while ( $f1 = mysql_fetch_array( $datos_provi ) )
			{			
				$provincia = new Provincias( $f1["idProvincias"], $f1["Nombre_Provincias"], $f1["idRegiones"] );
				array_push( $this->array_provincias, $provincia );  
			}
			
			while ( $f2 = mysql_fetch_array( $datos_comunas ) )
			{
				$comunas = new Comunas( $f2["idComunas"], $f2["Nombre_Comunas"], $f2["idProvincias"] );
				array_push( $this->array_comunas, $comunas );
			}		
		}
		else
		{
			//header ( "location: ../Vista/falloConexion.php" );
		} 
	}
	
	/** Gets para los arrays **/
	public function getArrayComunas()
	{
		return $this->array_comunas;
	}
	
	public function getArrayProvincias()
	{
		return $this->array_provincias;
	}
}

?>