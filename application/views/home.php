<!DOCTYPE html>
<html>
<head>
	<title></title>
 	<link rel="stylesheet" type="text/css" href="<? echo base_url('assets/vendor/bootstrap/css/bootstrap.css')?>">
	<script src="<? echo base_url ('assets/vendor/bootstrap/js/bootstrap.js')?>"></script>
	<script src="<? echo base_url ('assets/vendor/bootstrap/jquery/jquery.min.js')?>"></script> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/awal/homee.css') ?>">

<style type="text/css">
	.tengah {
		background-image: url(<? echo base_url('assets/image/home.jpg')?>);
		height: 100vh;
		padding: 0;
	}
</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 tengah" >
				<div style="background: #33ACFF; color: white; height:40px">
				<ul>
					<li><a href="<? echo base_url('home') ?>">Beranda </a></li>
					<li><a href="<? echo base_url('petunjuk') ?>">Petunjuk</a></li>
					<li><a href="<? echo base_url('login')?>">Login</a></li>
					<li><a href="<? echo base_url('login/daftar')?>">Daftar</a></li>
				</ul>
				</div>
			</div>
		</div>
	</div>

<!-- 	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 tengah">
			</div>
		</div>
	</div> -->

	
</body>
</html>