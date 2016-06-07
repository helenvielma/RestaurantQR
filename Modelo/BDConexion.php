<?php

/**
 * Clase padre la cual es abstracta, todas las clases abstractas solo podran usarse 
 * cuando otra clase se here de esta, esta clase tiene las rutinas para conectarse
 * a la base de datos mediante la funcion "conectaBD"
 */
abstract class Conexion {

    private $error;
    private $conexion;

    public function __construct() {
        $error = "";
    }

    protected function conectaBD() {
        try {
            $this->conexion = mysql_connect("localhost", "root", "");
            mysql_select_db("proyecto2_final");
            mysql_query("SET NAMES 'utf8'");
        } catch (Exception $ex) {
            print "Ha ocurrido un error al conectar con la base de datos";
        }
    }

    /** Retorno la variable $conexion; importante para transacciones* */
    protected function getConexion() {
        return $this->conexion;
    }

}

?>