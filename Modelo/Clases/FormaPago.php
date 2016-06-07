<?php
class FormaPago
{

	private $id_formaPago;
	private $Nombre_FormaPago;
	private $estado;
	private $fecha;
	private $id_usuarios;

	public function __construct ( $id_formaPago, $Nombre_FormaPago )
	{
		$this->id_formaPago	    = $id_formaPago;
		$this->Nombre_FormaPago = $Nombre_FormaPago;
	}
	
	public function getIdFormaPago()
	{
		return $this->id_formaPago;
	}
	
	public function getNombreFormaPago()
	{
		return $this->Nombre_FormaPago;
	}
	
}