<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">
  <?php $this->load->view("admin/_partials/navbar.php") ?>
  <div id="wrapper">
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <div id="content-wrapper">
      <div class="container-fluid">
      <?php //$this->load->view("admin/_partials/breadcrumb.php") ?>

      <h2>Form Edit Kriteria</h2>
      <form  method="post">
        
        <div class="form-group">  
          <label for="email">Kode <span class="text-danger">*</span></label>
          <input type="text" class="form-control"  placeholder="C1" name="kode_kriteria" 
          value="<?php echo $kriteria['kode_kriteria'] ?>">
        </div>
        
        <div class="form-group">  
          <label for="email">Nama Kriteria <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="nama_kriteria" id="nama_kriteria" value="<?php echo $kriteria['nama_kriteria'] ?>" placeholder="Masukkan Kriteria" name="kriteria">
        </div>
        
        <div class="form-group">
          <label for="bobot">Bobot <span class="text-danger">*</span></label>
          <input type="text" class="form-control" value="<?php echo $kriteria['bobot_kriteria'] ?>" placeholder="Masukkan Bobot" name="bobot_kriteria">
        </div>
        
        <div class="form-group">
          <label>Atribut <span class="text-danger">*</span></label>
          <select class="form-control" name="atribut_kriteria" value="<?php echo $kriteria['atribut_kriteria'] ?>">
            <option value='benefit' <? if($kriteria['atribut_kriteria']=="benefit"){echo"selected";}?>>Benefit</option>
            <option value='cost'<? if($kriteria['atribut_kriteria']=="cost"){echo"selected";}?>>Cost</option>                
          </select>
        </div>

        <button class="btn btn-success" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-saved"></span> Simpan</button>
        <a href="<?php echo base_url('admin/kriteria') ?>" type="kembali" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>

      </form>
      </div>
    <!-- /.container-fluid -->
    <!-- Sticky Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>
    </div>
  <!-- /.content-wrapper -->
  </div>
  <!-- /#wrapper -->

  <?php $this->load->view("admin/_partials/scrolltop.php") ?>
  <?php $this->load->view("admin/_partials/modal.php") ?>
  <?php $this->load->view("admin/_partials/js.php") ?>

</body>
</html>