<?php  

class Alternatif extends CI_Controller
{
	function __construct()
	{
    	parent::__construct();
    	$this->load->model('karyawan/alternatif_model');
    	if (!$this->session->userdata('user')) {
    		redirect('login','refresh');
    	}
	}

	function index()
	{
		$data["alternatif"]=$this->alternatif_model->getAll();
		$this->load->view('karyawan/alternatif', $data);
	}

	public function tambah()
	{
		$this->load->view('karyawan/tambah_alternatif');

		$inputan = $this->input->post();
		if ($inputan) {
			$this->alternatif_model->add($inputan);
			redirect('karyawan/alternatif','refresh');
		}
	}
	
	public function edit($id_alternatif)
	{
			$data['alternatif'] = $this->alternatif_model->detail_alternatif($id_alternatif);
			$this->load->view('karyawan/edit_alternatif', $data);

			$inputan = $this->input->post();
			if ($inputan) {
				$this->alternatif_model->ubah($inputan, $id_alternatif);
				redirect('karyawan/alternatif','refresh');
			}
	}

	public function hapus($id_alternatif)
	{
		$this->alternatif_model->delete($id_alternatif);
		redirect('karyawan/alternatif','refresh');
	}
}

?>