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

      <h2>Form Edit User</h2>
      <form method="post">
        <div class="form-group">
          Daftar Sebagai <span class="text text-danger">*</span>
          <select class="form-control" name="level">
            <option value="admin" <?php if ($user['level']=="admin"){echo "selected";}?>>Admin</option>
            <option value="karyawan" <? if($user['level']=="karyawan"){echo "selected";}?>>Karyawan</option>
          </select>
        </div>
        
        <div class="form-group">  
          Nama Lengkap <span class="text-danger">*</span>
          <input type="teks" name="nama_lengkap" class="form-control" value="<?php echo $user['nama_lengkap'] ?>" required>
        </div>
        
        <div class="form-group">  
          Username <span class="text-danger">*</span>
          <input type="teks" class="form-control" name="username" value="<? echo $user['username']?>" required>
        </div>
        
        <div class="form-group">
          Password<span class="text-danger">*</span>
          <input type="teks" class="form-control" name="password" value="<? echo $user['password']?>" required>
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