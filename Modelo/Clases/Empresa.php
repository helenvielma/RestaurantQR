<?php
class Empresa
{

	private $id_empresa;
	private $nombre;
	private $rut_empresa;
	private $descripcion;
	private $razon_social;
	private $estado;
	private $fecha;
	private $id_usuarios;

	public function Empresa( $id_empresa, $nombre, $rut_empresa, $descripcion, $razon_social )
	{
		$this -> id_empresa = $id_empresa;
		$this -> nombre = $nombre;
		$this -> rut_empresa = $rut_empresa;
		$this -> descripcion = $descripcion;
		$this -> razon_social = $razon_social;
	}

	public function getIdEmpresa( )
	{
		return $this -> id_empresa;
	}

	public function setIdEmpresa( $id_empresa)
	{
		$this -> id_empresa = $id_empresa;
	}

	public function getNombre( )
	{
		return $this -> nombre;
	}

	public function setNombre( $nombre)
	{
		$this -> nombre = $nombre;
	}

	public function getRutEmpresa( )
	{
		return $this -> rut_empresa;
	}

	public function setRutEmpresa( $rut_empresa)
	{
		$this -> rut_empresa = $rut_empresa;
	}

	public function getDescripcion( )
	{
		return $this -> descripcion;
	}

	public function setDescripcion( $descripcion)
	{
		$this -> descripcion = $descripcion;
	}

	public function getRazonSocial( )
	{
		return $this -> razon_social;
	}

	public function setRazonSocial( $razon_social)
	{
		$this -> razon_social = $razon_social;
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