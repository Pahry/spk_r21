<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Crips extends CI_Controller {
  
  public function __construct() 
  {
    parent::__construct();
    $this->load->model('admin/crips_model');
    $this->load->model('admin/Kriteria_model');
    if (!$this->session->userdata('user')) {
      redirect('login','refresh');
    }
  }
 
  public function index() 
  {
    $data['kriteria'] = $this->Kriteria_model->getAll();
    $data["crips"]= $this->crips_model->getAll();
    $this->load->view('admin/crips', $data);
  }

 public function add()
  {
    $data['kriteria'] = $this->Kriteria_model->getAll();
    $this->load->view('admin/tambah_crips', $data);

    $inputan = $this->input->post();

    if($inputan) {
      $this->crips_model->add($inputan);
      redirect('admin/Crips','refresh');
    }
  }

  public function ubah($id_crips)
  {
    $data['crips']    =$this->crips_model->detail_crips($id_crips);
    $data['kriteria'] = $this->Kriteria_model->getAll();

    $this->load->view('admin/edit_crips', $data);

    $inputan = $this->input->post();
    if($inputan)
    {
      $this->crips_model->ubah_crips($inputan, $id_crips);
      redirect('admin/crips','refresh');
    }
  }

  public function hapus($id_crips)
  {
    $this->crips_model->hapus($id_crips);
    redirect('admin/crips','refresh');
  }
}
