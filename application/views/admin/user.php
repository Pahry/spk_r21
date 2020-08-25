<!DOCTYPE html>
<html>
<head> 
 <?php 	$this->load->view('admin/_partials/head.php') ?>
 </head>
<body>
	<body id="page-top">
		<?$this->load->view('admin/_partials/navbar.php') ?>

			<div id="wrapper">
				<?$this->load->view('admin/_partials/sidebar.php') ?>

				<div id="content-wrapper">
					<div class="container-fluid">
						<div class="page-header"><h1>Data Pengguna</h1><br></div>

							<a href="<?php echo site_url('admin/user/tambah') ?>" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
							<table class="table table-bordered">	
								<thead>	
									<tr>	
										<th>No</th>
										<th>Nama Lengkap</th>
										<th>Username</th>
										<th>Password</th>
										<th>Level</th>
										<th>Aksi</th>
								</tr>
								</thead>

								<tbody class="css-serial">	
									<?php foreach ($user as $key=> $value): ?>
									<tr>	
										<td></td>
										<td><?php echo $value['nama_lengkap'] ?></td>
										<td> <?php echo $value['username'] ?></td>
										<td><?php echo $value['password'] ?></td>
										<td><?php echo $value['level'] ?></td>
										<td>
											 <a class="btn btn-primary" href="<?php echo site_url('admin/user/edit/'.$value['id_user']) ?>" title="Ubah"><span class="glyphicon glyphicon-edit"></span></a>
											 <a class="btn btn-danger" title="Hapus" href="<?php echo site_url('admin/user/hapus/'.$value['id_user']) ?>" onclick="return confirm('Apakah Anda Yakin ?')"><span class="glyphicon glyphicon-trash"></span></a>
										</td>
								</tr>
									<?php endforeach ?>	
								</tbody>
							</table>

					</div> <!-- Container fluid -->

					<?php 	$this->load->view('admin/_partials/footer.php') ?>
				</div><!-- Content Wrapper -->

			</div><!-- /.container-fluid -->
			
			</div><!-- Wrapper -->

			<?php 	$this->load->view('admin/_partials/js.php') ?>
			<?php 	$this->load->view('admin/_partials/modal.php') ?>
			<?php 	$this->load->view('admin/_partials/scrolltop.php') ?>

</body>
</html>