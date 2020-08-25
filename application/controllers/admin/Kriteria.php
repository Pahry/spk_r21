<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/kriteria_model');
		$this->load->library('form_validation');
		if (!$this->session->userdata('user')) {
			redirect('login','refresh');
		}
	}
	
	public function index()
	{
		$data["kriteria"]= $this->kriteria_model->getAll();
		$this->load->view('admin/kriteria',$data);
	}
	
	public function tambah()
	{

		$this->load->view('admin/tambah_kriteria');
		$inputan = $this->input->post();
		if ($inputan) {
			$this->kriteria_model->add($inputan);
			redirect('admin/kriteria','refresh');
		}
	}

	public function edit($id_kriteria) 
	{
		$data['kriteria'] = $this->kriteria_model->ubah($id_kriteria);
		$this->load->view('admin/edit_kriteria', $data);

		$inputan = $this->input->post();
		if ($inputan) 
		{
			$this->kriteria_model->update($id_kriteria,$inputan);
			redirect('admin/kriteria','refresh');
		}
	}

	public function hapus($id_kriteria)
	{
		$this->kriteria_model->hapus($id_kriteria); 
     	redirect('admin/kriteria','refresh');
	}
}
