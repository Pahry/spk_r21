<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('admin/user_model');
		
		if (!$this->session->userdata('user')) 
		{
    		redirect('login','refresh');
    	}
	}

	public function index()
	{
		$data['user'] = $this->user_model->getAll();
		$this->load->view('admin/overview', $data);
	}
}
 