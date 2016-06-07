<div>
	<form id="locales_admin" name="locales_admin" method="post" action="">
		<div id="wrapper_local" >
			<div id="header_local">
				<div id="headerLocal_boton">
					
				</div>
				<div id="headerLocal_titulo" >
					<h3 style="margin-left: 28%;">Administrar Empresas</h3>
				</div>
			</div>
			<div id="botonLocal" align="right">
				<input type="button" id="btn_ingresoLocal" name="ingresoLocal" class="botonLogin_sinpadding" onclick="ingresarEmpresa();" value="Ingresar empresa" placeholder="" maxlength="80" style="margin-left: 82%;">
			</div>
			
			<div id="datosEmpresas" name="datosEmpresas" >
				<script type="text/javascript"> listarEmpresas(); </script>
				<span>Cargando registros, espere porfavor...</span>
			</div>
		</div>
	</form>
</div>