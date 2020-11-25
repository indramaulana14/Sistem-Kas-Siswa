<?php 

class Walikelas extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('walikelas/Login_walikelas/');
		}
	}

	function index(){
		$this->load->view('walikelas/v_walikelas');
	}
}