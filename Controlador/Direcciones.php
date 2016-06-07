<?php
/*
 * Este archivo php escribe desde el servidor, el contenido que debería de ir en las capas acerca de las direcciones
 * , este archivo se invoca desde algún método ajax indicando a priori, la capa en donde estos datos deberían de ir.
 */
	include_once "../Modelo/Direcciones.php";
	
	$origen = $_GET[ "origen" ]; // Esta variable sirve para saber de donde hemos invocado el archivo
	
	$obj = new Direcciones();
	$obj->pushDirecciones();
	
	try
	{
		$lista_comunas    = $obj->getArrayComunas();
		$lista_provincias = $obj->getArrayProvincias();	
		?>
		
		<span>Dirección</span>
		<?php 
		/** Dependiendo de donde hemos llamado al archivo este, el estilo de la tabla podría cambiar **/
		if ( $origen == "registro" )
		{
		?>
			<table border="" width="100%" cellpadding="3" cellspacing="3" style="margin-left: -50px;">
		<?php
		}
		
		if ( $origen == "local" )
		{
			?>
			<table border="" width="100%" cellpadding="3" cellspacing="3" style="margin: 0">
			<?php
		}
		?>
			<tr>
				<!-- Regiones -->
				<td><span>Región</span></td>
				<td>
					<select id="region" name="region" class="ancho_combo_direccion" disabled>
						<option value="valparaiso">Valparaíso</option>
					</select>
				</td>
				<td><div class="clError" id="err_nombre">*</div></td>
				<!----------------->
				
				<td><span>Calle</span></td>
				<td><input name="calle" id="calle" required type="text" placeholder="" maxlength="80"></td>
				<td><div class="clError" id="err_nombre">*</div></td>
			</tr>
			<tr>
				<!-- Provincias -->
				<td><span>Provincias</span></td>
				<td>
					<select id="provincias" name="provincias" class="ancho_combo_direccion">
					<?php
					foreach ( $lista_provincias as $provincia )
					{?>
						<option value="<?php print $provincia->getNombre(); ?>"> <?php print $provincia->getNombre(); ?> </option>
					<?php
					}
					?>
					</select>						
				<td><div class="clError" id="err_nombre">*</div></td>
				<!-------------------------->
					
				<td><span>Numero</span></td>
				<td><input onkeypress="return justNumbers(event);" name="numero_dir" id="numero_dir" required type="text" placeholder="" maxlength="6"></td>
				<td><div class="clError" id="err_nombre">*</div></td>
			</tr>
			<tr> 
				<!-- Comunas -->
				<td><span>Comunas</span></td>
				<td>
					<select id="comunas" name="comunas" class="ancho_combo_direccion">
				 	<?php
				 	foreach ( $lista_comunas as $comuna )
					{
				 	?>
						<option value="<?php print $comuna->getNombre(); ?>"> <?php print $comuna->getNombre(); ?> </option>
					<?php
					} ?>
					</select>	
				</td>							
				<td><div class="clError" id="err_nombre">*</div></td>
				<!------------------->
				
				<td><span>Villa-Población</span></td>
				<td><input name="villa" id="villa" type="text" placeholder="" maxlength="80"></td>
				<td><div class="clError" id="err_nombre"></div></td>
			</tr>
			<tr>
				<td><span>Sector</span></td>
				<td><input name="sector" id="sector" type="text" placeholder="" maxlength="80"></td>
				<td><div class="clError" id="err_nombre"></div></td>
				<td><span>Block</span></td>
				<td><input name="block" id="block" type="text" placeholder="" maxlength="80"></td>
				<td><div class="clError" id="err_nombre"></div></td>
			</tr>
			<tr>
				<td><span>Piso</span></td>				
				<td colspan="5"><input name="piso" id="piso" onkeypress="return justNumbers(event);" type="text" placeholder="" maxlength="80"></td>							
			</tr>										
		</table>
		
		<?php
	}
	catch ( exception $ex)
	{
		//
	}
?>