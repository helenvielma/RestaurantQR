<?php
/*
 * Este archivo php escribe desde el servidor, el contenido que debería de ir en las capas acerca de las direcciones
 * , este archivo se invoca desde algún método ajax indicando a priori, la capa en donde estos datos deberían de ir.
 */
	include_once "../../Modelo/IntranetCliente/Direcciones_vista.php";
		
	$obj = new Direcciones();
	$obj->pushDirecciones();
	
	$id_local = $obj->get_ = $_GET[ "id_local" ];
	$obj->getDireccion_local( $id_local );
	
	/** DATOS DE LA DIRECCION DEL local = $obj->get_ **/
	 $id_comuna_local 		= $obj->get_idComunaLocal();
	 $id_provincia_local 	= $obj->get_IdProvinciaLocal();
	 $calle_local 			= $obj->get_CalleLocal();
	 $numero_local 			= $obj->get_NumeroLocal();
	 $villa_poblacion_local = $obj->get_VillaLocal();
	 $sector_local 			= $obj->get_SectorLocal();
	 $piso_local 			= $obj->get_PisoLocal();
	 $block_local 			= $obj->get_BlockLocal();
	
	try
	{
		$lista_comunas    = $obj->getArrayComunas();
		$lista_provincias = $obj->getArrayProvincias();	
		?>
		
		<span>Dirección</span>
		<table border="" width="100%" cellpadding="3" cellspacing="3" style="margin: 0">
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
				<td><input name="calle" id="calle" required value="<?php print $calle_local; ?>" type="text" placeholder="" maxlength="80"></td>
				<td><div class="clError" id="err_nombre">*</div></td>
			</tr>
			<tr>
				<!-- Provincias -->
				<td><span>Provincias</span></td>
				<td>
					<select id="provincias" name="provincias" class="ancho_combo_direccion" disabled>
					<?php
					foreach ( $lista_provincias as $provincia )
					{?>
						<option <?php if ( $provincia->getIdProvincias() == $id_provincia_local ) echo "selected='selected'";?> value="<?php print $provincia->getIdProvincias(); ?>"> <?php print $provincia->getNombre(); ?> </option>
					<?php
					}
					?>
					</select>						
				<td><div class="clError" id="err_nombre">*</div></td>
				<!-------------------------->
					
				<td><span>Numero</span></td>
				<td><input onkeypress="return justNumbers(event);" name="numero_dir" id="numero_dir" value="<?php print $numero_local; ?>" required type="text" placeholder="" maxlength="6"></td>
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
						<option  <?php if ( $comuna->getIdComunas() == $id_comuna_local ) echo "selected='selected'";?> value="<?php print $comuna->getIdComunas(); ?>"> <?php print $comuna->getNombre(); ?> </option>
					<?php
					} ?>
					</select>	
				</td>							
				<td><div class="clError" id="err_nombre">*</div></td>
				<!------------------->
				
				<td><span>Villa-Población</span></td>
				<td><input name="villa" id="villa" type="text" value="<?php print $villa_poblacion_local; ?>" placeholder="" maxlength="80"></td>
				<td><div class="clError" id="err_nombre"></div></td>
			</tr>
			<tr>
				<td><span>Sector</span></td>
				<td><input name="sector" id="sector" type="text" value="<?php print $sector_local; ?>" placeholder="" maxlength="80"></td>
				<td><div class="clError" id="err_nombre"></div></td>
				<td><span>Block</span></td>
				<td><input name="block" id="block" type="text" value="<?php print $block_local; ?>" placeholder="" maxlength="80"></td>
				<td><div class="clError" id="err_nombre"></div></td>
			</tr>
			<tr>
				<td><span>Piso</span></td>				
				<td colspan="5"><input name="piso" onkeypress="return justNumbers(event);"  id="piso" value="<?php print $piso_local; ?>" type="text" placeholder="" maxlength="80"></td>							
			</tr>										
		</table>
		
		<?php
	}
	catch ( exception $ex)
	{
		//
	}
?>