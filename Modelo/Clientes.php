<?php

/**
 * 30/06/2013
 * Clase que se encarga de completar arrays con datos acerca de las direcciones, estos
 * son usados principalmente en los formularios de ingreso.
 */
include_once "../../Modelo/BDConexion.php";
include_once "../../Modelo/Clases/Personas.php";

class Clientes extends Conexion {

    private $conexion;
    private $persona;
    private $last_id_persona;
    private $last_id_usuario;
    // Necesaria para su uso en las funciones

    private $nombre_usuario;
    private $apellido_usuario;
    private $fecha_nacimiento;
    private $rut;
    private $email;
    private $telefono;
    private $codigo;
    // Sobre direccion
    private $region;
    private $comuna;
    private $provincia;
    private $calle;
    private $numero;
    private $villa;
    private $sector;
    private $block;
    private $piso;

    /*
     * Estos arreglos son necesarios para poder mostrar por los formularios
     * las comunas y regiones, estos se completan de datos una ves se llama el método
     * "pushDirecciones";
     */
    private $array_provincias;
    private $array_comunas;

    public function __construct() {
        /** Estos tres llamados son necesarios para que la clase se conecte con la base de datos * */
        parent::ConectaBD();
        $this->conexion = parent::getConexion();

        return true;
    }

    public function direccion_cliente($id_usuario) {
        try {

            $sql = "SELECT * FROM usuarios, personas, direccion, telefonos, correoelectronico, comunas, provincias WHERE usuarios.idPersonas = personas.idPersonas AND direccion.idPersonas = personas.idPersonas AND personas.idPersonas = telefonos.idPersonas AND correoelectronico.idPersonas = personas.idPersonas AND comunas.idProvincias = provincias.idProvincias AND usuarios.idUsuarios = '$id_usuario'";
            $result = mysql_query($sql);

            if (mysql_num_rows($result) > 0) {
                while ($f = mysql_fetch_array($result)) {
                    $this->nombre_usuario = $f["Nombre_Usuarios"];
                    $this->apellido_usuario = $f["Apellido_Pat"] . " " . $f["Apellido_Mat"];
                    $this->fecha_nacimiento = $f["Fecha_Nacimiento"];
                    $this->rut = $f["run"];
                    $this->email = $f["Correo"];
                    $this->telefono = $f["NumTelefono"];
                    $this->codigo = $f["CodArea"];

                    // Direccion
                    $this->comuna = $f["Nombre_Comunas"];
                    $this->provincia = $f["Nombre_Provincias"];
                    $this->calle = $f["Calle"];
                    $this->numero = $f["Numero"];
                    $this->villa = $f["Villa-Poblacion-Condominio"];
                    $this->sector = $f["Sector"];
                    $this->block = $f["Block"];
                    $this->piso = $f["Piso"];
                }
            }
        } catch (exception $ex) {
            //
        }
    }

    public function listarClientes() {
        try {
            // Genero un arreglo
            $this->persona = array();

            $selectSql = "SELECT * FROM personas";
            $sql_con_empresa = "SELECT * FROM empresa, usuarios WHERE usuarios.idUsuarios = empresa.idUsuarios";

            $datos = mysql_query($selectSql);
            $con_empresa = mysql_query($sql_con_empresa);

            if (mysql_num_rows($datos) > 0 && mysql_num_rows($con_empresa) > 0) {

                while ($f = mysql_fetch_array($datos)) {

                    $humano = new Personas($f["idPersonas"], $f["Nombre_Personas"], $f["Apellido_Pat"], $f["Apellido_Mat"], $f["Fecha_Nacimiento"], $f["run"]);
                    array_push($this->persona, $humano);
                    // En esta tupla es cuando inserto el objeto
                }

                return true;
            } else {
                return false;
            }
        } catch (exception $ex) {
            
        }
    }

    public function insertarPersona($nombre, $apellido_pat, $apellido_mat, $fecha_nac, $sexo, $run) {
        try {
            $sql = "INSERT INTO `personas` (`Nombre_Personas`, `Apellido_Pat`, `Apellido_Mat`, `Fecha_Nacimiento`, `Sexo`, `run`, `Estado`, `idUsuariosAudit`) 
			VALUES ('$nombre', '$apellido_pat', '$apellido_mat', '$fecha_nac', '$sexo', '$run', 1, 2)";

            $result = mysql_query($sql);

            if ($result > 0) {
                $this->last_id_persona = mysql_insert_id();
                $this->last_id_persona;
                return true;
            } else {
                return false;
            }
        } catch (exception $ex) {
            
        }
    }

    public function insertUsuario($usuario, $pass) {
        try {
            echo $sql = "INSERT INTO `proyecto2_final`.`usuarios` (`Nombre_Usuarios`, `idTipoUsuarios`, `Password`, `idPersonas`, `Estado`, `idUsuariosAudit`) VALUES ('$usuario', 5, '$pass', '$this->last_id_persona', 1, 2)";
            $result = mysql_query($sql);

            if ($result > 0) {
                $this->last_id_usuario = mysql_insert_id();
                return true;
            } else {
                return false;
            }
        } catch (exception $ex) {
            //
        }
    }

    public function insert_persona_contacto($cod, $numero, $email) {
        try {
            echo $sql_fono = "INSERT INTO `telefonos` (`CodArea`, `NumTelefono`, `idTipo`, `idPersonas`, `Estado`, `idUsuariosAudit`) VALUES ('$cod' , '$numero', '9', '$this->last_id_persona', '1', '2')";
            echo $sql_email = "INSERT INTO `correoelectronico` (`Correo`, `Envio`, `idPersonas`, `idTipo`, `Estado`, `idUsuariosAudit`) VALUES ('paty@negocios.cl', '1', '$this->last_id_persona', '7', '1', '2')";

            $result_fono = mysql_query($sql_fono);
            $result_email = mysql_query($sql_email);

            if ($result_email > 0 && $result_fono > 0)
                return true;
            else
                return false;
        } catch (exception $ex) {
            
        }
    }

    public function insert_direccion($run, $calle, $provincia, $numero_dir, $comunas, $villa, $sector, $block, $piso) {
        try {
            echo $sql_insert_direccion = "INSERT INTO `direccion` (`Calle`, `Numero`, `Villa-Poblacion-Condominio`, `piso`, `block`, `sector`, `idPersonas`, `idComunas`, `idTipo`, `Estado`, `idUsuariosAudit`)
			 VALUES	('$calle', $numero_dir, '$villa', '$piso', '$block', '$sector', '$this->last_id_persona', '$comunas', 6, 1, 2)";

            $result = mysql_query($sql_insert_direccion);
            if ($result > 0) {
                return true;
            } else {
                return false;
            }
        } catch (exception $ex) {
            
        }
    }

    public function get_personas() {
        return $this->persona;
    }

    /** GETTERS * */
    public function getNombre() {
        return $this->nombre_usuario;
    }

    public function getApellido() {
        return $this->apellido_usuario;
    }

    public function getFechaNac() {
        return $this->fecha_nacimiento;
    }

    public function getRut() {
        return $this->rut;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFono() {
        return $this->telefono;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getComuna() {
        return $this->comuna;
    }

    public function getProvincia() {
        return $this->provincia;
    }

    public function getCalle() {
        return $this->calle;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getVilla() {
        return $this->numero;
    }

    public function getSector() {
        return $this->sector;
    }

    public function getBlock() {
        return $this->block;
    }

    public function getPiso() {
        return $this->piso;
    }

}

?>