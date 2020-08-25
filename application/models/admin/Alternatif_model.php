<?php  

class Alternatif_model extends CI_Model
{
 

  public function getAll()
  { 

    $ambil= $this->db->get('alternatif');
    $dk = $ambil->result_array();
    return $dk;
  }

  function tambah($inputan) 
  {
	  $this->db->insert('alternatif', $inputan);
  }

  function detail_alternatif($id_alternatif)
  {
    $this->db->where('id_alternatif', $id_alternatif);
    $ambil = $this->db->get('alternatif');
    $dm = $ambil->row_array();
    return $dm;
  }

  function update($id_alternatif, $inputan)
  {
    $this->db->where('id_alternatif', $id_alternatif);
    $this->db->update('alternatif', $inputan);
  }

  function delete($id_alternatif)
  {
  	$this->db->where('id_alternatif', $id_alternatif);
    $this->db->delete('alternatif');
  }
}

?>