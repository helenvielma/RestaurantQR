<?php
class Menu
{
	private $id_plato;
	private $nombre_plato_es;
	private $nombre_plato_en;
	private $precio_plato;

	public function __construct( $id_plato, $nombre_plato_es, $nombre_plato_en, $precio_plato)
	{
		$this -> id_plato = $id_plato;
		$this -> nombre_plato_es = $nombre_plato_es;
		$this -> nombre_plato_en = $nombre_plato_en;
		$this -> precio_plato = $precio_plato;

	}

	public function getIdPlato( )
	{
		return $this -> id_plato;
	}

	public function getNombrePlatoEs( )
	{
		return $this -> nombre_plato_es;
	}

	public function getNombrePlatoEn( )
	{
		return $this -> nombre_plato_en;
	}

	public function getPrecioPlato( )
	{
		return $this -> precio_plato;
	}

}
?>