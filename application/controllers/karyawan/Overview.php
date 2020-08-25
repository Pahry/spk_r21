<?php  
class Overview extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('karyawan/user_model');
		if (!$this->session->userdata('user')) {
			redirect('login','refresh');
		}
	}

	function index()
	{
		$data['user'] = $this->user_model->getAll();
		$this->load->view('karyawan/overview', $data);
	}
}

?>