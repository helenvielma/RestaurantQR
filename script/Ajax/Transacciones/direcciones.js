/**
 * Este archivo contiene los métodos para que en el caso de que se necesite preguntar por 
 * alguna direccion en algún formulario, los combobox de "provincia" y "comuna" se completen
 * automaticamente y dinámicamente desde la base de datos
 * 
 * Las funciones varian dependiendo de dónde sean llamados los métodos (depende de cada formulario) 
 */

function direccion_registro()
{
	// creando objeto XMLHttpRequest de Ajax
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

	var obDiv = document.getElementById("direccion_div");
	obXHR.open("GET", "Controlador/Direcciones.php?origen=registro");
	obXHR.onreadystatechange = function()
	{
		if (obXHR.readyState == 4 && obXHR.status == 200)
		{
			obDiv.innerHTML = obXHR.responseText;
		}
	}
	obXHR.send(null);
}

function direccion_registro_portal()
{
	// creando objeto XMLHttpRequest de Ajax
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

	var obDiv = document.getElementById("direccion_div");
	obXHR.open("GET", "Controlador/Direcciones_Registro.php");
	obXHR.onreadystatechange = function()
	{
		if (obXHR.readyState == 4 && obXHR.status == 200)
		{
			obDiv.innerHTML = obXHR.responseText;
		}
	}
	obXHR.send(null);
}

function direccion_local()
{
	// creando objeto XMLHttpRequest de Ajax
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

	var obDiv = document.getElementById("inLocal_direcciones");
	obXHR.open("GET", "Controlador/Direcciones.php?origen=local");
	obXHR.onreadystatechange = function()
	{
		if (obXHR.readyState == 4 && obXHR.status == 200)
		{
			obDiv.innerHTML = obXHR.responseText;
		}
	}
	obXHR.send(null);
}

function direccion_empresa()
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

	var obDiv = document.getElementById("direccion_empresa");
	obXHR.open("GET", "Controlador/Direcciones.php?origen=local");
	obXHR.onreadystatechange = function()
	{
		if (obXHR.readyState == 4 && obXHR.status == 200)
		{
			obDiv.innerHTML = obXHR.responseText;
		}
	}
	obXHR.send(null);
}
