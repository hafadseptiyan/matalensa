<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
 	public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('madmin');
        $this->load->library('session');
    }

	public function index()
    {    
        $this->load->view('admin/login.php');
    }

    function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->madmin->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect('admin/');
 
		}else{
			echo "<script>alert('Maaf username atau password anda salah');</script>";
			$this->load->view('admin/login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login/'));
	}
 
	
}