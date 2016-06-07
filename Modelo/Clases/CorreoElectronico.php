<?php
class CorreoElectronico
{
	private $id_correo;
	private $correo;
	private $id_personas;
	private $envio;
	private $id_tipo;
	private $estado;
	private $fecha;
	private $id_usuarios;

	public function CorreoElectronico( $id_correo, $correo, $id_personas, $envio, $id_tipo, $estado, $fecha, $id_usuarios)
	{
		$this -> id_correo = $id_correo;
		$this -> correo = $correo;
		$this -> id_personas = $id_personas;
		$this -> envio = $envio;
		$this -> id_tipo = $id_tipo;
		$this -> estado = $estado;
		$this -> fecha = $fecha;
		$this -> id_usuarios = $id_usuarios;
	}

	public function getIdCorreo( )
	{
		return $this -> id_correo;
	}

	public function setIdCorreo( $id_correo)
	{
		$this -> id_correo = $id_correo;
	}

	public function getCorreo( )
	{
		return $this -> correo;
	}

	public function setCorreo( $correo)
	{
		$this -> correo = $correo;
	}

	public function getIdPersonas( )
	{
		return $this -> id_personas;
	}

	public function setIdPersonas( $id_personas)
	{
		$this -> id_personas = $id_personas;
	}

	public function getEnvio( )
	{
		return $this -> envio;
	}

	public function setEnvio( $envio)
	{
		$this -> envio = $envio;
	}

	public function getIdTipo( )
	{
		return $this -> id_tipo;
	}

	public function setIdTipo( $id_tipo)
	{
		$this -> id_tipo = $id_tipo;
	}

	public function getEstado( )
	{
		return $this -> estado;
	}

	public function setEstado( $estado)
	{
		$this -> estado = $estado;
	}

	public function setFecha( $fecha)
	{
		$this -> fecha = $fecha;
	}

	public function getIdUsuarios( )
	{
		return $this -> id_usuarios;
	}

	public function setIdUsuarios( $id_usuarios)
	{
		$this -> id_usuarios = $id_usuarios;
	}

}
?>