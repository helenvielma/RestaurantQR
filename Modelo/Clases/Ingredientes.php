<?php
class Ingredientes
{

	private $id_ingredientes;
	private $nombre;
	private $estado;
	private $fecha;
	private $id_usuarios;

	public function Ingredientes( $id_ingredientes, $nombre, $estado, $fecha, $id_usuarios)
	{
		$this -> id_ingredientes = $id_ingredientes;
		$this -> nombre = $nombre;
		$this -> estado = $estado;
		$this -> fecha = $fecha;
		$this -> id_usuarios = $id_usuarios;

	}

	public function getIdIngredientes( )
	{
		return $this -> id_ingredientes;
	}

	public function setIdIngredientes( $id_ingredientes)
	{
		$this -> id_ingredientes = $id_ingredientes;
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