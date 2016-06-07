<?php
class Direccion
{

	private $id_direccion;
	private $calle;
	private $numero;
	private $poblacion;
	private $piso;
	private $block;
	private $sector;
	private $id_personas;
	private $id_comunas;
	private $id_tipo;
	private $estado;
	private $fecha;
	private $id_usuarios;

	public function Direccion( $id_direccion, $calle, $numero, $poblacion, $piso, $block, $sector, $id_personas, $id_comunas, $id_tipo, $estado, $fecha, $id_usuarios)
	{
		$this -> id_direccion = $id_direccion;
		$this -> calle = $calle;
		$this -> numero = $numero;
		$this -> poblacion = $poblacion;
		$this -> piso = $piso;
		$this -> block = $block;
		$this -> sector = $sector;
		$this -> id_personas = $id_personas;
		$this -> id_comunas = $id_comunas;
		$this -> id_tipo = $id_tipo;
		$this -> estado = $estado;
		$this -> fecha = $fecha;
		$this -> id_usuarios = $id_usuarios;
	}

	public function getIdDireccion( )
	{
		return $this -> id_direccion;
	}

	public function setIdDireccion( $id_direccion)
	{
		$this -> id_direccion = $id_direccion;
	}

	public function getCalle( )
	{
		return $this -> calle;
	}

	public function setCalle( $calle)
	{
		$this -> calle = $calle;
	}

	public function getNumero( )
	{
		return $this -> numero;
	}

	public function setNumero( $numero)
	{
		$this -> numero = $numero;
	}

	public function getPoblacion( )
	{
		return $this -> poblacion;
	}

	public function setPoblacion( $poblacion)
	{
		$this -> poblacion = $poblacion;
	}

	public function getPiso( )
	{
		return $this -> piso;
	}

	public function setPiso( $piso)
	{
		$this -> piso = $piso;
	}

	public function getBlock( )
	{
		return $this -> block;
	}

	public function setBlock( $block)
	{
		$this -> block = $block;
	}

	public function getSector( )
	{
		return $this -> sector;
	}

	public function setSector( $sector)
	{
		$this -> sector = $sector;
	}

	public function getIdPersonas( )
	{
		return $this -> id_personas;
	}

	public function setIdPersonas( $id_personas)
	{
		$this -> id_personas = $id_personas;
	}

	public function getIdComunas( )
	{
		return $this -> id_comunas;
	}

	public function setIdComunas( $id_comunas)
	{
		$this -> id_comunas = $id_comunas;
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