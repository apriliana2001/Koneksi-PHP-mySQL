<?php
error_reporting(0);
include'database.php';
$db= new database();
?>

<?php
$hal = $_GET['hal'];
if (empty($hal)){
?>
<h3>Data</h3>
<a href="tampil.php?hal=input">Input Data</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Golongan</th>
    </tr>
    <?php
    $no=1;
    foreach ($db->tampil_data() as $x) {
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $x['nama_peg']; ?></td>
        <td><?php echo $x['email_peg']; ?></td>
        <td><?php echo $x['alamat_peg']; ?></td>
        <td><?php echo $x['gol_id']; ?></td>
        <td>
            <a href="tampil.php?hal=edit&id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
            <a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>            
        </td>
    </tr>
    <?php 
    }
    ?>
</table>
<?php
}
 else if($hal == "input"){
?>

<h3>Tambah Data </h3>

<form action="proses.php?aksi=tambah" method="post">
    
<table>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="usia"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </tr>
</table>
</form>
<?php
}
 else if($hal == "edit"){
?>

<h3>Tambah Data</h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>  
<table>
    <tr>
        <td>Nama</td>
        <td>
        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
        <input type="text" name="nama" value="<?php echo $d['nama'] ?>">
        </td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </tr>
</table>
<?php
}
?>
</form>
<?php
}
?>