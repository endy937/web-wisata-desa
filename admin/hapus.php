<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
mysqli_query($koneksi,"delete from reservasi where id='$id'")or die(mysql_error());

// mengalihkan halaman kembali ke index.php
header("location:reservasi.php");

?>