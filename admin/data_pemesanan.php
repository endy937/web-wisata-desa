<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Data wisata</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300, ini300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Pariwisata </span>Admin</a>
		<ul class="nav navbar-top-links navbar-right">
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Endyra</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li ><a href="Reservasi.php"><em class="fa fa-dashboard">&nbsp;</em>dashboaard</a></li>
			<li ><a href="data_wisata.php"><em class="fa fa-calendar">&nbsp;</em>Data Wisata</a></li>
			<li class="active"><a href=""><em class="fa fa-bar-chart">&nbsp;</em>Data Pemesan</a></li>
			<li><a href=""><em class="fa fa-bar-chart">&nbsp;</em>Pembayaran</a></li>
			<li><a href="../index.php"><em class="fa fa-power-off">&nbsp;</em>Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Data Pesanan</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Pesanan Tiket Yang masuk</h1>
			</div>
		</div>
        <table width="100%" height="100" class="table">
		<center>
		<tr align="center" style="background: lightblue; font-size: 20px; font-family: sans-serif;">
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>No Hp</th>
			<th>Waktu Tanggal</th>
			<th>pilih wisata</th>
			<th>jumalah tiket</th>
			<th>Aksi</th>
		</tr>
	</center>
		<!-- sytax php -->
		<?php 
		//memanggil ada 3 yaitu include,require,require_once
			include 'koneksi.php';
			$no = 1;
			$query = mysqli_query( $koneksi,'select * from reservasi');// kode menampilkan data *=pilih semua

			//looping atau perulagan
			//fetch = mana datana?
			while($tampil = mysqli_fetch_array($query)) {
			?>
			<tr>
				<td  align="center"><?php echo $no++ ?></td>
				<td><?php echo $tampil['nama'] ?></td>
				<td><?php echo $tampil['email'] ?></td>
				<td><?php echo $tampil['no_hp'] ?></td>
				<td><?php echo $tampil['waktu_tgl'] ?></td>
				<td><?php echo $tampil['pilih_wisata'] ?></td>
				<td><?php echo $tampil['jml_tiket'] ?></td>
				<td>
					<a href="edit.php?id=<?php echo $tampil['id']; ?>">[EDIT]</a>
					<a href="hapus.php?id=<?php echo $tampil['id']; ?>" onclick="return confirm('Yakin dih,,, bade dihapus?')">[HAPUS]</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>
