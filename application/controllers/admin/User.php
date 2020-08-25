<? 
defined('BASEPATH') OR exit('No direct script allowed');

class User extends Ci_Controller
{
	public function __construct()
	{
		parent::__construct(); //ini untuk pemuatan helper fungsi, librari class dan model. kalau tidak ada pada setiap fungi harus melakukan pemuatan sendiri.
		$this->load->model('admin/user_model');
		if (!$this->session->userdata('user')) {
			redirect('login','refresh');
		}
	}

	function index(){
		$data["user"]=$this->user_model->getAll();
		$this->load->view("admin/user", $data);
	}
 
	function tambah()
	{
		$this->load->view('admin/tambah_user');

		$inputan = $this->input->post();
		if ($inputan) {
			$this->user_model->add($inputan);
			redirect('admin/user','refresh');
		}
	}

	function edit($id_user)
	{
		$data['user'] = $this->user_model->detail_user($id_user);
		$this->load->view('admin/edit_user', $data);

		$inputan = $this->input->post();
		if ($inputan) {
				$this->user_model->update($id_user, $inputan);
				redirect('admin/user','refresh');
			}	
	}

	public function hapus($id_user)
	{
		$this->user_model->delete($id_user);
		redirect('admin/user','refresh');
	}
}
?>