<?php
class Nub
{

	private $id_nub;
	private $id_ingredientes;
	private $id_menu;
	private $estado;
	private $fecha;
	private $id_usuarios;

	public function Nub( $id_nub, $id_ingredientes, $id_menu, $estado, $fecha, $id_usuarios)
	{
		$this -> id_nub = $id_nub;
		$this -> id_ingredientes = $id_ingredientes;
		$this -> id_menu = $id_menu;
		$this -> estado = $estado;
		$this -> fecha = $fecha;
		$this -> id_usuarios = $id_usuarios;

	}

	public function getIdNub( )
	{
		return $this -> id_nub;
	}

	public function setIdNub( $id_nub)
	{
		$this -> id_nub = $id_nub;
	}

	public function getIdIngredientes( )
	{
		return $this -> id_ingredientes;
	}

	public function setIdIngredientes( $id_ingredientes)
	{
		$this -> id_ingredientes = $id_ingredientes;
	}

	public function getIdMenu( )
	{
		return $this -> id_menu;
	}

	public function setIdMenu( $id_menu)
	{
		$this -> id_menu = $id_menu;
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