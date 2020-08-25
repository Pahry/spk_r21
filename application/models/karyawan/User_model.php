<?

class User_model extends CI_Model
{


	function getAll()
	{
		$ambil = $this->db->get('user');
		$dk = $ambil->result_array();
		return $dk;
	}
}