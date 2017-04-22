<?php
/**
* 
*/
class Mcliente extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	public function getMenu(){
		$this->db->select('idMenu rownum,idMenu,nombre,ingredientes,calificacion,precio');
		$this->db->from('menu');

		$r = $this->db->get();

		return $r->result();
	}
}