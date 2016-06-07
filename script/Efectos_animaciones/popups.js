/** POPUPS **/

/** LOGIN **/
function popup_login()
{
	/* Limpiar mensajes */
	$('#err_login').css(
	{
		'color' : 'red',
		'display' : 'block'
	}).html('')
			
	document.getElementById('username').value = '';	
	document.getElementById('password').value = '';	
		
	/** Abrir el popup **/
	$('#popup_login').fadeIn('fast');
	$('#wrapper').css('opacity', 0.4);
}

function popup_login_close()
{
	$('#popup_login').fadeOut('fast');
	$('#wrapper').css('opacity', 1);
}


/** Recuperar contraseña **/
function popup_pass()
{
	$('#popup_pass').fadeIn('fast');
	$('#wrapper').css('opacity', 0.4);
}

function popup_pass_close()
{
	$('#popup_pass').fadeOut('fast');
	$('#wrapper').css('opacity', 1);
}