<?php
	include_once "../../Modelo/Empresas.php";
	include_once "../../Modelo/IntranetCliente/Locales.php";
	
	session_start();
	
	$obj = new Empresas();	
	$obj_local = new Locales();
	
	$id_local 		 = $_GET[ "id_local" ];
	$direccion_local = $obj_local->armarDireccion_idLocal( $id_local );
	$nombre_local	 = $obj_local->nombreLocal_idLocal( $id_local );
	
	$id_usuario = $_SESSION[ "id_usuario" ];
	$obj->getIdEmpresa( $id_usuario );
	$nombre_empresa = $obj->getNombreEmpresaQuery();
	$rut_empresa 	= $obj->getRutEmpresaQuery();
	
	try
	{
?>

<table border="1" width="450px" cellpadding="3" cellspacing="3" style="margin: 0;">
	<tr>
		<td style="width: 80px;"><span>Nombre</span></td>
		<td><input type="text" value="<?php print $nombre_local; ?>" maxlength="30" id="nombre_local" name="nombre_local"  style="width: 300px;"></td>
	</tr>
	<tr>
		<td><span>Empresa</span></td>
		<td><input disabled type="text" value="<?php print $nombre_empresa; ?>" maxlength="30" id="nombre_empresa" name="nombre_empresa"  style="width: 300px;"></td>
	</tr>
	<tr>
		<td>R.U.T</td>
		<td><input type="text" disabled placeholder="" value="<?php echo $rut_empresa; ?>" maxlength="80"  style="width: 300px;" ></td>
	</tr>
</table>


<?php
	}
	catch ( exception $ex )
	{
		//
	} 
?>