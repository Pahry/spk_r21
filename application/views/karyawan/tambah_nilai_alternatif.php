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
 
        <h2>Tambah Nilai Alternatif</h2>
        <form method="post">

            <div class="form-group">
            Alternatif <span class="text-danger">*</span> <br> 
            <select class="form-control" name="id_alternatif">  
                <option>Pilih Alternatif</option>
                <?php foreach ($alternatif as $key => $value): ?>
                  <option value="<?php echo $value['id_alternatif'] ?>"><?php echo $value['nama_alternatif'] ?></option>
                <?php endforeach ?>
            </select>
            </div>

            <div class="form-group">  
            Nilai C1 <span class="text-danger">*</span> 
            <input type="teks" class="form-control" name="nilai_c1" required>
            </div>

            <div class="form-group">  
            Nilai C2<span class="text-danger">*</span> 
            <input type="teks" class="form-control" name="nilai_c2" required>
            </div>

            <div class="form-group">  
            Nilai C3<span class="text-danger">*</span> 
            <input type="teks" class="form-control" name="nilai_c3" required>
            </div>

            <div class="form-group">  
            Nilai C4<span class="text-danger">*</span> 
            <input type="teks" class="form-control" name="nilai_c4" required>
            </div>

            <button href="" type="submit" value="simpan" class="btn btn-success"><span class="glyphicon glyphicon-saved"></span> Simpan</button>
            <a href="<?php echo base_url('karyawan/nilai_alternatif') ?>" type="kembali" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
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