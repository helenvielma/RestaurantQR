<?php
include_once "../../Modelo/BDConexion.php";
include_once "../../Modelo/Clases/FormaPago.php";

/* Todas las clases que se creen, tienen que heredarse de la clase conexion
 * Esta clase conexion, tiene las rutinas para poder conectarse, sin tener que ingresar
 * el metodo manualmente a cada rato
 * 
 */
class FormasPago extends Conexion
{
    private $conexion;

	/* Acá en el constructor, siempre tienes que ponerlo y llamar
	 *  estos tres metodos, para que funcione
	 */
    public function __construct()
    {
        parent::ConectaBD();        
        $this->conexion = parent::getConexion();  
        return true; 
     }
 
	/** El resto de la clase iria dependiendo de que quieras hacer
	 * 
	 */
		
	/*
	 * Permite mostrar las formas de pago existentes en la BD
	 */
	public function getFormasPago()
	{
		$forma_pago = array();
		
		$selectSql = "Select * from formapago";
		
		$datos = mysql_query( $selectSql );
		
		if ( mysql_num_rows($datos) > 0 )
		{
			while ( $f = mysql_fetch_array( $datos ) )
			{
				$pago = new FormaPago( $f[ "idFormaPago"], $f[ "Nombre_FormaPago" ] );
				array_push( $forma_pago, $pago ); // En esta tupla es cuando inserto el objeto 
			}
			
			return $forma_pago;
		}
		else
		{
			//header ( "location: ../Vista/falloConexion.php" );
		} 
	}

	
 }
