<?php  

class Login_model  extends CI_Model
{
	public $_table = "user";

	public $id_user;
	public $username;
	public $password;
	public $nama_lengkap;
	public $level;

	function cek_user($inputan)
	{
		$us = $inputan['username'];
		$ps = $inputan['password'];
		

		$this->db->where('username', $us);
		$this->db->where('password', $ps);

		$query = $this->db->get('user');

		$yangcocok = $query->num_rows();
		if ($yangcocok==1) 
		{
			$akun = $query->row_array();
			$this->session->set_userdata('user', $akun);

			if ($query->row('level') == 'admin') 
			{
				return 'super';
			}
			elseif ($query->row('level') == 'karyawan') {
				return 'user';
			}
			else
			{
				return 'gagal';
			}
		}
	}

	function logout($id_user)
	{
		date_default_timezone_set("ASIA/JAKARTA");
        $date = array('last_login' => date('Y-m-d H:i:s'));

        $this->db->set('last_login');
		$this->db->where('id_user', $id_user);
		$this->db->update('user');
	}

	function add($inputan)
	{
		$this->db->insert('user', $inputan);
	}
}
?>