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
     
      <div class="row">
        <div class="col-md-6 pull-right"></div>
        <div class="col-md-6"></div>
      </div>

    <div class="page-header">
      <h1>Kriteria</h1> <br>
    </div>

   <a class="btn btn-success" href="<?php echo site_url('admin/kriteria/tambah') ?>"><span class="glyphicon glyphicon-plus"></span> Tambah </a>
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
            <a class="btn btn-primary" tittle="ubah" href="<?php echo site_url('admin/kriteria/edit/'.$kriteria['id_kriteria']) ?>"></button>
            <span class="glyphicon glyphicon-edit"></span></a>   
              <a class="btn btn-danger" tittle="hapus" href="<?php echo site_url('admin/kriteria/hapus/'. $kriteria['id_kriteria']) ?>" onclick="return confirm('Apakah Anda Yakin ?')" >
            <span class="glyphicon glyphicon-trash"></span></a>   
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    </div><!-- /.container-fluid -->

    <?php $this->load->view("admin/_partials/footer.php") ?>  <!-- Sticky Footer -->

  </div><!-- /.content-wrapper -->
</div>

  <script>
        function deleteConfirm(url)
        {
          $('#btn-delete').attr('href', url);
          $('#deleteModal').modal();
        }
  </script>




</div><!-- /#wrapper -->
<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>


    
</body>
</html>