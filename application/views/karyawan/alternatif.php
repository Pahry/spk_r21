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

      <div class="page-header">
        <h1>Alternatif</h1> <br>
      </div>

    <div class="row">
      <div class="col-md-6 pull-right"></div>
      <div class="col-md-6"></div>
    </div>
   <a class="btn btn-success" href="<?php echo site_url('karyawan/alternatif/tambah') ?>"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
<!--    <button class="btn btn-primary" onclick="myfunction()"><span class="glyphicon glyphicon-print"></span> Print</button>-->   
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Keterangan</th>
        <th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody class="css-serial">
      <?php foreach ($alternatif as $key=>$value):?>
      <tr class="<?php echo $value['id_alternatif']?>">
        <td></td>
        <td><?php echo $value['kode_alternatif'] ?></td>
        <td><?php echo $value['nama_alternatif'] ?></td>
        <td><?php echo $value['keterangan'] ?></td>
        <td>
            <a title="Ubah" href="<?php echo base_url('karyawan/alternatif/edit/' . $value['id_alternatif']) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>   
            <a class="btn btn-danger" title="Hapus" href="<?php echo site_url ('karyawan/alternatif/hapus/'.$value['id_alternatif']) ?>" onclick="return confirm('Apakah Anda Yakin ?')"> 
            <span class="glyphicon glyphicon-trash"></span></a> 
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody> 
  </table> 
  
    </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <?php $this->load->view("karyawan/_partials/footer.php") ?>

    <script>
      function myfunction()
      {
        window.print();
      }
    </script>

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("karyawan/_partials/scrolltop.php") ?>
<?php $this->load->view("karyawan/_partials/modal.php") ?>
<?php $this->load->view("karyawan/_partials/js.php") ?>
    
</body>
</html>