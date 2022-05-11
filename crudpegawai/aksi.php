<?php 
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
    $db->input($_POST['nama_peg'],$_POST['email_peg'],$_POST['alamat_peg'],$_POST['gol_id']);
    header("location:tampil.php");
 }elseif($aksi == "hapus"){     
    $db->hapus($_GET['id_pegawai']);
    header("location:tampil.php");
 }elseif($aksi == "update"){
    $db->update($_POST['nama_peg'],$_POST['email_peg'],$_POST['alamat_peg']);
    header("location:tampil.php");
 }
?>