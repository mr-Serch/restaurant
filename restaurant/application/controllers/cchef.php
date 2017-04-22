<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Cchef extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('mchef');
	}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('chef/vchef');
		$this->load->view('layout/footer');
	}	
	
	
	public function getMenu(){
		echo json_encode($this->mchef->getMenu());
	}

	public function saveMenu(){
		$param['identifcador'] 		=	$this->input->post('identifcador');
		$param['nombreMenu'] 		=	$this->input->post('nombreMenu');
		$param['ingredientesMenu'] 	=	$this->input->post('ingredientesMenu');
		$param['calificacionMenu'] 	=	$this->input->post('calificacionMenu');
		$param['precioMenu'] 		=	$this->input->post('precioMenu');

		$this->mchef->saveMenu($param);
	}
}