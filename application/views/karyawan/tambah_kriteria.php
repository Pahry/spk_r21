<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("karyawan/_partials/head.php") ?>
</head>
<body id="page-top">
  <?php $this->load->view("karyawan/_partials/navbar.php") ?>
  <div id="wrapper">
    <?php $this->load->view("karyawan/_partials/sidebar.php") ?>
    <div id="content-wrapper">
      <div class="container-fluid">
     
      <h2>Form Tambah Kriteria</h2>
      <form  method="post">
         
        <div class="form-group">  
          Kode <span class="text-danger">*</span>
          <input type="teks" class="form-control" required name="kode_kriteria">
        </div>
        
        <div class="form-group">  
          Nama Kriteria <span class="text-danger">*</span>
          <input type="teks" class="form-control" required name="nama_kriteria">
        </div>
        
        <div class="form-group">
          Bobot <span class="text-danger">*</span>
          <input type="teks" class="form-control" required name="bobot_kriteria">
        </div>
        
        <div class="form-group">
          Atribut <span class="text-danger">*</span>
          <select class="form-control" name="atribut_kriteria" required>
            <option value='benefit'>Benefit</option>
          </select>
        </div>

        <button class="btn btn-success" type="submit" value="simpan"> <span class="glyphicon glyphicon-saved"></span>  Simpan</button>
        <a href="<?php echo base_url('karyawan/kriteria/index') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
      </form>

      <div class="card-footer small text-muted">
        *required fields
      </div>

      </div>
    <!-- /.container-fluid -->
    <!-- Sticky Footer -->
    <?php $this->load->view("karyawan/_partials/footer.php") ?>
    </div>
  <!-- /.content-wrapper -->
  </div>
  <!-- /#wrapper -->

  <?php $this->load->view("karyawan/_partials/scrolltop.php") ?>
  <?php $this->load->view("karyawan/_partials/modal.php") ?>
  <?php $this->load->view("karyawan/_partials/js.php") ?>

</body>
</html>