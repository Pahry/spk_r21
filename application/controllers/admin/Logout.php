<?

class Logout extends CI_controller
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