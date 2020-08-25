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

    <button class="btn btn-primary" onclick="myfunction()"><span class="glyphicon glyphicon-print"></span> Print</button>



    <br><h4>Normalisasi</h4>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>C1</th>
          <th>C2</th>
          <th>C3</th>
          <th>C4</th>
        </tr>
      </thead>
      <tbody class="css-serial">
      <?php foreach ($normalisasi as $value): ?>
        
        <tr>
          <td></td>
          <td><?php echo $value['kode_alternatif'] ?></td>
          <td><?php echo $value['nama_alternatif'] ?></td>
          <td><?php echo $value[0] ?></td>
          <td><?php echo $value[1] ?></td>
          <td><?php echo $value[2] ?></td>
          <td><?php echo $value[3] ?></td>
        </tr>
      <?php endforeach ?>
      </tbody>
    </table> 

    <br><h4>Perangkingan</h4>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>Nilai</th>
        </tr>
      </thead>
      <tbody class="css-serial">
        <tr>
          <?php foreach ($perangkingan as $value): ?>
          <td></td>
          <td><?php echo $value['kode_alternatif'] ?></td>
          <td><?php echo $value['nama_alternatif'] ?></td>
          <td><?php echo $value['nilai'] ?></td>
        </tr>
          <?php endforeach ?>
      </tbody>
    </table>
      
    </div>

    <script>
      function myfunction(){
        window.print();
      }
    </script>
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