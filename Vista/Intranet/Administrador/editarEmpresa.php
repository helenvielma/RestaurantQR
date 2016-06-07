<div>
	<form  name="registro_empresaAdmin" id="registro_empresaAdmin" >
		
		<div id="wrapper_empresaAdmin">
			
			<!-- Datos -->
			<span>Editar empresa</span>		
			<div style="margin-left: 130px;">
					<input type="button" id="btn_volver" onclick="volverMenuAdmin();" name="volver" class="botonLogin_sinpadding" value="Volver" placeholder="" maxlength="80" style="margin-left: 90%;">
				<table border="1" width="450px" cellpadding="3" cellspacing="3" style="margin: 0;">
					<tr>
						<td><span>Nombre</span></td>
						<td><input type="text" placeholder="" maxlength="80"></td>
						<td><div class="clError" id="err_nombre">Vacio</div></td>
					</tr>
					<tr>
						<td>RUT</td>
						<td><input type="text" placeholder="" maxlength="80" ></td>
						<td><div class="clError" id="err_nombre">Vacio</div></td>
					</tr>
					<tr>
						<td>Razón social</td>
						<td><input type="text" placeholder="" maxlength="80" ></td>
						<td><div class="clError" id="err_nombre">Vacio</div></td>
					</tr>				
					<tr>
						<td>Descripción</td>
						<td colspan="2"><input type="text" placeholder="" maxlength="80" style="width: 200px;" ></td>			
					</tr>
				</table>		
			</div>
			
			<!-- Dirección -->
			<script type="text/javascript"> direccion_empresa(); </script>
			
			<div id="direccion_empresa" name="direccion_empresa">
				<span>Cargando, un momento por favor...</span>
			</div>	
				
				<div style="margin-left: 67%;">
					<input style="float: left;" type="button" id="btn_volver" name="asociarUsuario" class="botonLogin_sinpadding" value="Asociar usuario" placeholder="" maxlength="80">
					<input style="float: left; margin-left: 30px;" type="submit" id="btn_volver" name="editar" class="botonLogin_sinpadding" value="Editar" placeholder="" maxlength="80" >
				</div>
		</div>
	
	</form>
</div>