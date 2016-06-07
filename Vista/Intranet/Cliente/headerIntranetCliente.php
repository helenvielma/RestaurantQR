<?php
	session_start();
?>

<div id="login_izq">
	<div style="margin-left: 10px;">
		<span>Bienvenido <?php echo $_SESSION[ "usuario" ]; ?></span>
		<br /> 
		<span st>Nivel cliente</span>
		<br /><br />
		<a href="#" onclick="cerrarIntranet();" >Cerrar sesión</a>
	</div>
</div>
<div id="login_der" >
	<img src="img/icons/icon_login.png" id="iconoLogin" />
</div>
