<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller 
{
	public function __construct()
	{
    	parent::__construct();
    	$this->load->model('login_model');
	}

 	public function index()
	{
		$inputan = $this->input->post();
		
		if ($inputan) 
		{
			$hasmin = $this->login_model->cek_user($inputan);
			if ($hasmin == 'super') 
			{
				redirect('admin/overview', 'refresh');
			}
			elseif ($hasmin == 'user') 
			{
				redirect('karyawan/overview', 'refresh');
			}
			else 
			{
				$this->session->set_flashdata('pesan', 'Gagal, Username atau Password Salah');
				redirect('login', 'refresh');
			}
		} 
		
		$this->load->view('login');
	}

	function logout() {
        $id_user = $this->session->userdata('id_user');
        $this->login_model->logout($id_user);
        $this->session->unset_userdata('user');
        redirect('login','refresh');
	}

	function daftar()
	{
		$this->load->view('daftar');
	}

	function tambah()
	{
		$inputan = $this->input->post();

		if ($inputan) 
		{
			$this->login_model->add($inputan);
			redirect('login','refresh');
		}
	}
}
?>
