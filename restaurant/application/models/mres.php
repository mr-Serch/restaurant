<?php
/**
* 
*/
class Mres extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

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
}