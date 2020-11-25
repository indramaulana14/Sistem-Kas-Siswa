<?php 

class Login_bendahara extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('bendahara/m_login_bendahara');

	}

	function index(){
		$this->load->view('bendahara/v_login_bendahara');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login_bendahara->cek_login("bendahara",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect('bendahara/bendahara/');

		}else{
			$data['notif'] = 'Kosong';
			$this->load->view('bendahara/v_login_bendahara', $data);
		}

	}

	function logout(){
		$this->session->sess_destroy();
		redirect('bendahara/Login_bendahara/');
	}
}