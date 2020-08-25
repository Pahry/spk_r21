<?php $user=$this->session->userdata('user');  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <? $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">
  <? $this->load->view("admin/_partials/navbar.php") ?>

  <div id="wrapper">
    <? $this->load->view("admin/_partials/sidebar.php") ?>

    <div id="content-wrapper">
      <div class="container-fluid">
      
    <h1>Hai <?php echo $user['username'] ?></h1><br>
      
    <h3> Informasi User</h3>
    <ol>  
        <li>Nama Lengkap : <? echo $user['nama_lengkap']?></li>
        <li>Username : <? echo $user['username']?></li>
        <li>Status: <? echo $user['level']?></li>
    </ol>

      <b>Proses yang Anda harus lakukan</b>
     <ol>
        <li>Buat Kriteria yang akan digunakan</li>
        <li>Masukkan Crips yang akan menjadi nilai kriteria</li>
        <li>Masukkan data Alternatif / Agen properti</li>
        <li>Masukkan nilai Alternatif masing - masing</li>
        <li>Mulai perhitungan dengan metode SAW</li>
        <li>Anda dapat melihat hasil perhitungan di menu hasil</li>
      </ol><br> 

    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <? $this->load->view("admin/_partials/footer.php") ?>

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<? $this->load->view("admin/_partials/scrolltop.php") ?>
<? $this->load->view("admin/_partials/modal.php") ?>
<? $this->load->view("admin/_partials/js.php") ?>

</body>
</html>