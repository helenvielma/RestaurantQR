<?php
class Telefonos
{

	private $id_telefonos;
	private $id_personas;
	private $cod_area;
	private $num_telefono;
	private $id_tipo;
	private $estado;
	private $fecha;
	private $id_usuarios;

	public function Telefonos( $id_telefonos, $id_personas, $cod_area, $num_telefono, $id_tipo, $estado, $fecha, $id_usuarios)
	{
		$this -> id_telefonos = $id_telefonos;
		$this -> id_personas = $id_personas;
		$this -> cod_area = $cod_area;
		$this -> num_telefono = $num_telefono;
		$this -> id_tipo = $id_tipo;
		$this -> estado = $estado;
		$this -> fecha = $fecha;
		$this -> id_usuarios = $id_usuarios;
	}

	public function getIdTelefonos( )
	{
		return $this -> id_telefonos;
	}

	public function setIdTelefonos( $id_telefonos)
	{
		$this -> id_telefonos = $id_telefonos;
	}

	public function getIdPersonas( )
	{
		return $this -> id_personas;
	}

	public function setIdPersonas( $id_personas)
	{
		$this -> id_personas = $id_personas;
	}

	public function getCodArea( )
	{
		return $this -> cod_area;
	}

	public function setCodArea( $cod_area)
	{
		$this -> cod_area = $cod_area;
	}

	public function getNumTelefono( )
	{
		return $this -> num_telefono;
	}

	public function setNumTelefono( $num_telefono)
	{
		$this -> num_telefono = $num_telefono;
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