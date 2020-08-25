<?php  
	/**
	 * 
	 */
	class Nilai_alternatif_model extends CI_Model
	{
		
		public $_table= "nilai_alternatif";
 
		public $id_nilai_alternatif;
		public $id_alternatif;
		public $nilai_c1;
		public $nilai_c2;
		public $nilai_c3;
		public $nilai_c4;

	
		function getAll()
		{
			$this->db->join('alternatif', 'nilai_alternatif.id_alternatif = alternatif.id_alternatif', 'left');
			$ambil = $this->db->get('nilai_alternatif');
			$dc= $ambil->result_array();
			return $dc;
		}

		function add($inputan)
		{
			$this->db->insert('nilai_alternatif', $inputan);
		}

		function detail_nilai_alternatif($id_nilai_alternatif)
		{
			$this->db->join('alternatif', 'nilai_alternatif.id_alternatif = alternatif.id_alternatif', 'left');
			$this->db->where('nilai_alternatif.id_nilai_alternatif', $id_nilai_alternatif);
			$ambil=$this->db->get('nilai_alternatif');
			$dm = $ambil->row_array(); //row array digunakan untuk menampilkan satu baris array
			return $dm;
		}

		function ubah($inputan, $id_nilai_alternatif)
		{
			$this->db->where('id_nilai_alternatif', $id_nilai_alternatif);
			$this->db->update('nilai_alternatif', $inputan);
		}
	}
?>