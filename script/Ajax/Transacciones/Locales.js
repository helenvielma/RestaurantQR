/**
 * 30/06/2013 .- Camilo
 * La funcionalidad trata de que desde el archivo html; se llama a esta función
 * la cual toma una capa del html sobre la cual deseamos que aparescan los datos (en este caso, la capa donde iría la tabla) 
 * y le dice al php que escriba sobre esa capa, el php escribe desde el servidor y se lo devuelve
 * a esta funcion ajax que lo que hace es colocar esos datos (lo que el php escribió) en la capa que habiamos llamado anteriormente. 
 */
function listaLocales()
{
    /**
     * creando objeto XMLHttpRequest de Ajax
     * este objeto es necesario para poder hacer una conexión 
     * con algún archivo php
     */ 
	var obXHR;
	try
	{
		obXHR = new XMLHttpRequest();
	}
	catch(err)
	{
		try
		{
			obXHR = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(err)
		{
			try
			{
				obXHR = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(err)
			{
				obXHR = false;
			}
		}
	}

	var obDiv = document.getElementById("datosLocales"); 			// Capa del html sobre la cual imprimiré los datos
	obXHR.open("GET", "Controlador/Cliente/ListaLocales.php");		// Abro una conexión con un archivo php 
	obXHR.onreadystatechange = function()							// Ejecuto una llamanda al servidor 
	{
		if (obXHR.readyState == 4 && obXHR.status == 200)			// readyState == 4, siginifa que todo ha salido bien
		{
			obDiv.innerHTML = obXHR.responseText;					// Imprimo en la capa que puse mas arriba, todo lo que el archivo php escribió
		}
	}
	obXHR.send(null);
}

function listarDeshabilitados()
{
    /**
     * creando objeto XMLHttpRequest de Ajax
     * este objeto es necesario para poder hacer una conexión 
     * con algún archivo php
     */ 
	var obXHR;
	try
	{
		obXHR = new XMLHttpRequest();
	}
	catch(err)
	{
		try
		{
			obXHR = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(err)
		{
			try
			{
				obXHR = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(err)
			{
				obXHR = false;
			}
		}
	}

	var obDiv = document.getElementById("datosLocales"); 			// Capa del html sobre la cual imprimiré los datos
	obXHR.open("GET", "Controlador/Cliente/LocalesDeshabilitados.php");		// Abro una conexión con un archivo php 
	obXHR.onreadystatechange = function()							// Ejecuto una llamanda al servidor 
	{
		if (obXHR.readyState == 4 && obXHR.status == 200)			// readyState == 4, siginifa que todo ha salido bien
		{
			obDiv.innerHTML = obXHR.responseText;					// Imprimo en la capa que puse mas arriba, todo lo que el archivo php escribió
		}
	}
	obXHR.send(null);
}

/*
 * Esta función ,pasandole el id de un local, lo desactiva.
 */
function desactivar_local( nombre_local, id_local )
{
	if ( confirm('¿Está seguro que desea desactivar el local: ' + nombre_local + '?') )
	{
		var datos = 'id_local=' + id_local;

		$.ajax(
		{
			type : 'POST',
			url : 'Controlador/Cliente/Deshabilita_local.php',
			data : datos,                                        																																									
			success : function()
			{
				alert ( "Deshabilitado correctamente" );
				cargarLocales();
			},
			error : function()
			{
				alet ( "No se ha podido completar la transacción" );
			}
		}); 
	}
};

function desactivar_matriz ()
{
	alert( "Por favor, para desactivar el local referenciado a su casa matriz, debe enviar una solicitud al administrador para realizar dicha tarea" );
}

function reactivar_local( id_local, nombre_local )
{
	
	if ( confirm('¿Está seguro que desea reactivar el local: ' + nombre_local + '?') )
	{
		var datos = 'id_local=' + id_local;
	
		$.ajax(
		{
			type : 'POST',
			url : 'Controlador/Cliente/Reactiva_local.php',
			data : datos,                                        																																									
			success : function()
			{
				alert ( "Local reactivado correctamente" );
				localesDeshabilitados();
			},
			error : function()
			{
				alet ( "No se ha podido completar la transacción" );
			}
		}); 
	}
};

function vista_local_formasPago()
{

	 /**
     * creando objeto XMLHttpRequest de Ajax
     * este objeto es necesario para poder hacer una conexión 
     * con algún archivo php
     */ 
	var obXHR;
	try
	{
		obXHR = new XMLHttpRequest();
	}
	catch(err)
	{
		try
		{
			obXHR = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(err)
		{
			try
			{
				obXHR = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(err)
			{
				obXHR = false;
			}
		}
	}

	var obDiv = document.getElementById("inLocal_formasPago"); 			// Capa del html sobre la cual imprimiré los datos
	obXHR.open("GET", "Controlador/Cliente/FormasPagoLocal.php");		// Abro una conexión con un archivo php 
	obXHR.onreadystatechange = function()							// Ejecuto una llamanda al servidor 
	{
		if (obXHR.readyState == 4 && obXHR.status == 200)			// readyState == 4, siginifa que todo ha salido bien
		{
			obDiv.innerHTML = obXHR.responseText;					// Imprimo en la capa que puse mas arriba, todo lo que el archivo php escribió
		}
	}
	obXHR.send(null);
}

function vista_inlocalHeader_datos()
{
	  /**
     * creando objeto XMLHttpRequest de Ajax
     * este objeto es necesario para poder hacer una conexión 
     * con algún archivo php
     */ 
	var obXHR;
	try
	{
		obXHR = new XMLHttpRequest();
	}
	catch(err)
	{
		try
		{
			obXHR = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(err)
		{
			try
			{
				obXHR = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(err)
			{
				obXHR = false;
			}
		}
	}

	var obDiv = document.getElementById("inlocalHeader_datos"); 			// Capa del html sobre la cual imprimiré los datos
	obXHR.open("GET", "Controlador/Cliente/IngresarLocal.php");		// Abro una conexión con un archivo php 
	obXHR.onreadystatechange = function()							// Ejecuto una llamanda al servidor 
	{
		if (obXHR.readyState == 4 && obXHR.status == 200)			// readyState == 4, siginifa que todo ha salido bien
		{
			obDiv.innerHTML = obXHR.responseText;					// Imprimo en la capa que puse mas arriba, todo lo que el archivo php escribió
		}
	}
	obXHR.send(null);
}

function vista_local( id_local )
{
	 /**
     * creando objeto XMLHttpRequest de Ajax
     * este objeto es necesario para poder hacer una conexión 
     * con algún archivo php
     */ 
	var obXHR;
	try
	{
		obXHR = new XMLHttpRequest();
	}
	catch(err)
	{
		try
		{
			obXHR = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(err)
		{
			try
			{
				obXHR = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(err)
			{
				obXHR = false;
			}
		}
	}
	
	var hacia = "Controlador/Cliente/VerLocal.php?id_local=" + id_local;

	var obDiv = document.getElementById("inlocalHeader_datos"); 			// Capa del html sobre la cual imprimiré los datos
	obXHR.open("GET", hacia);		// Abro una conexión con un archivo php 
	obXHR.onreadystatechange = function()							// Ejecuto una llamanda al servidor 
	{
		if (obXHR.readyState == 4 && obXHR.status == 200)			// readyState == 4, siginifa que todo ha salido bien
		{
			obDiv.innerHTML = obXHR.responseText;					// Imprimo en la capa que puse mas arriba, todo lo que el archivo php escribió
		}
	}
	obXHR.send(null);
}

function edita_local( id_local )
{
	 /**
     * creando objeto XMLHttpRequest de Ajax
     * este objeto es necesario para poder hacer una conexión 
     * con algún archivo php
     */ 
	var obXHR;
	try
	{
		obXHR = new XMLHttpRequest();
	}
	catch(err)
	{
		try
		{
			obXHR = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(err)
		{
			try
			{
				obXHR = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(err)
			{
				obXHR = false;
			}
		}
	}
	
	var hacia = "Controlador/Cliente/edita_local_header.php?id_local=" + id_local;

	var obDiv = document.getElementById("inlocalHeader_datos"); 			// Capa del html sobre la cual imprimiré los datos
	obXHR.open("GET", hacia);		// Abro una conexión con un archivo php 
	obXHR.onreadystatechange = function()							// Ejecuto una llamanda al servidor 
	{
		if (obXHR.readyState == 4 && obXHR.status == 200)			// readyState == 4, siginifa que todo ha salido bien
		{
			obDiv.innerHTML = obXHR.responseText;					// Imprimo en la capa que puse mas arriba, todo lo que el archivo php escribió
		}
	}
	obXHR.send(null);
}

function edita_local_direcciones( id_local )
{
	 /**
     * creando objeto XMLHttpRequest de Ajax
     * este objeto es necesario para poder hacer una conexión 
     * con algún archivo php
     */ 
	var obXHR;
	try
	{
		obXHR = new XMLHttpRequest();
	}
	catch(err)
	{
		try
		{
			obXHR = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(err)
		{
			try
			{
				obXHR = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(err)
			{
				obXHR = false;
			}
		}
	}
	
	var hacia = "Controlador/Cliente/edita_local_direcciones.php?id_local=" + id_local;

	var obDiv = document.getElementById("inLocal_direcciones"); 			// Capa del html sobre la cual imprimiré los datos
	obXHR.open("GET", hacia);		// Abro una conexión con un archivo php 
	obXHR.onreadystatechange = function()							// Ejecuto una llamanda al servidor 
	{
		if (obXHR.readyState == 4 && obXHR.status == 200)			// readyState == 4, siginifa que todo ha salido bien
		{
			obDiv.innerHTML = obXHR.responseText;					// Imprimo en la capa que puse mas arriba, todo lo que el archivo php escribió
		}
	}
	obXHR.send(null);
}

function modificar_cambios_final()
{

	var nombre_local   = $('#nombre_local').val();
	var id_local  	   = $('#id_local').val();
	
	//Direccion
	var region 		   = $('#region').val();
	var calle		   = $('#calle').val();
	var provincias 	   = $('#provincias').val();
	var numero_dir	   = $('#numero_dir').val();
	var comunas		   = $('#comunas').val();
	var villa		   = $('#villa').val();
	var sector		   = $('#sector').val();
	var block		   = $('#block').val();
	var piso		   = $('#piso').val();
	//var formas_pago = 0;
	
	// Platos de comida
	var id_plato1			 = $('#id_plato1').val();
	var nom_plato1			 = $('#nom_plato1').val();
	var descripcion_plato1	 = $('#Nombre_ingles1').val(); 
	var precio_plato1		 = $('#precio1').val();
	
	var id_plato2			 = $('#id_plato2').val();
	var nom_plato2			 = $('#nom_plato2').val();
	var descripcion_plato2	 = $('#Nombre_ingles2').val(); 
	var precio_plato2		 = $('#precio2').val();
	
	var id_plato3			 = $('#id_plato3').val();
	var nom_plato3			 = $('#nom_plato3').val();
	var descripcion_plato3	 = $('#Nombre_ingles3').val(); 
	var precio_plato3		 = $('#precio3').val();

	/* Formas de pago */
	var contador  = 0;
	var contador2 = 0;

	/*
	$("input:checkbox:checked").each(function(){
		contador++;
	});

	$("input:checkbox:checked").each(function(){
		
		if ( contador2 < contador )
		{
			if ( contador2 == 0 )
			{
				formas_pago = + $(this).val();
				formas_pago = formas_pago + "-"
			}
			else
			{
				formas_pago = formas_pago + $(this).val();
				formas_pago = formas_pago + "-"
				
			}	
			contador2++;	
		}
	});*/


	var datos = 'nombre_local=' + nombre_local + '&region=' + region + '&calle=' + calle + '&provincias=' + provincias 
		+ '&numero_dir=' + numero_dir + '&comunas=' + comunas + '&villa=' + villa + '&sector=' + sector + '&block=' + block + '&piso=' + piso + '&id_local=' + id_local
		+ '&nom_plato1=' + nom_plato1 + '&descripcion_plat1=' + descripcion_plato1 + '&precio_plat1=' + precio_plato1 + '&nom_plato2=' + nom_plato2 + '&descripcion_plat2=' + descripcion_plato2 + '&precio_plat2=' + precio_plato2
		+ '&nom_plato3=' + nom_plato3 + '&descripcion_plat3=' + descripcion_plato3 + '&precio_plat3=' + precio_plato3 + '&id_plato1=' + id_plato1 + '&id_plato2=' + id_plato2 + '&id_plato3=' + id_plato3;
	
	
	$.ajax(
	{
		type : 'GET',
		url : 'Controlador/Cliente/EditarLocal.php',
		data : datos,                                        																																									
		success : function()
		{
			alert ( "Los cambios han surtido efecto" );
			cargarLocales();
		},
		error : function()
		{
			alet ( "Ha sucedido un error inesperado" );
		}
	});  
	
};


/*
 * Funcion que ingresa un local
 */
function ingresarLocal_ajax()
{
	// Datos de local
	var nombre_local   = $('#nombre_local').val();
	var empresa 	   = $('#empresa_ingreso_local').val();
	//var run		 	   = $('#run_empresa');
	
	//Direccion
	var region 		   = $('#region').val();
	var calle		   = $('#calle').val();
	var provincias 	   = $('#provincias').val();
	var numero_dir	   = $('#numero_dir').val();
	var comunas		   = $('#comunas').val();
	var villa		   = $('#villa').val();
	var sector		   = $('#sector').val();
	var block		   = $('#block').val();
	var piso		   = $('#piso').val();
	var formas_pago = 0;
	
	// Platos de comida
	var nom_plato1			 = $('#nom_plato1').val();
	var descripcion_plato1	 = $('#Nombre_ingles1').val(); 
	var precio_plato1		 = $('#precio1').val();
	
	var nom_plato2			 = $('#nom_plato2').val();
	var descripcion_plato2	 = $('#Nombre_ingles2').val(); 
	var precio_plato2		 = $('#precio2').val();
	
	var nom_plato3			 = $('#nom_plato3').val();
	var descripcion_plato3	 = $('#Nombre_ingles3').val(); 
	var precio_plato3		 = $('#precio3').val();

	/* Formas de pago */
	var contador  = 0;
	var contador2 = 0;

	$("input:checkbox:checked").each(function(){
		contador++;
	});

	$("input:checkbox:checked").each(function(){
		
		if ( contador2 < contador )
		{
			if ( contador2 == 0 )
			{
				formas_pago = + $(this).val();
				formas_pago = formas_pago + "-"
			}
			else
			{
				formas_pago = formas_pago + $(this).val();
				formas_pago = formas_pago + "-"
				
			}	
			contador2++;	
		}
	});

	if ( formas_pago == 0 )
	{
		alert ( "Debe seleccionar al menos una forma de pago" );
	}
	else
	{
		var datos = 'nombre_local=' + nombre_local + '&empresa=' + empresa + '&region=' + region + '&calle=' + calle + '&provincias=' + provincias 
		+ '&numero_dir=' + numero_dir + '&comunas=' + comunas + '&villa=' + villa + '&sector=' + sector + '&block=' + block + '&piso=' + piso + '&formas_pago=' + formas_pago
		+ '&nom_plato1=' + nom_plato1 + '&descripcion_plat1=' + descripcion_plato1 + '&precio_plat1=' + precio_plato1 + '&nom_plato2=' + nom_plato2 + '&descripcion_plat2=' + descripcion_plato2 + '&precio_plat2=' + precio_plato2
		+ '&nom_plato3=' + nom_plato3 + '&descripcion_plat3=' + descripcion_plato3 + '&precio_plat3=' + precio_plato3;
		
		$.ajax(
		{
			type : 'POST',
			url : 'Controlador/Cliente/RegistraLocal.php',
			data : datos,                                        																																									
			success : function()
			{
				alert ( "El local se ha guardado correctamente" );
				cargarLocales();
			},
			error : function()
			{
				alet ( "Ha sucedido un error inesperado" );
			}
		}); 
	}
};
