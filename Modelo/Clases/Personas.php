<?php
class Personas
{

	private $id_personas;
	private $nombre;
	private $apellido_pat;
	private $apellido_mat;
	private $run;
	private $fecha_nac;
	private $id_usuario;
	private $estado;
	private $fecha;
	private $id_usuarios;

	public function __construct( $id_personas, $nombre, $apellido_pat, $apellido_mat, $fecha_nac, $run )
	{
		$this -> id_personas = $id_personas;
		$this -> nombre = $nombre;
		$this -> apellido_pat = $apellido_pat;
		$this -> apellido_mat = $apellido_mat;
		$this -> run = $run;
		$this -> fecha_nac = $fecha_nac;
	}

	public function getIdPersonas( )
	{
		return $this -> id_personas;
	}

	public function setIdPersonas( $id_personas)
	{
		$this -> id_personas = $id_personas;
	}

	public function getNombre( )
	{
		return $this -> nombre;
	}

	public function setNombre( $nombre)
	{
		$this -> nombre = $nombre;
	}

	public function getApePat ()
	{
		return $this->apellido_pat;	
	}
	
	public function getApeMat()
	{
		return $this->apellido_mat;
	}
	
	public function getRun( )
	{
		return $this -> run;
	}

	public function setRun( $run)
	{
		$this -> run = $run;
	}

	public function getFechaNac( )
	{
		return $this -> fecha_nac;
	}

	public function setFechaNac( $fecha_nac)
	{
		$this -> fecha_nac = $fecha_nac;
	}

	public function getIdUsuario( )
	{
		return $this -> id_usuario;
	}

	public function setIdUsuario( $id_usuario)
	{
		$this -> id_usuario = $id_usuario;
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