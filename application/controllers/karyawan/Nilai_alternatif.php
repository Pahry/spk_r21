<?php  
/**
 * 
 */
class Nilai_alternatif extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('karyawan/Nilai_alternatif_model');
		$this->load->model('karyawan/Alternatif_model');
		if (!$this->session->userdata('user')) {
			redirect('login','refresh');
		}
	}

	function index()
	{
		$data['alternatif'] = $this->Alternatif_model->getAll();
		$data['nilai_alternatif'] = $this->Nilai_alternatif_model->getAll();
		$this->load->view('karyawan/nilai_alternatif', $data);
	}

	function tambah()
	{
		$data['alternatif'] = $this->Alternatif_model->getAll();
		$this->load->view('karyawan/tambah_nilai_alternatif', $data);
		
		$inputan = $this->input->post();
		if ($inputan) 
		{
			$this->Nilai_alternatif_model->add($inputan);
			redirect('karyawan/nilai_alternatif','refresh');
		}
	}

	function edit($id_nilai_alternatif)
	{
		$data['alternatif'] = $this->Alternatif_model->getAll();
		$data['nilai_alternatif'] = $this->Nilai_alternatif_model->detail_nilai_alternatif($id_nilai_alternatif);
		$this->load->view('karyawan/edit_nilai_alternatif', $data);

		$inputan = $this->input->post();
		if ($inputan) {
			$this->Nilai_alternatif_model->ubah($id_nilai_alternatif,$inputan);
			redirect('karyawan/nilai_alternatif','refresh');
		}
	}
}
?>