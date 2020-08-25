<!DOCTYPE html>
<html>
<head>
  <title></title>
 <?php $this->load->view('admin/_partials/js.php') ?>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/awal/daftar.css') ?>">
</head>
<body>
<form action="<?php echo site_url('login/tambah') ?>" method="post">
  <div class="container">
    <h1>Form Daftar</h1>
    <hr>

    <label> <b> Daftar Sebagai </b></label>
    <select name="level">
    <option value="karyawan">Karyawan</option>
    </select><br><br>

    <label for="name_lengkap"><b>Nama Lengkap</b></label>
    <input type="text" name="nama_lengkap" required>

    <label><b>Username</b></label>
    <input type="text" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" name="password" id="myInput" required>
    <input type="checkbox" onclick="myFunction()">Lihat Password
        
    <hr>

    <button type="submit" class="registerbtn">Daftar</button>
  </div>

  <div class="container signin">
    <p>Sudah punya akun ? <a href="<?echo base_url('login')?>">Login di sini</a>.</p>
  </div>
</form>
</body>
</html>