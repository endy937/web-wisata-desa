<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$waktu_tgl = $_POST['waktu_tgl'];
$pilih_wisata = $_POST['pilih_wisata'];
$jml_tiket = $_POST['jml_tiket'];

// menginput data ke database
mysqli_query($koneksi,"insert into reservasi values('','$nama','$email','$no_hp','$waktu_tgl','$pilih_wisata','$jml_tiket')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>
