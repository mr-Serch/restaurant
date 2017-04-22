<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Ccliente extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('mcliente');
	}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('cliente/vcliente');
		$this->load->view('layout/footer');
	}

	public function getMenu(){
		echo json_encode($this->mcliente->getMenu());
	}
	
}