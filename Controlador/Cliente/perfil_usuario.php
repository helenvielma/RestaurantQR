<?php
	include_once "../../Modelo/Clientes.php";
	$obj = new Clientes();
	session_start();
	
	$id_usuario = $_SESSION[ "id_usuario" ];
	$obj->direccion_cliente ( 10 );
	
	
	
	 $nombre_usuario 	 = $obj->getNombre();
	 $apellido_usuario   = $obj->getApellido();
	 $fecha_nacimiento 	 = $obj->getFechaNac();
	 $rut				 = $obj->getRut();
	 $email				 = $obj->getEmail();
	 $telefono			 = $obj->getFono();
	 $codigo			 = $obj->getCodigo();	
?>

<table border="1" width="100%" cellpadding="3" cellspacing="3" style="margin-left: -50px;" >
	<tr>
		<td><span>Nombre usuario</span></td>
		<td><input type="text" placeholder="" value="<?php print $nombre_usuario; ?>" maxlength="80" disabled></td>
		<td><div class="clError" id="err_nombre"></div></td>
		
		<td><span>Password</span></td>
		<td><input type="password" placeholder="" maxlength="80"></td>
		<td><div class="clError" id="err_nombre"></div></td>
	</tr>
	<tr>
		<td><span>Nombres</span></td>
		<td><input type="text" placeholder="" maxlength="80" disabled value="<?php print $nombre_usuario; ?>></td>
		<td><div class="clError" id="err_nombre"></div></td>
		
		<td><span>Apellidos</span></td>
		<td><input type="text" placeholder="" maxlength="80" disabled value="<?php print $apellido_usuario; ?>"></td>
		<td><div class="clError" id="err_nombre"></div></td>
	</tr>
	<tr>
		<td><span>Fecha de nacimiento</span></td>
		<td><input type="text" placeholder="" maxlength="80" disabled value="<?php print $fecha_nacimiento; ?>"></td>
		<td><div class="clError" id="err_nombre"></div></td>
		
		<td><span>R.U.T</span></td>
		<td><input type="text" placeholder="" maxlength="80" disabled value="<?php print $rut; ?>"></td>
		<td><div class="clError" id="err_nombre"></div></td>
	</tr>
	<tr>
		<td><span>Email</span></td>
		<td><input type="text" placeholder="" maxlength="80" disabled value="<?php print $email; ?>"></td>
		<td><div class="clError" id="err_nombre"></div></td>
		<td><span>Telefóno</span></td>
		<td>
			<input type="text" placeholder="Cod" maxlength="80" style="width: 50px;" disabled value="<?php print $codigo; ?>">
			<input type="text" placeholder="Telefóno" maxlength="80" style="width: 88px;margin-left: 10px;" disabled value="<?php print $telefono; ?>">
		</td>
		<td><div class="clError" id="err_nombre"></div></td>
	</tr>

</table>