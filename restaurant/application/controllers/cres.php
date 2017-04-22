<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Cres extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('recepcionista/vres');
		$this->load->view('layout/footer');
	}	
	
	public function actualizarDatos(){
		$param['numero'] = $this->input->post('txtNombre');
		$param['cliente'] = $this->input->post('txtApPaterno');
		$param['apmaterno'] = $this->input->post('txtApMaterno');
		$param['email'] = $this->input->post('txtEmail');
		
		$this->mpersona->actualizarDatos($param);
		
		$this->load->view('persona/vpersona');
	}
	
	
}