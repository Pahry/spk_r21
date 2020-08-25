<?

class User_model extends CI_Model
{


	function getAll()
	{
		$ambil = $this->db->get('user');
		$dk = $ambil->result_array();
		return $dk;
	}

	function detail_user($id_user)
	{
		$this->db->where('id_user', $id_user);
		$ambil = $this->db->get('user');
		$dm = $ambil->row_array();
		return $dm;
		
	}


	function add($inputan)
	{
		$this->db->insert('user', $inputan);
	}

	function update( $id_user,$inputan)
	{
		$this->db->where('id_user', $id_user);
		$this->db->update('user', $inputan);
	}

	function delete($id_user)
	{
		$this->db->where('id_user', $id_user);
		$this->db->delete('user');
	}

	
   }
?> 