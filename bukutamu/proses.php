<?php 

require 'koneksi.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['isi'];

$input = mysqli_query($koneksi, "INSERT INTO buku_tamu(nama,email,isi) VALUES ('$nama', '$email','$isi')");
header ('location:datatamu.php');
?>