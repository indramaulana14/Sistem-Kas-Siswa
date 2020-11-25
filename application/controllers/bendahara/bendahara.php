<?php 

class Bendahara extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('bendahara/Login_bendahara/');
		}
	}

	function index(){
		$this->load->view('bendahara/v_bendahara');
	}
}