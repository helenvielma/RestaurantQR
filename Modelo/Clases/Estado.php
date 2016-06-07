<?php
class Estado
{

	private $id_estado;
	private $nombre;
	private $estado;
	private $fecha;
	private $id_usuario;

	public function Estado( $id_estado, $nombre, $estado, $fecha, $id_usuario)
	{
		$this -> id_estado = $id_estado;
		$this -> nombre = $nombre;
		$this -> estado = $estado;
		$this -> fecha = $fecha;
		$this -> id_usuario = $id_usuario;

	}

	public function getIdEstado( )
	{
		return $this -> id_estado;
	}

	public function setIdEstado( $id_estado)
	{
		$this -> id_estado = $id_estado;
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

	public function getIdUsuario( )
	{
		return $this -> id_usuario;
	}

	public function setIdUsuario( $id_usuario)
	{
		$this -> id_usuario = $id_usuario;
	}

}
?>