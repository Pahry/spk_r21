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
     
      <div class="row">
        <div class="col-md-6 pull-right"></div>
        <div class="col-md-6"></div>
      </div>

    <div class="page-header">
      <h1>Kriteria</h1> <br>
    </div>

   <a class="btn btn-success" href="<?php echo site_url('karyawan/kriteria/tambah') ?>"><span class="glyphicon glyphicon-plus"></span> Tambah </a>
<!--    <button class="btn btn-primary" onclick="myfunction()"><span class="glyphicon glyphicon-print"></span> Print </button>-->    
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Kriteria</th>
          <th>Atribut</th>
          <th>Bobot</th>
          <th colspan="2">Aksi</th>
        </tr>
      </thead>
      <tbody class="css-serial">
        <?php foreach ($kriteria as $kriteria): ?>
        <tr>
          <td></td>
          <td><?php echo $kriteria['kode_kriteria'] ?></td>
          <td><?php echo $kriteria['nama_kriteria'] ?></td>
          <td><?php echo $kriteria['atribut_kriteria'] ?></td>
          <td><?php echo $kriteria['bobot_kriteria'] ?></td>
          <td>
            <a href="<?php echo site_url('karyawan/kriteria/edit/'.$kriteria['id_kriteria']) ?>" class="btn btn-primary"></button>
            <span class="glyphicon glyphicon-edit"></span></a>   
              <a class="btn btn-danger" href="<?php echo site_url('karyawan/kriteria/hapus/'. $kriteria['id_kriteria']) ?>" onclick ="return confirm ('Apakah Anda Yakin ? ')">
            <span class="glyphicon glyphicon-trash"></span></a>   
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    </div><!-- /.container-fluid -->

    <?php $this->load->view("karyawan/_partials/footer.php") ?>  <!-- Sticky Footer -->

    <script>
      function myfunction(){
        window.print();
      }
    </script>

  </div><!-- /.content-wrapper -->
</div>
 
</div><!-- /#wrapper -->
<?php $this->load->view("karyawan/_partials/scrolltop.php") ?>
<?php $this->load->view("karyawan/_partials/modal.php") ?>
<?php $this->load->view("karyawan/_partials/js.php") ?>


    
</body>
</html>