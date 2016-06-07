<?php
	
	include_once "../../Modelo/Clientes.php";
	
	$obj = new Clientes();
	
	if ( $obj->listarClientes() )
	{
		$lista = $obj->get_personas();
		
		?>
		<div id="buscar_run" name="buscar_run" >
			
			<div id="form_buscar_run" name="form_buscar_run" >
				<div id="inLocalTitulo_titulo" style="font-size: 18px; font-weight: bold;">
					<span>Asociar usuario</span> 	
				</div>
				<br /><br />
				<span>Seleccione un usuario al cual desea asociarle la empresa</span>
				<br /><br />
				<form>
					<input onkeypress="return validar_rut(event);" maxlength="10" type="text" id="run_buscar" name="run_buscar" > 
					<input class="botonLogin_sinpadding" type="button" id="buscar_run_button" value="Buscar" name="buscar_run_button" >
					<br />		
					<br />	
					<table>
					<tr>
						<td class="negrita">RUT</td>
						<td class="negrita">Nombre persona</td>
					</tr>
		<?php
		
		foreach ( $lista as $humano )
		{
			$nombre = $humano->getNombre() . " " . $humano->getApePat();
			?>
			<tr>
				<td  style="width: 120px;"> <input type="radio" name="radios" value="<?php print $humano->getIdPersonas(); ?>"> <?php print $humano->getRun(); ?></td>
				<td  style="width: 250px;"> <?php print $nombre; ?> </td>
			</tr>
			<?php
		}
		
		?>
					
					</table>
					<input class="botonLogin_sinpadding" type="button" onclick="avisoNoImplementado();" id="buscar_run_button" value="Asociar a empresa" name="buscar_run_button" >
				</form> 
				<input class="botonLogin_sinpadding" onclick="ingresarEmpresa();" type="button" id="volver_ingresoEmpresa" value="Volver" name="buscar_run_button" >
			</div>
		</div>
		<?php
	}
	else
	{
		
	}
	
	
?>
