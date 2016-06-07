<div style="margin-left: 80px;">
	<form id="form_contacto" name="form_contacto" method="post">
		<span>Contacto</span>
		<table name="tabla_contacto" border="1" width="100%" cellpadding="3" cellspacing="3" style="margin-left: -50px;">
			<tr>
				<td><span>Nombre</span></td>
				<td><input required id="nombre_contacto" name="nombre_contacto" type="text" placeholder="" maxlength="80"></td>
				<td><div class="clError" id="err_nombre">*</div></td>
				<td colspan="2">Contacto</td>				
			</tr>
			<tr>
				<td><span>Teléfono</span></td>
				<td><input type="text" id="telefono_contacto" name="telefono_contacto" onkeypress="return justNumbers(event);" placeholder="" maxlength="80"></td>
				<td><div class="clError" id="err_nombre"></div></td>
				<td colspan="2" rowspan="3">
					<textarea required style="width: 461px; height: 105px;"></textarea>
				</td>
			</tr>
			<tr>
				<td><span>Email</span></td>
				<td><input required type="text" id="email_contacto" name="email_contacto" placeholder="" maxlength="80"></td>
				<td><div class="clError" id="err_nombre">*</div></td>			
			</tr>
			<tr>			
				<td colspan="3"><input type="submit"  class="botonLogin" value="Guardar" placeholder="" maxlength="80" style="margin-left: 100px;"></td>
			</tr>
		</table>
	</form>
</div>