<?php
	include_once "../../Modelo/Empresas.php";
		
	$obj = new Empresas();	
		
	try
	{
		$lista = $obj->listarEmpresas();
				
		?>
		<!-- Estructura de la tabla -->
		<table border="1" id="tabla_locales" cellpadding="3" cellspacing="3">
			<tr class="titulo_tabla">
				<td class="td_local_nombre" >Nombre empresa</td>
				<td class="td_local_direccion">Dirección casa matriz</td>
				<td class="td_local_modificar">Editar</td>
				<td class="td_local_ver">Ver</td>
				<td class="td_local_eliminar">Borrar</td>
			</tr>
			<?php
			foreach ( $lista as $emp )
			{	
				$direccion = $obj->getIDMatriz ( $emp->getIdEmpresa() );
				?>
			<tr>
				<td class="td_local_nombre"> <?php print $emp->getNombre(); ?> </td>
				<td class="td_local_direccion"> <?php print $direccion; ?> </td>
				<td class="td_local_modificar"><a href="#" onclick="avisoNoImplementado();" > <img src="img/icons/editar.png" width="30px;"/> </a></td>
				<td class="td_local_ver"><a href="#" onclick="avisoNoImplementado();"> <img src="img/icons/ver.png" width="30px"/> </a></td>
				<td class="td_local_ver"><a href="#" onclick="avisoNoImplementado();" > <img src="img/icons/close.png" width="15px"/> </a></td>			
			</tr>
			<?php	
			}
			?>
		</table>
		<?php
	}
	catch ( exception $ex )
	{
		//
	} 
?>