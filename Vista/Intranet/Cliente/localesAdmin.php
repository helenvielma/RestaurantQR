<script type="text/javascript">listaLocales();</script>

<div>
	<form id="locales_admin" name="locales_admin" method="post" action="">
		<div id="wrapper_local" >
			<div id="header_local">
				<div id="headerLocal_boton">
					<input type="button" id="btn_volver" onclick="volver_intranet();" name="volver" class="botonLogin_sinpadding" value="Volver" placeholder="" maxlength="80" >
					<input type="button" id="deshabilitados" onclick="localesDeshabilitados();" name="deshabilitados" class="botonLogin_sinpadding" onclick="" value="Locales deshabilitados" >
				</div>
				<div id="headerLocal_titulo" >
					<h3 style="margin-left: 28%;">Administrar locales</h3>
				</div>
			</div>
			<div id="botonLocal" >				
				<input type="button" id="btn_ingresoLocal" name="ingresoLocal" class="botonLogin_sinpadding" onclick="ingresarLocal();" value="Ingresar local">
			</div>
			<div id="datosLocales">
				Cargando registros, espere por favor...
			</div>
		</div>
	</form>
</div>