/* Carga contenedores dinamicamente */
/** FUNCION PADRE, se le invoca; "javascript: cargarDiv(div a cargar, div
 * destino)" **/
function cargarDiv(origen, destino)
{
	$.ajax(
	{
		url : origen,
		success : function(data)
		{
			$('#' + destino).html(data);
		}
	});
}

function cerrarIntranet()
{ 
	javascript: cargarDiv('Vista/Portal/inicial.php', 'main_contenido');
	javascript: cargarDiv('Vista/Portal/headerIni.php', 'header_login');
	cerrar_sesion();
}

function cerrar_sesion()
{
	$.ajax(
	{
		type : "POST",
		url : "Controlador/Invalidar_sesion.php",
		data :
		{
			dato : 'x'
		},
		success : function(respuesta)
		{
			alert("Usted ha cerrado correctamente su sesión");
		}
	});
}

/** Movimientos de contenedores según se requiera **/

/**** INTRANET Cliente ****/
function intranetCliente()
{ 
	javascript: cargarDiv('Vista/Intranet/Cliente/MiCuenta.php', 'main_contenido');
	javascript: cargarDiv('Vista/Intranet/Cliente/headerIntranetCliente.php', 'header_login');
}

function cargarPerfil()
{ 
	javascript: cargarDiv('Vista/Intranet/Cliente/perfil.php', 'main_contenido');
}

/*
 * Esta funcion permite saber si el usuario que ingreso en el sistema, se le ha asociado a priori una empresa
 * 
 */
function iniciar_vistalocales( id_usuario )
{
	var datos = 'id_local=' + id_usuario;
	
	$.ajax(
	{
		type : 'POST',
		url : 'Controlador/Cliente/TipoUsuario.php',
		data : datos,
		success : function(response)
		{
			if (response == 1)
			{
				cargarLocales();
			}
			else
			{
				if (response == 2)
				{
					clienteNoEmpresa();
				}
			}
		}
	}); 
};

function cargarLocales()
{ 
	javascript: cargarDiv('Vista/Intranet/Cliente/localesAdmin.php', 'main_contenido');
}

function ingresarLocal()
{ 
	
	javascript: cargarDiv('Vista/Intranet/Cliente/registroLocal.php', 'main_contenido');
}

/** Botones volver **/
function volver_intranet()
{ 
	javascript: cargarDiv('Vista/Intranet/Cliente/MiCuenta.php', 'main_contenido');
}

function volver_verLocales()
{ 
	javascript: cargarDiv('Vista/Intranet/Cliente/localesAdmin.php', 'main_contenido');
}

function verLocal( id_local )
{ 
	var hacia = 'Vista/Intranet/Cliente/verLocal.php?id_local=' + id_local;
	javascript: cargarDiv( hacia, 'main_contenido');
}

function editarLocal( id_local )
{ 
	var hacia = 'Vista/Intranet/Cliente/editarLocal.php?id_local=' + id_local;
	javascript: cargarDiv( hacia, 'main_contenido');
}

function localesDeshabilitados()
{
	javascript: cargarDiv('Vista/Intranet/Cliente/locales_deshabilitados.php', 'main_contenido');
}

function clienteNoEmpresa()
{
	javascript: cargarDiv('Vista/Intranet/Cliente/UsuarioNoEmpresa.php', 'main_contenido');
}

/**** FIN INTRANET Cliente ****/

/**** INTRANET Administrador ****/
function intranetAdministrador()
{ 
	javascript: cargarDiv('Vista/Intranet/Administrador/MiCuentaAdmin.php', 'main_contenido');
	javascript: cargarDiv('Vista/Intranet/Administrador/headerIntranetAdmin.php', 'header_login');
}

function ingresarEmpresa()
{ 
	javascript: cargarDiv('Vista/Intranet/Administrador/ingresarEmpresa.php', 'main_contenido');
}

function verEmpresa()
{ 
	javascript: cargarDiv('Vista/Intranet/Administrador/verEmpresa.php', 'main_contenido');
}

function editarEmpresa()
{ 
	javascript: cargarDiv('Vista/Intranet/Administrador/editarEmpresa.php', 'main_contenido');
}

function volverMenuAdmin()
{ 
	javascript: cargarDiv('Vista/Intranet/Administrador/MiCuentaAdmin.php', 'main_contenido');
}

function cargar_asoc_usuarios()
{
	javascript: cargarDiv('Vista/Intranet/Administrador/asociar_usuario.php', 'main_contenido');
}


/**** FIN INTRANET Administrador ****/
