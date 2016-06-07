function listarEmpresas()
{
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
	
	var obDiv = document.getElementById("datosEmpresas"); 			// Capa del html sobre la cual imprimiré los datos
	obXHR.open("GET", "Controlador/Admin/ListaEmpresas.php");		// Abro una conexión con un archivo php 
	obXHR.onreadystatechange = function()							// Ejecuto una llamanda al servidor 
	{
		if (obXHR.readyState == 4 && obXHR.status == 200)			// readyState == 4, siginifa que todo ha salido bien
		{
			obDiv.innerHTML = obXHR.responseText;					// Imprimo en la capa que puse mas arriba, todo lo que el archivo php escribió
		}
	}
	obXHR.send(null);
}

function asociarUsuarioAdmin()
{
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
	
	var obDiv = document.getElementById("asociar_usuario"); 			// Capa del html sobre la cual imprimiré los datos
	obXHR.open("GET", "Controlador/Admin/asociarUsuario.php");		// Abro una conexión con un archivo php 
	obXHR.onreadystatechange = function()							// Ejecuto una llamanda al servidor 
	{
		if (obXHR.readyState == 4 && obXHR.status == 200)			// readyState == 4, siginifa que todo ha salido bien
		{
			obDiv.innerHTML = obXHR.responseText;					// Imprimo en la capa que puse mas arriba, todo lo que el archivo php escribió
		}
	}
	obXHR.send(null);
}

function ingresarEmpresa_ajax()
{
	// Datos de local
	var nombre_empresa  = $('#nombre_empresa').val();
	var run		 	    = $('#run_emp_ingreso').val();
	var razon_social    = $( '#razon_social' ).val();
	
	
	var valido = validador_de_rut( run );
	
	if ( valido == 'k' )
	{
		alert( "correcto" );
		
		
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
		  
		var des_es 	 = $('#des_es').val();
		var des_en	 = $('#des_en').val();
	  /*
		var datos = 'nombre_local=' + nombre_local + '&empresa=' + empresa + '&region=' + region + '&calle=' + calle + '&provincias=' + provincias 
			+ '&numero_dir=' + numero_dir + '&comunas=' + comunas + '&villa=' + villa + '&sector=' + sector + '&block=' + block + '&piso=' + piso;
			
	
		$.ajax(
		{
			type : 'POST',
			url : 'Controlador/Cliente/RegistraLocal.php',
			data : datos,                                        																																									
			success : function()
			{
				alert ( "ME PICA EL PERRO!!" );
			},
			error : function()
			{
				alet ( "CSM!!" );
			}
		}); */	
	}
	else
	{
		alert ( "incorrecto" );
	}
};


