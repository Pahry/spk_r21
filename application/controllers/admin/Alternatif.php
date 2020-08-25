<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller {
	
	public function __construct() 
	{
    	parent::__construct();
    	$this->load->model('admin/alternatif_model'); 
    	if (!$this->session->userdata('user')) {
    		redirect('login','refresh');
    	}
	} 
 
 	public function index()
	{
	    $data["alternatif"]=$this->alternatif_model->getAll();
	    $this->load->view('admin/alternatif',$data);
	}
 
	public function tambah()
	{
		
		$this->load->view('admin/tambah_alternatif');
		$inputan = $this->input->post();
		if ($inputan) 
		{
			$this->alternatif_model->tambah($inputan);
			redirect('admin/alternatif','refresh');
		}
	}
	
	public function edit($id_alternatif)
	{
		$data['alternatif'] = $this->alternatif_model->detail_alternatif($id_alternatif);
		$this->load->view('admin/edit_alternatif', $data);

		$inputan = $this->input->post();
		if ($inputan) {
			$this->alternatif_model->update($id_alternatif,$inputan);
			redirect('admin/alternatif','refresh');
		}
	}

	public function hapus($id_alternatif)
	{
		$this->alternatif_model->delete($id_alternatif);
		redirect('admin/alternatif','refresh');
	}
}
