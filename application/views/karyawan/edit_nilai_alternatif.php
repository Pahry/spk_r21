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

        <h2>Edit Nilai Alternatif</h2><br>
        <form method="post">

		      <div class="form-group">  
            Alternatif <span class="text-danger"> * </span>
            <select class="form-control" name="id_alternatif"> 
              <?php foreach ($alternatif as $key => $value): ?>
              <option value="<?php echo $value['id_alternatif'] ?>"
              <?php if ($value['id_alternatif'] == $nilai_alternatif['id_alternatif']){
                echo "selected";
              } ?>><?php echo $value['nama_alternatif'] ?>
              </option>
              <?php endforeach ?>
              </select>
         </div>

         <div class="form-group">  
            <label for="c1">Nilai C1 <span class="text-danger">*</span> </label>
            <input type="teks" class="form-control" name="nilai_c1" value="<?echo $nilai_alternatif['nilai_c1']?>" required>
         </div>

         <div class="form-group">  
            <label for="c2">Nilai C2<span class="text-danger">*</span> </label>
            <input type="teks" class="form-control" name="nilai_c2" value="<? echo $nilai_alternatif['nilai_c2'] ?>" required>
         </div>

         <div class="form-group">  
            <label for="c3">Nilai C3<span class="text-danger">*</span> </label>
            <input type="teks" class="form-control" name="nilai_c3"  value="<? echo $nilai_alternatif['nilai_c3'] ?>" required>
         </div>

         <div class="form-group">  
            <label for="c4">Nilai C4<span class="text-danger">*</span> </label>
            <input type="teks" class="form-control" name="nilai_c4" value="<? echo $nilai_alternatif['nilai_c4'] ?>" required>
         </div>

          <button class="btn btn-success"><span class="glyphicon glyphicon-saved"></span> Simpan</button>
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