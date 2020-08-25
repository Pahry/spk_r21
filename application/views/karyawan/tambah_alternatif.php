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

        <h2>Tambah Alternatif</h2>
        <form method="post">
        
         <div class="form-group">  
            Kode <span class="text-danger">*</span> 
            <input type="teks" class="form-control" name="kode_alternatif" required>
          </div>

		<div class="form-group">  
            Nama Alternatif <span class="text-danger">*</span> 
            <input type="teks" class="form-control" name="nama_alternatif" required>
         </div>

          <div class="form-group">
            Keterangan 
            <input type="teks" class="form-control" name="keterangan">
          </div>

          <button type="submit" value="simpan" class="btn btn-success"><span class="glyphicon glyphicon-saved"></span> Simpan</button>
          <a href="<?php echo base_url('karyawan/alternatif') ?>" type="kembali" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
        </form>

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