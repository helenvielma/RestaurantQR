<?php
class Provincias
{

	private $id_provincias;
	private $nombre;
	private $id_regiones;
	private $estado;
	private $fecha;
	private $id_usuarios;

	public function Provincias( $id_provincias, $nombre, $id_regiones )
	{
		$this -> id_provincias = $id_provincias;
		$this -> nombre = $nombre;
		$this -> id_regiones = $id_regiones;
	}

	public function getIdProvincias( )
	{
		return $this -> id_provincias;
	}

	public function setIdProvincias( $id_provincias)
	{
		$this -> id_provincias = $id_provincias;
	}

	public function getNombre( )
	{
		return $this -> nombre;
	}

	public function setNombre( $nombre)
	{
		$this -> nombre = $nombre;
	}

	public function getIdRegiones( )
	{
		return $this -> id_regiones;
	}

	public function setIdRegiones( $id_regiones)
	{
		$this -> id_regiones = $id_regiones;
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