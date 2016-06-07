<?php
	include_once "../../Modelo/Clientes.php";
	$obj = new Clientes();
	session_start();
	
	$id_usuario = $_SESSION[ "id_usuario" ];
	$obj->direccion_cliente ( 10 );
	
		
	// Sobre direccion
	 $comuna			 = $obj->getComuna();
	 $provincia			 = $obj->getProvincia();
	 $calle				 = $obj->getCalle();
	 $numero			 = $obj->getNumero();
	 $villa				 = $obj->getVilla();
	 $sector			 = $obj->getSector();
	 $block				 = $obj->getBlock();
	 $piso				 = $obj->getPiso();
	
?>

<span>Dirección</span>
<table border="" width="100%" cellpadding="3" cellspacing="3" style="margin-left: -50px;">
	<tr>
		<td><span>Región</span></td>
		<td>
			<select class="ancho_combo_direccion" disabled>
				<option value="Valparaíso">Valparaíso</option>
			</select>
		</td>
		<td><div class="clError" id="err_nombre"></div></td>
		<td><span>Calle</span></td>
		<td><input type="text" placeholder="" maxlength="80" disabled value="<?php print $calle; ?>"></td>
		<td><div class="clError" id="err_nombre"></div></td>
	</tr>
	<tr>
		<td><span>Comuna</span></td>
		<td>
			<select class="ancho_combo_direccion" disabled>
				<option value="seleccion"><?php print $comuna; ?></option>
			</select>
		</td>
		<td><div class="clError" id="err_nombre"></div></td>
		<td><span>Numero</span></td>
		<td><input type="text" placeholder="" maxlength="80" disabled value="<?php print $numero; ?>"></td>
		<td><div class="clError" id="err_nombre"></div></td>
	</tr>
	<tr>
		<td><span>Provincia</span></td>
		<td>
			<select class="ancho_combo_direccion" disabled>
				<option value="seleccion"><?php print $provincia; ?></option>
			</select>
		</td>
		<td><div class="clError" id="err_nombre"></div></td>
		<td><span>Villa-Población</span></td>
		<td><input type="text" placeholder="" maxlength="80" disabled value="<?php print $villa; ?>"></td>
		<td><div class="clError" id="err_nombre"></div></td>
	</tr>
	<tr>
		<td><span>Sector</span></td>
		<td><input type="text" placeholder="" maxlength="80" disabled value="<?php print $sector; ?>"></td>
		<td><div class="clError" id="err_nombre"></div></td>
		<td><span>Block</span></td>
		<td><input type="text" placeholder="" maxlength="80" disabled value="<?php print $block; ?>"></td>
		<td><div class="clError" id="err_nombre"></div></td>
	</tr>
	<tr>
		<td><span>Piso</span></td>				
		<td><input type="text" placeholder="" maxlength="80" disabled value="<?php print $piso; ?>"></td>
		<td><div class="clError" id="err_nombre"></div></td>
		
		<td colspan="3" > <center> <input type="button" class="botonLogin" style="margin-left: 80%;" value="Editar" placeholder="" maxlength="80"> </center></td>
	</tr>										
</table>	