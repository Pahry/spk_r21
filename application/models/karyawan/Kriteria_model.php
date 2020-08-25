<?php  
/**
 * 
 */
class Kriteria_model extends CI_Model
{

	function getAll()
	{
		$ambil=$this->db->get('kriteria');
		$dk=$ambil->result_array();
		return $dk;
	}

	function tambah($inputan)
	{
		$this->db->insert('kriteria', $inputan);
	}

	function detail_kriteria($id_kriteria)
	{
		$this->db->where('id_kriteria', $id_kriteria);
		$ambil = $this->db->get('kriteria');
		$dm = $ambil->row_array();
		return $dm;
	}

	function ubah($inputan, $id_kriteria)
	{
		$this->db->where('id_kriteria', $id_kriteria);
		$this->db->update('kriteria', $inputan);
	}

	function delete($id_kriteria)
	{
		$this->db->where('id_kriteria', $id_kriteria);
		$this->db->delete('kriteria');
	}
	
}
?>