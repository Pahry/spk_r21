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

        <h2>Edit Alternatif</h2>
        <form method="post">
        
         <div class="form-group">  
            <label for="kode">Kode <span class="text-danger">*</span> </label>
            <input type="teks" class="form-control" name="kode_alternatif" value="<?php echo $alternatif['kode_alternatif'] ?>" required>
          </div>

		<div class="form-group">  
            <label for="nama">Nama Alternatif <span class="text-danger">*</span> </label>
            <input type="teks" class="form-control" name="nama_alternatif" value="<?php echo $alternatif['nama_alternatif'] ?>" required>
         </div>

          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="teks" class="form-control" name="keterangan" value="<?php echo $alternatif['keterangan'] ?>">
          </div>

          <button type="simpan" class="btn btn-success"><span class="glyphicon glyphicon-saved"></span> Simpan</button>
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


  <?php $this->load->view("admin/_partials/scrolltop.php") ?>
  <?php $this->load->view("admin/_partials/modal.php") ?>
  <?php $this->load->view("admin/_partials/js.php") ?>

</body>
</html>