<h1>Data Tamu</h1>

<p>
	<a href="index.php">Input Tamu</a>
</p>

<?php
	require 'koneksi.php';

	$tampil = mysqli_query ($koneksi, "SELECT * FROM buku_tamu");

	while ($row= $tampil->fetch_assoc()){
		echo "<br".
		"Nama : ". $row["nama"]."<br>".
		"Email : ". $row["email"]."<br>".
		"Isi : ". $row["isi"]."<br>";
	}
?>