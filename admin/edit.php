<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>

	<h2>edit pesanan</h2>
	<br/>
	<a href="reservasi.php">KEMBALI</a>
	<br/>
	<br/>
	<h3> data peasanan</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from reservasi where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php" style=" width: 250px;">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input class=""> type="hidden" name="id" value="<?php echo $d['id']; ?>" >
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>email</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td>telepon</td>
					<td><input type="text" name="telepon" value="<?php echo $d['telepon']; ?>"></td>
				</tr>
				<tr>
					<td>tanggal</td>
					<td><input type="text" name="tanggal" value="<?php echo $d['tanggal']; ?>"></td>
				</tr>
				<tr>
					<td>waktu</td>
					<td><input type="text" name="waktu" value="<?php echo $d['waktu']; ?>"></td>
				</tr>
				<tr>
					<td>orang</td>
					<td><input type="text" name="orang" value="<?php echo $d['orang']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>