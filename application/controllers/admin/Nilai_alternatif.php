<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_alternatif extends CI_Controller {
  
	public function __construct()
	{  
    	parent::__construct();
    	$this->load->model('admin/nilai_alternatif_model');
    	$this->load->model('admin/alternatif_model');
    	if (!$this->session->userdata('user')) {
    		redirect('login','refresh');
    	}
	}

	public function index()
	{
		$data['alternatif'] = $this->alternatif_model->getAll();
		$data['nilai_alternatif']= $this->nilai_alternatif_model->getAll();
    	$this->load->view('admin/nilai_alternatif', $data);
	}

	public function tambah()
	{
		$data["alternatif"] = $this->alternatif_model->getAll();
		$this->load->view('admin/tambah_nilai_alternatif', $data);

		$inputan = $this->input->post();
		if ($inputan) 
		{
			$this->nilai_alternatif_model->add($inputan);
			redirect('admin/nilai_alternatif','refresh');
		}
	}

	public function edit($id_nilai_alternatif)
	{
		$data['nilai_alternatif'] = $this->nilai_alternatif_model->detail_nilai_alternatif($id_nilai_alternatif);
		$data['alternatif'] = $this->alternatif_model->getAll();
		$this->load->view('admin/edit_nilai_alternatif', $data);

		$inputan = $this->input->post();
		if($inputan)
		{
			$this->nilai_alternatif_model->ubah($inputan,$id_nilai_alternatif);
			redirect('admin/nilai_alternatif','refresh');
		}
	}

	public function hapus()
	{
		$this->load->view('');
	}
}
