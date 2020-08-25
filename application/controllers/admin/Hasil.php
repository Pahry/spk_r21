<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/Nilai_alternatif_model');
    $this->load->model('admin/Kriteria_model');
    $this->load->model('admin/Alternatif_model');
    if (!$this->session->userdata('user')) {
    	redirect('login','refresh');
    }
  }

  public function index()
  {
    $nilai_alternatif = $this->Nilai_alternatif_model->getAll();
    $kriteria = $this->Kriteria_model->getAll();
    $alternatif = $this->Alternatif_model->getAll();

    $nilai = array();

    foreach ($nilai_alternatif as $n)
    {
      $nn[0] = floatval($n['nilai_c1']); //nn=array 1 dimensi
      $nn[1] = floatval($n['nilai_c2']);
      $nn[2] = floatval($n['nilai_c3']);
      $nn[3] = floatval($n['nilai_c4']);

      $nilai[] = $nn; // nilai = array 2 dimensi
    }

    $bobot = array();

    foreach ($kriteria as $k)
    {
      $bobot[] = floatval($k['bobot_kriteria']); 
    }

    // Hitung max / min
    $mm = 0; //untuk perbandingan
    $Max = array();
    $Max[] = $mm;
    $Max[] = $mm;
    $Max[] = $mm;
    $Max[] = $mm;

    foreach ($nilai as $n)
    {
      for ($a = 0; $a < count($n); $a++)
      {
        if ($n[$a] > $Max[$a]) //mengambil nilai yang paling besar 
        {
          $Max[$a] = $n[$a];  //$max di swap isinya menjadi nilai yang paling besar
        }
      }
    }

    $normalisasi = array();

    for ($a = 0; $a < count($nilai); $a++)
    {
      for ($b = 0; $b < count($nilai[$a]); $b++)
      {
        $normalisasi[$a][$b] = $nilai[$a][$b] / $Max[$b]; //indeks a ke samping indeks b ke bawah
      }
    }

    $normalisasiWithNama = array(); //untuk menambahkan record dari db

    for ($a = 0; $a < count($normalisasi); $a++)
    {
      for ($b = 0; $b < count($normalisasi[$a]); $b++)
      {
        $normalisasiWithNama[$a][$b] = $normalisasi[$a][$b];
        $normalisasiWithNama[$a]['kode_alternatif'] = $nilai_alternatif[$a]['kode_alternatif']; 
        $normalisasiWithNama[$a]['nama_alternatif'] = $nilai_alternatif[$a]['nama_alternatif'];
      }
    }

    $hasil = array();

    for ($a = 0; $a < count($normalisasi); $a++)
    {
      $h = 0;

      for ($b = 0; $b < count($normalisasi[$a]); $b++)
      {
        $h += $normalisasi[$a][$b] * $bobot[$b]; //penggunaan h+= agar bisa akumulasi tambah
      }

      $hs['nilai'] = $h;
      $hs['kode_alternatif'] = $nilai_alternatif[$a]['kode_alternatif'];
      $hs['nama_alternatif'] = $nilai_alternatif[$a]['nama_alternatif'];
      $hasil[] = $hs;
    }

    $hasilSorted = array();

    while(count($hasil)) 
    {
      $max = -1; //
      $index = -1; //

      for ($a = 0; $a < count($hasil); $a++)
      {
        if($hasil[$a]['nilai'] > $max) 
        {
          $max = $hasil[$a]['nilai']; 
          $index = $a;
        }
      }

      $hasilSorted[] = $hasil[$index]; //mencari index dengan data yang terbesar
      unset($hasil[$index]); //dikosongkan datanya
      $hasil = array_values($hasil); //merefresh index di php
    }

    $data['normalisasi'] = $normalisasiWithNama;
    $data['perangkingan'] = $hasilSorted;
    $this->load->view('admin/hasil', $data);
  }
  

}
