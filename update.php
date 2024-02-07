<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$orang = $_POST['orang'];

$id = $_GET['id'];

// update data ke database
mysqli_query($koneksi,"update reservasi set nama='$nama', email='$email', telepon='$telepon', tanggal='$tanggal', waktu='$waktu', orang='$orang' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:reservasi.php");

?>