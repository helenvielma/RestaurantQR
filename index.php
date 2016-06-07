<?php
include 'Templates/pre_index.html';
session_start();

/*
 *  Esta funcion comprueba si la persona que acaba de cargar la pagina, tenia una sesión abierta anteriormente
 *  volverlo a redirigir al ambiente respectivo en donde él se encontraba (la pagina principal de su nivel de usuario)
 */
if (isset($_SESSION["logeado"])) {
    if ($_SESSION["logeado"] == true) {
        // Ser usuario tipo 4 significa nivel administrador, tipo 5 nivel cliente (definido en BD, tabla usuarios) 
        if ($_SESSION["nivel_privilegio"] == 4) {
            ?>
            <script type="text/javascript">
                //window.onload = intranetAdministrador; // Tambien se podia hacer asi -> IMPORTANTE: No he incluido los paréntesis al final de la función, porque si no, no funcionaría.
                window.onload = function ()
                {
                    javascript: cargarDiv('Vista/Intranet/Administrador/MiCuentaAdmin.php', 'main_contenido');
                    javascript: cargarDiv('Vista/Intranet/Administrador/headerIntranetAdmin.php', 'header_login');
                }
            </script>
            <?php
        }

        if ($_SESSION["nivel_privilegio"] == 5) {
            ?>
            <script type="text/javascript">
                window.onload = function ()
                {

                    javascript: cargarDiv('Vista/Intranet/Cliente/MiCuenta.php', 'main_contenido');
                    javascript: cargarDiv('Vista/Intranet/Cliente/headerIntranetCliente.php', 'header_login');
                }
            </script>
            <?php
        }
    }
}
/* * ****************************** */
?>

<!-- POPUPS -->
<!-- LOGIN -->
<form name="form_login" id="form_login" onsubmit='check_login();
        return false;' >
    <div id="popup_login" style="display: none;">
        <div class="content-popup">
            <div class="close">
                <a href="#" onclick="popup_login_close();" id="close_login"><img src="img/icons/close.png"/></a>
            </div>
            <h1 class="titulo_pop" style="margin-left: 36%;">Bienvenido</h1>
            <fieldset id="inputs">
                <input id="username" name="username" type="text" placeholder="Username" autofocus required>
                <input id="password" name="password" type="password" placeholder="Password" required>
            </fieldset>
            <fieldset id="actions">
                <input type="submit" id="submit" value="Ingresar">
            </fieldset>
            <div class="clError" id="err_login" name="err_login"></div>
        </div>
    </div>
</form>

<!-- Recuperar contraseña -->
<form name="form_recover" id="form_recover">
    <div id="popup_pass" style="display: none;">
        <div class="content-popup" style="min-height: 0px;">
            <div class="close">
                <a href="#" onclick="popup_pass_close();" id="close_login"><img src="img/icons/close.png"/></a>
            </div>
            <h1 class="titulo_pop" style="margin-left: 4%;">Por favor, ingrese el email de la cuenta</h1>
            <fieldset id="inputs">
                <input id="email" type="text" placeholder="Email" autofocus required>
            </fieldset>
            <fieldset id="actions">
                <input type="submit" id="submit" value="Log in">
            </fieldset>
            <div class="clError" id="err_pass" name="err_pass"></div>
        </div>
    </div>
</form>
<!-- FIN POPUPS -->

<div id="wrapper">
    <div id="header">
        <div id="header_banner"></div>

        <!-- LOGIN y Register -->
        <div id="header_login"> </div>
    </div>

    <!-- Menu -->
    <div id="menu">

        <!-- El menu central -->
        <ul id="menu-bar">
            <li>
                <a href="#" onclick="avisoNoImplementado();">Ranking</a>
            </li>
            <li>
                <a href="#">Sobre nosotros</a>
                <ul>
                    <li>
                        <a href="javascript: cargarDiv('Vista/Portal/vision.php','main_contenido')">Visi&oacute;n</a>
                    </li>
                    <li>
                        <a href="javascript: cargarDiv('Vista/Portal/mision.php','main_contenido')">Misi&oacute;n</a>
                    </li>
                    <li>
                        <a href="javascript: cargarDiv('Vista/Portal/servicios.php','main_contenido')">Servicios</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: cargarDiv('Vista/Portal/contacto.php','main_contenido')">Contacto</a>
            </li>
            <li>
                <a href="#" onclick="avisoNoImplementado();">Restaurantes</a>
            </li>
        </ul>
    </div>

    <!-- Lista vertical de la izquierda -->
    <div id="main">
        <div id="main_lista">
            <ul id="sliding-navigation">
                <li class="sliding-element">
                    <h3>Men&uacute;</h3>
                </li>
                <li class="sliding-element">
                    <a href="javascript: cargarDiv('Vista/Portal/inicial.php','main_contenido');">Inicio</a>
                </li>
                <li class="sliding-element">
                    <a href="javascript: cargarDiv('Vista/Portal/qr.php','main_contenido')">QR</a>
                </li>
            </ul>
        </div>
        <div id="main_contenido"></div>
    </div>

    <div id="footer">
        <span class="span_sombra" >Página creada por Helen Vielma - helen.vielma@gmail.com</span>
    </div>
</div>
<?php
include 'Templates/post_index.html';
?>
