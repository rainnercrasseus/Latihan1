<?php // filename: form_tambah_kategori.php
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa Kalbis</title>
	<link rel="stylesheet" href=
	<style>
		#tbody{background:#000000;}
		#menu{background:#CCCCFF;}
		#konten{background:#CCCC33;}
		#filter{background:#33FFCC;}
		#search{background:#33FFCC;}
		#footer{background:cyan;}
	</style>
</head>
<body>
<h1>Phone Book</h1>
<div id="menu">
	<ul>
		<li><a href="index.php">Kontak</a></li>
		<li><a href="kategori.php">Kategori</a></li>
	</ul>
</div>
<div id="konten">
	<h2>Tambah Kategori</h2>
	<form action="proses_tambah_kategori.php" method="post">
		Keterangan:
		<input type="text" name="ket" />
		<br />
		<input type="submit" value="Simpan" />
	</form>
</div>
</body>
</html>