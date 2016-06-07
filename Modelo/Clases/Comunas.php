<?php
class Comunas
{

	private $id_comunas;
	private $nombre;
	private $id_provincias;
	private $estado;
	private $fecha;
	private $id_usuarios;

	public function Comunas( $id_comunas, $nombre, $id_provincias )
	{
		$this -> id_comunas = $id_comunas;
		$this -> nombre = $nombre;
		$this -> id_provincias = $id_provincias;
	}

	public function getIdComunas( )
	{
		return $this -> id_comunas;
	}

	public function setIdComunas( $id_comunas)
	{
		$this -> id_comunas = $id_comunas;
	}

	public function getNombre( )
	{
		return $this -> nombre;
	}

	public function setNombre( $nombre)
	{
		$this -> nombre = $nombre;
	}

	public function getIdProvincias( )
	{
		return $this -> id_provincias;
	}

	public function setIdProvincias( $id_provincias)
	{
		$this -> id_provincias = $id_provincias;
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