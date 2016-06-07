<?php
class Usuarios
{

	private $id_usuarios;
	private $nombre;
	private $password;
	private $id_TiposUsuarios;
	private $id_personas;
	private $estado;
	private $fecha;
	private $id_usuarios;

	public function Usuarios( $id_usuarios, $nombre, $password, $id_TipoUsuarios, $id_personas, $estado, $fecha, $id_usuarios)
	{
		$this -> id_usuarios = $id_usuarios;
		$this -> nombre = $nombre;
		$this -> password = $password;
		$this -> id_TipoUsuarios = $id_TipoUsuarios;
		$this -> id_personas = $id_personas;
		$this -> estado = $estado;
		$this -> fecha = $fecha;
		$this -> id_usuarios = $id_usuarios;

	}

	public function getIdUsuarios( )
	{
		return $this -> id_usuarios;
	}

	public function setIdUsuarios( $id_usuarios)
	{
		$this -> id_usuarios = $id_usuarios;
	}

	public function getNombre( )
	{
		return $this -> nombre;
	}

	public function setNombre( $nombre)
	{
		$this -> nombre = $nombre;
	}

	public function getPassword( )
	{
		return $this -> password;
	}

	public function setPassword( $password)
	{
		$this -> password = $password;
	}

	public function getIdTipoUsuarios( )
	{
		return $this -> id_TipoUsuarios;
	}

	public function setIdTipoUsuarios( $id_TipoUsuarios)
	{
		$this -> id_TipoUsuarios = $id_TipoUsuarios;
	}

	public function getIdPersonas( )
	{
		return $this -> id_personas;
	}

	public function setIdPersonas( $id_personas)
	{
		$this -> id_personas = $id_personas;
	}

	public function getEstado( )
	{
		return $this -> estado;
	}

	public function setEstado( $estado)
	{
		$this -> estado = $estado;
	}

	public function getFecha( )
	{
		return $this -> fecha;
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