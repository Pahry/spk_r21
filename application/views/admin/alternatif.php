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

      <div class="page-header">
        <h1>Alternatif</h1> <br>
      </div>

    <div class="row">
      <div class="col-md-6 pull-right"></div>
      <div class="col-md-6"></div>
    </div>
   <a class="btn btn-success" href="<?php echo site_url('admin/alternatif/tambah') ?>"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
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
      <?php foreach ($alternatif as $key => $value):?>
      <tr>
        <td></td>
        <td><?php echo $value['kode_alternatif'] ?></td>
        <td><?php echo $value['nama_alternatif'] ?></td>
        <td><?php echo $value['keterangan'] ?></td>
        <td>
            <a href="<?php echo site_url('admin/alternatif/edit/' . $value['id_alternatif']) ?>" class="btn btn-primary"></button>
            <span class="glyphicon glyphicon-edit"></span></a>   
            <a onclick="deleteConfirm('<?php echo site_url('admin/alternatif/hapus/' . $value['id_alternatif']) ?>')" href="#" data-id="1" id="deleteConfirm" data-toggle="modal" class="btn btn-danger"></button>
            <span class="glyphicon glyphicon-trash"></span></a>   
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
  

    </div>

    </div>
    <!-- /.container-fluid -->

    <script>
        function deleteConfirm(url)
        {
          $('#btn-delete').attr('href', url);
          $('#deleteModal').modal();
        }
      </script>

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