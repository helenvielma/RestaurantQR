<?php
class TipoUsuarios
{

	private $id_TipoUsuarios;
	private $nombre;
	private $estado;
	private $fecha;
	private $id_usuarios;

	public function TipoUsuarios( $id_TipoUsuarios, $nombre, $estado, $fecha, $id_usuarios)
	{
		$this -> id_TipoUsuarios = $id_TipoUsuarios;
		$this -> nombre = $nombre;
		$this -> estado = $estado;
		$this -> fecha = $fecha;
		$this -> id_usuarios = $id_usuarios;

	}

	public function getIdTipoUsuarios( )
	{
		return $this -> id_TipoUsuarios;
	}

	public function setIdTipoUsuarios( $id_TipoUsuarios)
	{
		$this -> id_TipoUsuarios = $id_TipoUsuarios;
	}

	public function getNombre( )
	{
		return $this -> nombre;
	}

	public function setNombre( $nombre)
	{
		$this -> nombre = $nombre;
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