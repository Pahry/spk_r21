<?php  

class Nilai_alternatif_model extends CI_Model
{

	function getAll()
	{
		$this->db->join('alternatif', 'nilai_alternatif.id_alternatif = alternatif.id_alternatif', 'left');
		$ambil 	= $this->db->get('nilai_alternatif');
		$dk 	= $ambil -> result_array();
		return $dk;
	}

	function add($inputan)
	{
		$this->db->insert('nilai_alternatif', $inputan);
	}

	function detail_nilai_alternatif($id_nilai_alternatif)
	{
		$this->db->join('alternatif', 'nilai_alternatif.id_alternatif = alternatif.id_alternatif', 'left');
		$this->db->where('nilai_alternatif.id_nilai_alternatif', $id_nilai_alternatif);
		$ambil = $this->db->get('nilai_alternatif');
		$dm = $ambil ->row_array();
		return $dm;
	}

	function ubah($id_nilai_alternatif, $inputan)
	{
		$this->db->where('id_nilai_alternatif', $id_nilai_alternatif);
		$this->db->update('nilai_alternatif', $inputan);
	}
}
?>