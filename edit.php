<!DOCTYPE html>
<html>
<head>
	<title>CRUD (Create Read Update Delete</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="back1.JPG">
	<header class="header">
	<div class="menu">
	</div>
	<div class="menu">
		<ul>
			<li><a href="index.html">HOME</a></li>
		</ul>
</header>
<div>
	<center>
	<marquee bgcolor="cyan" width="500" height="20"  >Ubah/ Perbaharui Daftar Inventaris PT. Maju Bersama Makmur || UTS Promnet Achmad Zainurrofiq || 19510016 </marquee>
</center>
</div>
<center>
	<h2><font color="RED">UBAH DATA INVENTARIS</font></h2>
	<br/>
	<h3>EDIT DATA</h3>

	<?php

	include 'koneksi.php';
	$id_barang = $_GET ['id'];
	$data = mysqli_query($koneksi,"select * from inventaris where id_barang='$id_barang'");
	while ($d = mysqli_fetch_array($data)){
	?>
	
	<form method="post" action="update.php">
	<table>
		<tr>
			<td>ID BARANG</td>
			<td>
			<input type="hidden" name="id" value="<?php echo $d['id_barang']; ?>">
			<input type="number" name="id_barang" value="<?php echo $d['id_barang']; ?>">
		</td>
		</tr>
		<tr>
			<td>NAMA BARANG</td>
			<td><input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>"></td>
		</tr>
		<tr>
			<td>JENIS BARANG</td>
			<td><input type="text" name="jenis_barang" value="<?php echo $d['jenis_barang']; ?>"></td>
		</tr>
		<tr>
			<td>JUMLAH</td>
			<td><input type="number" name="jumlah" value="<?php echo $d['jumlah']; ?>"></td>
		</tr>
		<tr>
			<td>KONDISI</td>
			<td><input type="text" name="kondisi" value="<?php echo $d['kondisi']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="SIMPAN"><input type="submit" value="KEMBALI"><a href="index.php"></td>
		</tr>
	</table>	
	</form>
	<?php

	}
	?>
</center>
</body>
</html>