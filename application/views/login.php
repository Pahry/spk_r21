<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->load->view('admin/_partials/js.php') ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/awal/login.css') ?>">
  <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.css">
</head>
<body>

  <div class="container-fluid">
    
    <div class="col-md-4 offset-md-4" style="padding-top: 50px;">
      <h3 class="text-center">SPK Pemilihan Agen Properti Terbaik</h4>

      <h3 class="text-center">Login</h3>

      <div class="imgcontainer">
        <img src="<?php echo base_url('assets/image/profile.jpg')?>" alt="profile" class="profile">
      </div>

        <form action="<?php echo site_url('login') ?>" method="post" >
          <div class="form-group">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Masukkan Username" name="username" class="form-control" required> 
          </div>
      
          <div class="form-group">
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Masukkan Password" name="password" id="myInput" class="form-control"  required>
            <input type="checkbox" onclick="myFunction()">Lihat Password
          </div>

          <div class="container" style="background-color:#f1f1f1">
          
            <button type="submit" value="login" class="btn btn-success" style="width:100%;">Login</button>
            <span class="psw">Belum punya akun? <a href="<?php echo site_url('login/daftar'); ?>">Daftar disini</a></span>
          
            <?php if ($this->session->flashdata('pesan')): ?>
            
              <div class="alert alert-danger">
              <? echo $this->session->flashdata('pesan'); ?>
              </div>
            
            <?php endif ?>
          </div>
    
      </form>

    </div> <!-- Tutup Col Md 4 Offset -->

  </div> <!-- Tutup Container Fluid -->

</body>
</html>
