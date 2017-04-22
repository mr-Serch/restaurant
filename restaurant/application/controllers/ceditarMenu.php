<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class CeditarMenu extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('meditarMenu');
	}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('chef/veditarMenu');
		$this->load->view('layout/footer');
	}

	public function guardar(){
		//Menu
		$param['nombre'] = $this->input->post('txtNombre');
		$param['ingredientes'] = $this->input->post('txtIngredientes');
		$param['calificacion'] = $this->input->post('txtCalificacion');
		$param['precio'] = $this->input->post('txtPrecio');
		
		$this->meditarMenu->guardar($param);
	}
	/*
	public function actualizarDatos(){
		$param['nombre'] = $this->input->post('txtNombre');
		$param['appaterno'] = $this->input->post('txtApPaterno');
		$param['apmaterno'] = $this->input->post('txtApMaterno');
		$param['email'] = $this->input->post('txtEmail');
		
		$this->mpersona->actualizarDatos($param);
		
		$this->load->view('persona/vpersona');
	}
	
	
	public function eliminarPersona(){
		$idP = $this->input->post('txtIdPersona');
		$this->musuario->eliminarUsuario($idP); 
		$this->mpersona->eliminarPersona($idP); 
	}
	*/
	
}