<?php  
/**
 * 
 */
class Kriteria extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('karyawan/Kriteria_model');
		if (!$this->session->userdata('user')) {
			redirect('login','refresh');
		}
	}

	function index()
	{
		$data['kriteria'] = $this->Kriteria_model->getAll();
		$this->load->view('karyawan/kriteria', $data);
	}

	function tambah()
	{
		$this->load->view('karyawan/tambah_kriteria');

		$inputan = $this->input->post();
		if ($inputan) {
			$this->Kriteria_model->tambah($inputan);
			redirect('karyawan/kriteria','refresh');
		}
	}

	function edit($id_kriteria)
	{
		$data['kriteria'] = $this->Kriteria_model->detail_kriteria($id_kriteria);
		$this->load->view('karyawan/edit_kriteria', $data);
		$inputan = $this->input->post();

		if ($inputan) {
			$this->Kriteria_model->ubah($inputan,$id_kriteria);
			redirect('karyawan/kriteria','refresh');
		}
	}

	function hapus($id_kriteria)
	{
		$this->Kriteria_model->delete($id_kriteria);
		redirect('karyawan/kriteria','refresh');
	}
}

?>