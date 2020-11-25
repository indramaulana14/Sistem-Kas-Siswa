<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('admin/Login_admin/');
		}
	}

	function index(){
		$this->load->view('admin/v_admin');
	}
}