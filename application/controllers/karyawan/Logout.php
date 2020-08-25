<?php 	 

class Logout extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user')) {
			redirect('login','refresh');
		}
	}

	function index() 
	{
			$this->session->unset_userdata('user');
			redirect('login','refresh');
	}
}
?>