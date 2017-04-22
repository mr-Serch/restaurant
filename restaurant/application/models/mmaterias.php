<?php
/**
*
*/
class Mchef extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	public function getMenu(){
		$this->db->select("idMenu, IFNULL(nombre,' ') nombre, IFNULL(ingredientes,' ') ingredientes, IFNULL(calificacion,'0') calificacion, IFNULL(precio,'0') precio", false);
		$this->db->from('menu');
		//false=para que reconosca los simbolos
		//IFNULL=para convertir a ' ' si trae null
		$r = $this->db->get();
		return $r->result();

	}

	public function saveMenu($param){
		$campos = array(
			'idMenu' 		=> $param['identifcador'],
			'nombre' 		=> $param['nombreMenu'],
			'ingredientes' 	=> $param['ingredientesMenu'],
			'calificacion' 	=> $param['calificacionMenu'],
			'precio' 		=> $param['precioMenu']
			);

		$this->db->insert('menu',$campos);
	}

}
