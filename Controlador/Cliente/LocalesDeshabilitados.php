<?php 

	include_once "../../Modelo/IntranetCliente/Locales.php";
	session_start();
		
	$obj = new Locales();	
	$id_usuario = $_SESSION[ "id_usuario" ];
	$obj->listarLocales_id($id_usuario);
	
	try
	{
?>
	<!-- Estructura de la tabla -->
	<table border="1" id="tabla_locales" cellpadding="3" cellspacing="3">
		<tr class="titulo_tabla">
			<td class="td_local_nombre" style="width: 130px;">Nombre local</td>
			<td class="td_local_direccion" style="width: 530px;">Dirección local</td>
			<td class="td_local_modificar" style="width: 100px;">Re activar</td>
		</tr>
		
	
	<?php
		// Compruebo si el usuario ha desactivado algún local ya previamente
		if ( $obj->comprobarDesactivados( $id_usuario ) )
		{
			$lista = $obj->getArrayLocales();
			foreach ( $lista as $local )
			{
				$direccion = $obj->armarDireccion( $local->getIdDireccion() );
				
				// Obtengo el estado del local, si es 0 significa que dicho local esta deshabilitado
				$estado_local = $obj->get_estado_local( $local->getIdLocal() );
				if ( $estado_local == 0 )
				{
					?>
					<tr>
						<td class="td_local_nombre"> <?php print $local->getNombreLocal(); ?> </td>
						<td class="td_local_direccion"> <?php print $direccion; ?> </td>
						<td class="td_local_modificar"><a href="#" onclick="reactivar_local( '<?php print $local->getIdLocal();?>' , '<?php print $local->getNombreLocal(); ?>' );" > <img src="img/icons/editar.png" width="30px;"/> </a></td>
					</tr>			
					<?php
				}
			}
		}
		else
		{
			?>
			<tr>
				<td colspan="5"><span style="margin-left: 30%;">Usted aún no ha desactivado ningún local</span></td>
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