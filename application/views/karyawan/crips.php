<!DOCTYPE html>   
<html lang="en">
<head>
	<? $this->load->view("karyawan/_partials/head.php") ?>
	<? $this->load->view("karyawan/_partials/js.php") ?>
</head>
<body id="page-top">
	<?php $this->load->view("karyawan/_partials/navbar.php") ?>
	<div id="wrapper">
		<?php $this->load->view("karyawan/_partials/sidebar.php") ?>
		<div id="content-wrapper">
			<div class="container-fluid">
				<div class="page-header">
					<h1>Nilai Crips</h1><br>  
				</div> 

				<form method="post">
					<div class="form-group">
						<select name="kriteria">
							<option value="">Pilih Kriteria</option>
								<?php foreach ($kriteria as $key => $value): ?>
									<option value="<?php echo $value['id_kriteria'] ?>"><?php echo $value['nama_kriteria']; ?></option>
								<?php endforeach ?>
						</select>
						<a type="tambah" class="btn btn-success" href="<?php echo site_url('karyawan/crips/add') ?>"> 
						<span class="glyphicon glyphicon-plus"> Tambah</span></a>							
					</div>
				</form>
				
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Kriteria</th>
							<th>Keterangan</th>
							<th>Nilai</th>
				 			<th colspan="2">Aksi</th>
						</tr>
					</thead>
					<tbody class="css-serial">
						<?php foreach ($crips as $key => $value): ?>
							<tr class="hidden letak <?php echo $value['id_kriteria'] ?>">
								<td></td>
								<td><?php echo $value['nama_kriteria'] ?></td>
								<td><?php echo $value['keterangan'] ?></td>
								<td><?php echo $value['nilai'] ?></td>
								<td>
									<a class="btn btn-primary" title="Ubah" href="<?php echo site_url('karyawan/crips/ubah/'. $value['id_crips']) ?>"><span class="glyphicon glyphicon-edit"></span></a>
									<a class="btn btn-danger" title="Hapus" href="<?php echo site_url('karyawan/crips/hapus/'.$value['id_crips']) ?>" onclick="return confirm('Apakah Anda Yakin ?')"><span class="glyphicon glyphicon-trash"></span></a>
								</td>
							</tr>
							
						<?php endforeach ?>
					</tbody>	
				</table>

			</div>
			<!-- /.container-fluid -->
			<!-- Sticky Footer -->
			<?php $this->load->view("karyawan/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->
	</div>
	<!-- /#wrapper -->

	<script type="text/javascript">
		$(document).ready(function() {
			$("select[name=kriteria]").on("change", function() {
				var kriteria = $(this).val();

				$(".letak:not("+kriteria+")").addClass("hidden");
				$("tr."+kriteria).attr("class", "letak "+kriteria);
			})
		})
	</script>


	<?php $this->load->view("karyawan/_partials/scrolltop.php") ?>
	<?php $this->load->view("karyawan/_partials/modal.php") ?>


</body>
</html>