<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id_barang = $_POST ['id_barang'];
$nama_barang = $_POST ['nama_barang'];
$jenis_barang = $_POST ['jenis_barang'];
$jumlah = $_POST ['jumlah'];
$kondisi = $_POST ['kondisi'];

//menginput data ke database
mysqli_query($koneksi,"insert into inventaris values ('$id_barang','$nama_barang','$jenis_barang','$jumlah','$kondisi')");

//mengalihkan halaman kembali ke index.php
header("location:index.php");
?>