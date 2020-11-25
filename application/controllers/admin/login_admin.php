<?php 

class Login_admin extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('admin/m_login_admin');

	}

	function index(){
		$this->load->view('admin/v_login_admin');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login_admin->cek_login("admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect('admin/admin/');

		}else{
			$data['notif'] = 'Kosong';
			$this->load->view('admin/v_login_admin', $data);
		}

	}

	function logout(){
		$this->session->sess_destroy();
		redirect('admin/Login_admin/');
	}
}