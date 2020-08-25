<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("admin/_partials/head.php") ?>

</head>
<style>

</style>
<body id="page-top">
  <?php $this->load->view("admin/_partials/navbar.php") ?>
  <div id="wrapper">
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <div id="content-wrapper">
      <div class="container-fluid">

      <h2>Form Tambah User</h2><br>
      <form action="<?php base_url('admin/user/tambah') ?>" method="post" enctype="multipart/form-data">
        
        Daftar Sebagai<span class="text-danger"> *</span>
        <select class="form-control" name="level">
        <option value="karyawan">Karyawan</option>
        <option value="admin">Administrator</option>
        </select><br>
        
        <div class="form-group">  
          Nama Lengkap <span class="text-danger">*</span>
          <input type="teks" class="form-control"  required name="nama_lengkap">
        </div>
        
        <div class="form-group">  
          Username <span class="text-danger">*</span>
          <input type="teks" class="form-control" required name="username">
        </div>
        
        <div class="form-group">
          Password<span class="text-danger">*</span>
          <input type="password" class="form-control" required name="password" id="myInput">
          <input type="checkbox" onclick="myFunction()">Lihat Password>
        </div>

       
        <button class="btn btn-success" type="submit" value="simpan"> <span class="glyphicon glyphicon-saved"></span>  Simpan</button>
        <a href="<?php echo base_url('admin/user/index') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
      </form>

      <div class="card-footer small text-muted">
        *Harus diisi
      </div>

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