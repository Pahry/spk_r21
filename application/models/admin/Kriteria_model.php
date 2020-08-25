<?php  

class Kriteria_model extends CI_Model
{
	public function getAll()
	{
		$ambil = $this->db->get('kriteria');
		$dk = $ambil->result_array();
		return $dk; 
	}

	public function add($inputan)
	{
		$this->db->insert('kriteria', $inputan);
	}

	function ubah($id_kriteria)
	{
		$this->db->where('id_kriteria', $id_kriteria);
		$ambil = $this->db->get('kriteria');
		$dm = $ambil->row_array();
		return $dm;
	}

	function update($id_kriteria, $inputan)
	{
		$this->db->where('id_kriteria', $id_kriteria);
		$this->db->update('kriteria', $inputan);
	}

	function hapus($id_kriteria)
	{
		$this->db->where('id_kriteria', $id_kriteria);
	 	$this->db->delete('kriteria');
	}
}
?>