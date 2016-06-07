/**
 * Función ajax que lo que hace es conectarse con un archivo php
 * el cual tiene las rutinas para poder comprobar si los datos ingresados en el
 * form
 * corresponden a algún registro de la base de datos, le devuelve al ajax el
 * resultado
 */
function check_login()
{
	$.ajax(
	{
		type : 'POST',
		url : 'Controlador/Portal/Logear.php',
		data : "username=" + $('#username').val() + "&password=" + $('#password').val(),
		success : function(response)
		{
			if (response == 1)
			{
				alert("Logeado correctamente, se le han concedido privilegios de administrador");
				popup_login_close();
				javascript: intranetAdministrador();
			}
			else
			{
				if (response == 2)
				{
					alert("Logeado correctamente");
					popup_login_close();
					javascript: intranetCliente();
				}
				else
				{
					if (response == 3)
					{
						$('#err_login').css(
						{
							'color' : 'red',
							'display' : 'block'
						}).html('Datos incorrectos o usuario no registrado')
					}
				}
			}
		}
	});
};
