<!DOCTYPE html>
<html>
<head>
	<title>CRUD (Create Read Update Delete</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#8B0000">
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
	<marquee bgcolor="cyan" width="500" height="20"  >Tambah Daftar Inventaris PT. Maju Bersama Makmur || UTS Promnet Achmad Zainurrofiq || 19510016 </marquee>
</center>
</div>
		<center>
			<h2><font color="RED">TAMBAH DATA INVENTARIS</font></h2>
			<br/>
			<h3>TAMBAH DATA</h3>
			<form method="post" action="tambah-proses.php">
				<table>
					<tr>
						<td>ID BARANG</td>
						<td><input type="number" name="id_barang"></td>
					</tr>
					<tr>
						<td>NAMA BARANG</td>
						<td><input type="text" name="nama_barang"></td>
					</tr>
					<tr>
						<td>JENIS BARANG</td>
						<td><input type="text" name="jenis_barang"></td>
					</tr>
					<tr>
						<td>JUMLAH</td>
						<td><input type="number" name="jumlah"></td>
					</tr>
					<tr>
						<td>KONDISI</td>
						<td><input type="text" name="kondisi"></td>
					</tr>
					
					<tr>
						<td></td>
						<td><input type="submit" value="SIMPAN"></td>
					</tr>
				</table>
			</form>
	
</body>
</html>