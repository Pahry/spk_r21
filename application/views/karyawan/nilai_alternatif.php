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
        <h1>Nilai Alternatif</h1> <br>
      </div>

    <div class="row">
      <div class="col-md-6 pull-right"></div>
      <div class="col-md-6"></div>
    </div>

   <a class="btn btn-success" href="<?php echo site_url('karyawan/nilai_alternatif/tambah') ?>"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
  <!--  <a class="btn btn-primary" href="<?php echo site_url('karyawan/hasil/hitung') ?>"><span >Hitung Nilai</span></a> -->
   
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama Alternatif</th>
        <th>Nilai C1</th>
        <th>Nilai C2</th>
        <th>Nilai C3</th>
        <th>Nilai C4</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody class="css-serial">
      <? foreach($nilai_alternatif as $key => $value): ?> 
      <tr>
        <td></td>
        <td><?php echo  $value['kode_alternatif']; ?></td>
        <td><?php echo  $value['nama_alternatif'] ?></td>
        <td><?php echo  $value['nilai_c1'] ?></td>
        <td><?php echo  $value['nilai_c2'] ?></td>
        <td><?php echo  $value['nilai_c3'] ?></td>
        <td><?php echo  $value['nilai_c4'] ?></td>
        <td>
          <a title="Ubah" href="<?php echo site_url('karyawan/Nilai_alternatif/edit/'.$value['id_nilai_alternatif']) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
        </td>
      </tr>
    <? endforeach ?>
    </tbody>
  </table>
  

    </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <?php $this->load->view("karyawan/_partials/footer.php") ?>

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("karyawan/_partials/scrolltop.php") ?>
<?php $this->load->view("karyawan/_partials/modal.php") ?>
<?php $this->load->view("karyawan/_partials/js.php") ?>
    
</body>
</html>