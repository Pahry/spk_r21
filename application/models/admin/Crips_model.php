<?php  

class Crips_model extends CI_Model
{
	public function getAll()
	{ 
		$this->db->join('kriteria', 'crips.id_kriteria = kriteria.id_kriteria', 'left');
		$ambil = $this->db->get('crips');
		$dc = $ambil->result_array();
		return $dc;
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id_crips" => $id])->row();
	}

	function add($inputan)
  	{
  		$this->db->insert('crips', $inputan);
	}

	function detail_crips($id_crips)
	{
		$this->db->join('kriteria', 'crips.id_kriteria = kriteria.id_kriteria', 'left');
		$this->db->where('crips.id_crips', $id_crips);
		$ambil = $this->db->get('crips');
		$dm = $ambil->row_array();
		return $dm;
	}

	function ubah_crips($inputan, $id_crips)
	{
		$this->db->where('id_crips', $id_crips);
		$this->db->update('crips', $inputan);
	}

	function hapus($id_crips)
	{
		$this->db->where('id_crips', $id_crips);
		$this->db->delete('crips');
	}

}

?>