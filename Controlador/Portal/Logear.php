<?php
	/** Incluyo la clase del modelo la cual esta relacionada con mi controlador **/
    include_once "../../Modelo/BDLogin.php";
    
	/** Rescato datos desde el servidor **/
    $usuario = $_POST[ "username" ];
    $pass    = $_POST[ "password" ];

    try
    {
    	// Genero un objeto de la clase en el modelo
        $LogeaBD = new LogeaBD();
        
        if ( $LogeaBD->logea( $usuario, $pass ) )
        {
        	// Abro sesion y seteo variables
            session_start();
			$LogeaBD->getTipoUser();
            $_SESSION[ "logeado" ]		 	 = true;
			$_SESSION[ "usuario" ] 		 	 = $usuario;
			$_SESSION[ "id_usuario" ]    	 = $LogeaBD->getIdUser();
			$_SESSION[ "tipo" ]	  			 = $LogeaBD->getTipoUser();
			$_SESSION[ "nivel_privilegio" ]  = $LogeaBD->getIDPrivilegio();
			
			//Devuelvo un 1 hacia el ajax indicando que todo salio bien
			if ( ($LogeaBD->getTipoUser()) == "administrador" )
			{
				echo '1'; 
			}
			
			if ( ($LogeaBD->getTipoUser()) == "operario" )
			{
				echo '2';
			}
        }
        else
        {
        	// Caso contrario devuelvo 2
        	echo '3';
        }
    }
    catch ( Excepcion $ex )
    {
        echo '4';
    }
?>

