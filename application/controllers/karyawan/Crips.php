<?php  

class Crips extends CI_Controller
{
	
	function __construct()
	{
			parent::__construct();
			$this->load->model('karyawan/Crips_model');
			$this->load->model('karyawan/Kriteria_model');
			if (!$this->session->userdata('user')) {
				redirect('login','refresh');
			}
	}

	 public function index() 
	  {
	    $data['kriteria'] = $this->Kriteria_model->getAll();
	    $data["crips"]= $this->Crips_model->getAll();
	    $this->load->view('karyawan/crips', $data);
	  }

	function add()
	{
		$data['kriteria'] = $this->Kriteria_model->getAll();
		$this->load->view('karyawan/tambah_crips', $data);

		$inputan = $this->input->post();
		if ($inputan) 
		{
			$this->Crips_model->add($inputan);
			redirect('karyawan/crips','refresh');
		}
	}

	function ubah($id_crips)
	{
		$data['kriteria'] = $this->Kriteria_model->getAll();
		$data['crips'] = $this->Crips_model->detail_crips($id_crips);
		$this->load->view('karyawan/edit_crips', $data);

		$inputan = $this->input->post();
		if ($inputan) {
			$this->Crips_model->update($inputan, $id_crips);
			redirect('karyawan/crips','refresh');
		}
	}

	function hapus($id_crips)
	{
		$this->Crips_model->delete($id_crips);
		redirect('karyawan/crips','refresh');
	}
}
?>