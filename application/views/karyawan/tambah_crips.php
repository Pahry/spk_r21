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

        <h2>Tambah Crips</h2>
        <form method="post">
        
          <div class="form-group">  
          Kriteria <span class="text-danger">*</span><br>
            <select class="form-control" name="id_kriteria">
                <?php foreach ($kriteria as $key => $value): ?>
                  <option value="<?php echo $value['id_kriteria'] ?>"> <?php echo $value['nama_kriteria'] ?> </option>
                <?php endforeach ?>
            </select>
          </div>

          <div class="form-group">  
            Keterangan <span class="text-danger">*</span> 
            <input type="teks" class="form-control"  name="keterangan" required>
          </div>

          <div class="form-group">
            Nilai <span class="text-danger">*</span>
            <input type="teks" class="form-control" name="nilai" required>
          </div>

          <button type="submit" value="simpan" class="btn btn-success"><span class="glyphicon glyphicon-saved"></span> Simpan</button>
          <a href="<?php echo base_url('karyawan/crips') ?>" type="kembali" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
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