<?php
/**
* 
*/
class MeditarMenu extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	public function guardar($param){
		$campos = array(
			'nombre' => $param['nombre'],
			'ingredientes' => $param['ingredientes'],
			'calificacion' => $param['calificacion'],
			'precio' => $param['precio']
		);

		$this->db->insert('menu',$campos);
		
		return $this->db->insert_id();
		
	}
	/*
	public function actualizarDatos($param){
		$campos = array(
			'nombre' => $param['nombre'],
			'appaterno' => $param['appaterno'],
			'apmaterno' => $param['apmaterno'],
			'email' => $param['email']
		);
		
		$this->db->update('persona',$campos);
		$this->db->where('idPersona',$this->session->userdata('s_idPersona'));
		
		return 1;
	}
	
	public function eliminarPersona($idP){
		$campos = array(
			'idPersona' => $idP
		);
		
		$this->db->delete('persona',$campos);
		
	}
	*/
	
}