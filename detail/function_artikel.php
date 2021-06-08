<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_artikel = $_POST['id_artikel'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
 
// menginput data ke database
mysqli_query($con,"insert into artikel values('$id_artikel','$judul','$isi')");
 
// mengalihkan halaman kembali ke index.php
header("location:data_artikel.php");
 
?>