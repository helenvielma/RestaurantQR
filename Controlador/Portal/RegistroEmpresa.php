<?php

include_once "../../Modelo/Clientes.php";

// Datos de sesión
$user = $_GET["user"];
$pass = $_GET["pass"];

echo $pass;

// Empresa
$run = $_GET["run"];

// Personales
$nombre = $_GET["nombre"];
$apellido_pat = $_GET["apellido_pat"];
$apellido_mat = $_GET["apellido_mat"];
$sexo = $_GET["sexo"];

// Cumpleaños	
$anio_nac = $_GET["anhoNac"];
$mes_nac = $_GET["mesNac"];
$dia_nac = $_GET["diaNac"];
echo $fecha_nac = $anio_nac . "-" . $mes_nac . "-" . $dia_nac;

// Contacto
$cod = $_GET["cod"];
$numero = $_GET["numero"];
echo $email = $_GET["email"];

/* * ************** */
/* * * DIRECCION ** */
/* * ************** */
$calle = $_GET["calle"];
$provincia = $_GET["provincias"];
$numero_dir = $_GET["numero_dir"];
$comunas = $_GET["comunas"];
$villa = $_GET["villa"];
$sector = $_GET["sector"];
$block = $_GET["block"];
$piso = $_GET["piso"];

try {
    echo "<br />";
    $obj = new Clientes();
    $obj->insertarPersona($nombre, $apellido_pat, $apellido_mat, $fecha_nac, $sexo, $run);
    $obj->insertUsuario($user, $pass);
    $obj->insert_direccion($run, $calle, $provincia, $numero_dir, $comunas, $villa, $sector, $block, $piso);
    $obj->insert_persona_contacto($cod, $numero, $email);
} catch (exception $ex) {
    // echo '4';
}
?>