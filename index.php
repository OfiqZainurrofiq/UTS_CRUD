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
			<li><a>HOME</a></li>
			<li><a>Achmad Zainurrofiq || 19510016 </a></li>
		</ul>
</header>
<div>
	<center>
	<marquee bgcolor="cyan" width="500" height="20">Daftar Inventaris PT. Maju Bersama Makmur || UTS Promnet Achmad Zainurrofiq || 19510016 </marquee>
	<br>
	<marquee bgcolor="white" width="500" height="20"  >Mohon maaf pak ada keterlambatan pengumpulan dikarenakan seminggu ada pengabdian masyarakat dan 2 hari ini xampp saya agak bermasalah. </marquee>
</center>
</div>
	<center>
		<h2><font color="RED">"DATA INVENTARIS PT. MAJU BERSAMA MAKMUR</font></h2>
		<br/>
		<h4 style="color: red"><a href="tambah.php">TAMBAH DATA INVENTARIS</a></h4>
		<br/>
		<br/>
		<table border="1">
			<tr style="color: red;">
				<th>NO</th>
				<th>ID BARANG</th>
				<th>NAMA BARANG</th>
				<th>JENIS BARANG</th>
				<th>JUMLAH</th>
				<th>KONDISI</th>
				<th>OPSI</th>
			</tr>
			<?php
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from inventaris");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr style="color: white;">
					<td><?php echo $no++; ?></td>
					<td><center><?php echo $d['id_barang']; ?></center></td>
					<td><?php echo $d['nama_barang']; ?></td>
					<td><?php echo $d['jenis_barang']; ?></td>
					<td><center><?php echo $d['jumlah']; ?></center></td>
					<td><?php echo $d['kondisi']; ?></td>
					<td style="color: white;">
						<a href="edit.php?id=<?php echo $d['id_barang']; ?>">EDIT</a> ||
						<a href="hapus.php?id=<?php echo $d['id_barang']; ?>">HAPUS</a>
					</td>

				</tr>
				<?php
			}	
			?>
		</table>
	</center>

</body>
</html>