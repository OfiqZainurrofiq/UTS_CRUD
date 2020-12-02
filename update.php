<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id_barang = $_POST ['id'];
$nama_barang = $_POST ['nama_barang'];
$jenis_barang = $_POST ['jenis_barang'];
$jumlah = $_POST ['jumlah'];
$kondisi = $_POST ['kondisi'];

//update data ke database
mysqli_query($koneksi,"update inventaris set nama_barang='$nama_barang', jenis_barang ='$jenis_barang', jumlah='$jumlah', 
	kondisi='$kondisi' where id_barang='$id_barang'");

//mengalihkan halaman kembali ke index.php
header("location:index.php");

?>