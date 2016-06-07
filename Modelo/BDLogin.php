<?php

include_once "../../Modelo/BDConexion.php";

/**
 *  Contiene rutinas necesarias para logear al usuario en el sistema
 *  Deriva de la clase "Conexion" la cual le permite conectarse a la base de datos
 */
class LogeaBD extends Conexion {

    private $conexion; // Necesaria para su uso en las funciones
    private $tipoUser;
    private $id_user;
    private $id_privilegio;

    public function __construct() {
        /** Estos tres llamados son necesarios para que la clase se conecte con la base de datos * */
        parent::ConectaBD();
        $this->conexion = parent::getConexion();
        return true;
    }

    /*
     * Funcion para logearse en el sistema, se la pasan las variables desde el controlador
     * @return True si los datos ingresados existe en la base de datos, de lo contrario; False.
     */

    public function logea($usuario, $pass) {
        try {
            $consulta = "select * from usuarios, tipousuarios where usuarios.Nombre_usuarios='$usuario' AND usuarios.password='$pass' and usuarios.idTipoUsuarios = tipousuarios.idTipoUsuarios";

            //echo $consulta;
            //Ejecutar la consulta SQL
            $respuesta = mysql_query($consulta);

            /* Si la cantidad de filas coincidió con algun campo de la base de datos significa que este dato existe */
            if (mysql_num_rows($respuesta) == 1) {
                while ($f = mysql_fetch_array($respuesta)) {
                    $this->tipoUser = $f["Nombre_TipoUsuarios"];
                    $this->id_user = $f["idUsuarios"];
                    $this->id_privilegio = $f["idTipoUsuarios"];
                }

                mysql_close($this->conexion);
                return true;
            } else {
                mysql_close($this->conexion);
                return false;
            }
        } catch (Exception $ex) {
            return false;
        }
    }

    /** GETTING * */
    public function getTipoUser() {
        return $this->tipoUser;
    }

    public function getIdUser() {
        return $this->id_user;
    }

    public function getIDPrivilegio() {
        return $this->id_privilegio;
    }

}

?>