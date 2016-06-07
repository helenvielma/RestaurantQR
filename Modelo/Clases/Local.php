<?php
class Local
{

	private $id_local;
	private $nombre_local;
	private $urlqr;
	private $id_tipo;
	private $id_direccion;
	private $id_empresa;

	public function Local( $id_local, $nombre_local, $urlqr, $id_tipo, $id_direccion, $id_empresa)
	{
		$this -> id_local = $id_local;
		$this -> nombre_local = $nombre_local;
		$this -> urlqr = $urlqr;
		$this -> id_tipo = $id_tipo;
		$this -> id_direccion = $id_direccion;
		$this -> id_empresa = $id_empresa;

	}

	public function getIdLocal( )
	{
		return $this -> id_local;
	}

	public function setIdLocal( $id_local)
	{
		$this -> id_local = $id_local;
	}

	public function getNombreLocal( )
	{
		return $this -> nombre_local;
	}

	public function setNombreLocal( $nombre_local)
	{
		$this -> nombre_local = $nombre_local;
	}

	public function getUrlqr( )
	{
		return $this -> urlqr;
	}

	public function setUrlqr( $urlqr)
	{
		$this -> urlqr = $urlqr;
	}

	public function getIdTipo( )
	{
		return $this -> id_tipo;
	}

	public function setIdTipo( $id_tipo)
	{
		$this -> id_tipo = $id_tipo;
	}

	public function getIdDireccion( )
	{
		return $this -> id_direccion;
	}

	public function setIdDireccion( $id_direccion)
	{
		$this -> id_direccion = $id_direccion;
	}

	public function getIdEmpresas( )
	{
		return $this -> id_empresa;
	}

	public function setIdEmpresa( $id_empresa)
	{
		$this -> id_empresa = $id_empresa;
	}

}
?>