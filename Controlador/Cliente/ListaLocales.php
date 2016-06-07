<?php
	include_once "../../Modelo/IntranetCliente/Locales.php";
	session_start();
		
	$obj = new Locales();	
		
	try
	{
		?>
		<!-- Estructura de la tabla -->
		<table border="1" id="tabla_locales" cellpadding="3" cellspacing="3">
			<tr class="titulo_tabla">
				<td class="td_local_nombre" >Nombre local</td>
				<td class="td_local_direccion">Dirección local</td>
				<td class="td_local_modificar">Editar</td>
				<td class="td_local_ver">Ver</td>
				<td class="td_local_eliminar">Apagar</td>
			</tr>
			<?php
		
		$id_usuario = $_SESSION[ "id_usuario" ];		
		
		// Compruebo si el id del usuario, está asociado a alguna empresa	
		if ( $obj->comprobar_asociados_empresa($id_usuario) )
		{
			// Compruebo si el id del usuario, asociado a la empresa que tiene registrada, tiene ingresado algún local previamente o no
			if ( $obj->listarLocales_id($id_usuario) )
			{
				$lista = $obj->getArrayLocales();
				foreach ( $lista as $local )
				{
					$direccion = $obj->armarDireccion( $local->getIdDireccion() );
					$bandera_matriz = 0;
					
					// Obtengo el estado del local, si es 0 significa que dicho local esta deshabilitado; por lo tanto no debe mostrarse en esta vista
					$estado_local = $obj->get_estado_local( $local->getIdLocal() );
					if ( $estado_local != 0 )
					{
						// Compruebo cual local es la casa matriz del usuario. 
						if ( $obj->getLocalMatriz($id_usuario) == $local->getIdLocal() )
						{
							$bandera_matriz = $local->getIdLocal();
							?>
							<tr>
								<td class="td_local_nombre"> <span style="color: red">Matriz:&nbsp;</span> <?php print $local->getNombreLocal(); ?> </td>
								<td class="td_local_direccion"> <?php print $direccion; ?> </td>
								<td class="td_local_modificar"><a href="#" onclick="editarLocal();" > <img src="img/icons/editar.png" width="30px;"/> </a></td>
								<td class="td_local_ver"><a href="#" onclick="verLocal( '<?php print $local->getIdLocal(); ?>' );"> <img src="img/icons/ver.png" width="30px"/> </a></td>
								<td class="td_local_ver"><a href="#" onclick="desactivar_matriz();" > <img src="img/icons/close.png" width="15px"/> </a></td>			
							</tr>			
						<?php
						}	
						
						if ( $local->getIdLocal() != $bandera_matriz )		
						{							
							?>
							<tr>
								<td class="td_local_nombre"> <?php print $local->getNombreLocal(); ?> </td>
								<td class="td_local_direccion"> <?php print $direccion; ?> </td>
								<td class="td_local_modificar"><a href="#" onclick="editarLocal( '<?php print $local->getIdLocal(); ?>' );" > <img src="img/icons/editar.png" width="30px;"/> </a></td>
								<td class="td_local_ver"><a href="#" onclick="verLocal( '<?php print $local->getIdLocal(); ?>' );"> <img src="img/icons/ver.png" width="30px"/> </a></td>
								<td class="td_local_ver"><a href="#" onclick="desactivar_local( '<?php print $local->getNombreLocal();?>', '<?php print $local->getIdLocal(); ?>' );" > <img src="img/icons/close.png" width="15px"/> </a></td>			
							</tr>			
						<?php
						}	
					}
				}
			}		
			else
			{
				?>
				<td colspan="5"><span style="margin-left: 30%;">Usted aún no ha ingresado ningún local</span></td>
				<?php
			}
		}
		else
		{	
			?>			
			<script type="text/javascript"> 
				alert ("entro");
				clienteNoEmpresa(); 
			</script>		 
		
			<?php
			echo "entro";
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