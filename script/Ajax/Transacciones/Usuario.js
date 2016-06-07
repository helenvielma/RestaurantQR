function ver_perfil()
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
    } catch (err)
    {
        try
        {
            obXHR = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (err)
        {
            try
            {
                obXHR = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (err)
            {
                obXHR = false;
            }
        }
    }

    var obDiv = document.getElementById("datos_direccion");
    // Capa del html sobre la cual imprimiré los datos
    obXHR.open("GET", "Controlador/Cliente/Direccion_perfil.php");
    // Abro una conexión con un archivo php
    obXHR.onreadystatechange = function ()// Ejecuto una llamanda al servidor
    {
        if (obXHR.readyState == 4 && obXHR.status == 200)// readyState == 4, siginifa que
                // todo ha salido bien
                {
                    obDiv.innerHTML = obXHR.responseText;
                    // Imprimo en la capa que puse mas arriba, todo lo que el archivo php escribió
                }
    }
    obXHR.send(null);
}

function ver_perfil_direccion()
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
    } catch (err)
    {
        try
        {
            obXHR = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (err)
        {
            try
            {
                obXHR = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (err)
            {
                obXHR = false;
            }
        }
    }

    var obDiv = document.getElementById("datos_header_usuario");
    // Capa del html sobre la cual imprimiré los datos
    obXHR.open("GET", "Controlador/Cliente/perfil_usuario.php");
    // Abro una conexión con un archivo php
    obXHR.onreadystatechange = function ()// Ejecuto una llamanda al servidor
    {
        if (obXHR.readyState == 4 && obXHR.status == 200)// readyState == 4, siginifa que
                // todo ha salido bien
                {
                    obDiv.innerHTML = obXHR.responseText;
                    // Imprimo en la capa que puse mas arriba, todo lo que el archivo php escribió
                }
    }
    obXHR.send(null);
}

/*
 * Funcion que ingresa un local
 */
function ingresar_usuario_ajax()
{
    // Datos de local
    var user = $('#user').val();
    var password = $('#pass').val();

    // Personales
    var nombre = $('#nombre').val();
    var rut = $('#run').val();
    var apellido_p = $('#apellido_pat').val();
    var apellido_m = $('#apellido_mat').val();
    var email = $('#email').val();
    var telefono = $('#numero').val();
    var codigo = $('#cod').val();
    var sexo = $('#sexo').val();

    // Cumpleaños
    var anio = $('#anhoNac').val();
    var mes = $('#mesNac').val();
    var dia = $('#diaNac').val();

    //Direccion
    var region = $('#region').val();
    var calle = $('#calle').val();
    var provincias = $('#provincias').val();
    var numero_dir = $('#numero_dir').val();
    var comunas = $('#comunas').val();
    var villa = $('#villa').val();
    var sector = $('#sector').val();
    var block = $('#block').val();
    var piso = $('#piso').val();

    //var valido = validador_de_rut(run);

    if (validaRut(rut) == 1)
    {
        var datos = 'user=' + user + '&pass=' + password + '&nombre=' + nombre + '&rut=' + rut + '&apellido_pat=' + apellido_p + '&apellido_mat=' + apellido_m + '&sexo=' + sexo + '&anhoNac=' + anio + '&mesNac=' + mes + '&diaNac=' + dia + '&calle=' + calle + '&provincias=' + provincias + '&numero_dir=' + numero_dir + '&comunas=' + comunas + '&villa=' + villa + '&sector=' + sector + '&block=' + block + '&piso=' + piso + '&cod=' + codigo + '&numero=' + telefono + '&email=' + email + '&run=' + rut;

        $.ajax(
                {
                    type: 'GET',
                    url: 'Controlador/Portal/RegistroEmpresa.php',
                    data: datos,
                    success: function ()
                    {
                        alert("Su cuenta de usuario ha sido creada correctamente, ahora usted puede logearse en el sistema");
                        //cargarLocales();
                    },
                    error: function ()
                    {
                        alet("Ha sucedido un error inesperado");
                    }
                });
    } else
    {
        alert("Rut no valido");
    }

}
;
