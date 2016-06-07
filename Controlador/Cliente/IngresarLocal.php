<?php
	include_once "../../Modelo/Empresas.php";
	
	session_start();
	
	$obj = new Empresas();	
	
	$id_usuario = $_SESSION[ "id_usuario" ];
	$obj->getIdEmpresa( $id_usuario );
	
	$nombre_empresa = $obj->getNombreEmpresaQuery();
	$rut_empresa 	= $obj->getRutEmpresaQuery();
	
	try
	{
?>

<table border="1" width="100%" cellpadding="3" cellspacing="3" style="margin: 0;">
	<tr>
		<td style="width: 80px;"><span>Nombre</span></td>
		<td><input type="text" placeholder="" maxlength="30" id="nombre_local" name="nombre_local" style="width: 240px;"></td>
		<td>
		<div class="clError" id="err_nombre">
			*
		</div></td>
	</tr>
	<tr>
		<td>Empresa</td>
		<td><input id="empresa_ingreso_local" name="empresa_ingreso_local" style="width: 240px;" type="text" placeholder="" value="<?php echo $nombre_empresa; ?>" maxlength="80" disabled></td>
		<td></td>
	</tr>
	<tr>
		<td>R.U.N</td>
		<td><input type="text" placeholder="" value="<?php echo $rut_empresa; ?>" maxlength="80" disabled style="width: 240px;" ></td>
		<td></td>
	</tr>
</table>

<?php
	}
	catch ( exception $ex )
	{
		//
	} 
?>