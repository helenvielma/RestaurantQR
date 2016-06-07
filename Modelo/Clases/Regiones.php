<?php
class Regiones
{

	private $id_regiones;
	private $nombre;
	private $estado;
	private $fecha;
	private $id_usuarios;

	public function Regiones( $id_regiones, $nombre, $estado, $fecha, $id_usuarios)
	{
		$this -> id_regiones = $id_regiones;
		$this -> nombre = $nombre;
		$this -> estado = $estado;
		$this -> fecha = $fecha;
		$this -> id_usuarios = $id_usuarios;

	}

	public function getIdRegiones( )
	{
		return $this -> id_regiones;
	}

	public function setIdRegiones( $id_regiones)
	{
		$this -> id_regiones = $id_regiones;
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