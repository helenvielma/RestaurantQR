	<div id="ingresar_locales_intranet_cliente" name="ingresar_locales_intranet_cliente" >
	<form onsubmit='ingresarLocal_ajax(); return false;' name="registro_localCliente" id="registro_localCliente" >

		<div id="wrapper_inLocales">
			<div id="inLocal_titulo">
				<div id="inLocalTitulo_titulo">
					<span>Registrar local</span> 
				</div>
				<div id="inLocalTitulo_boton">
					<input type="button" id="btn_volver" onclick="volver_verLocales();" name="volver" class="botonLogin_sinpadding" value="Volver" placeholder="" maxlength="80" style="margin-left: 90%;">
				</div>
			</div>

			<div id="inLocal_header">
				
				<script type="text/javascript"> vista_inlocalHeader_datos(); </script>		
				<!-- Datos del local -->
				<div id="inlocalHeader_datos">
					<span>Cargando, un momento porfavor...</span>
				</div>
			</div>

			<!-- Direcciones -->
			<script type="text/javascript"> direccion_local(); </script>
			
			<div id="inLocal_direcciones">
				<span>Cargando, un momento porfavor...</span>
			</div>

			<!-- Formas de pago -->
			<script type="text/javascript"> vista_local_formasPago(); </script>
			<!-- Formas de pago -->
			<div id="inLocal_formasPago">
				<span>Cargando, un momento porfavor...</span>
			</div>


			<!-- Acordeón del menú -->
			<div id="inLocal_menu">
				<ol>
					<li>
						<h2><span>Primer plato</span></h2>
						<div>
                        <table id="Menu1">
                        <tr>
							<td>Nombre Plato </td> <td><input type="text" id="nom_plato1" value="" name="nom_plato1" style="width:150px;height:25px"/></td>
                            </tr>
                            <tr>
                            <td>Nombre ingles</td> <td><input type="text" name="Nombre_ingles1" value="" id="Nombre_ingles1" style="width:150px;height:25px" ></input></td>
                            </tr>
                            <tr>
                            <td>Precio</td><td><input type="text" id="precio1" value="0" onkeypress="return justNumbers(event);" maxlength="15" name="precio1" style="width:150px;height:25px"/></td>
                        </tr>
                        </table>
                            
						</div>
					</li>
					<li>
						<h2><span>Segundo plato</span></h2>
						<div>
							<figure>
								 <table id="Menu1">
                        <tr>
							<td>Nombre Plato </td> <td><input type="text" id="nom_plato2" value="" name="nom_plato2" style="width:150px;height:25px"/></td>
                            </tr>
                            <tr>
                            <td>Nombre ingles</td> <td><input type="text"name="Nombre_ingles2" value="" style="width:150px;height:25px" id="Nombre_ingles2"></input></td>
                            </tr>
                            <tr>
                            <td>Precio</td><td><input type="text" id="precio2" name="precio2" value="0" onkeypress="return justNumbers(event);" maxlength="15" style="width:150px;height:25px"/></td>
                        </tr>
                        </table>
							</figure>
						</div>
					</li>
					<li>
						<h2><span>Tercer Plato</span></h2>
						<div>
							<figure>
								 <table id="Menu1">
                        <tr>
							<td>Nombre Plato </td> <td><input type="text" value="" id="nom_plato3" name="nom_plato3" style="width:150px;height:25px"/></td>
                            </tr>
                            <tr>
                            <td>Nombre ingles</td> <td><input type="text" value="" name="Nombre_ingles3" style="width:150px;height:25px" id="Nombre_ingles3"></input></td>
                            </tr>
                            <tr>
                            <td>Precio</td><td><input type="text" id="precio3" value="0" name="precio3" onkeypress="return justNumbers(event);" maxlength="15" style="width:150px;height:25px"/></td>
                        </tr>
                        </table>
							</figure>
						</div>
					</li>
				</ol>
			</div>
			
			<div>
				<span style="color: red; font-weight: bold;">Advertencia: Los cambios se perderán si recarga esta página</span>
				<input style="float: left; margin-left: 40%;" type="submit" id="btn_guardar" name="asociarUsuario" class="botonLogin_sinpadding" value="Guardar" placeholder="" maxlength="80">
			</div>

			<!-- Fin wrapper -->
		</div>
	</form>
	
	<script>$('#inLocal_menu').liteAccordion();</script>
</div>
