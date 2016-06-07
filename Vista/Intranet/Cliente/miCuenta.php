<?php
	session_start();
?>

<div id="iniCliente" >
	
	<div id="miCuenta_titulo">
		<span style="margin-left: 41%;"><h4>Panel de control</h4></span>
	</div>
	<div id="miCuenta_tabla">
		<table border="1" width="25%" cellpadding="3" cellspacing="3" style="margin-left: 35%;">
			<tr>
				<td>
					<img src="img/icons/icon_login.png" id="iconoPerfil" /> 
				</td>
				<td>
					<span><a href="#" onclick="avisoNoImplementado();">Perfil</a></span>
				</td>
			</tr>
			<tr>
				<td>
					<img src="img/icons/locales.png" id="iconoLocal" />
				</td>
				<td>
					<span><a href="#" onclick="iniciar_vistalocales( <?php print $_SESSION[ "id_usuario" ]; ?> )" >Locales</a></span>
				</td>
			</tr>
		</table>
	</div>
</div>