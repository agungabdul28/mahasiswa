<?php
include "koneksi.php";

$id = $_GET['id'];

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];

$sql = $pdo->prepare("UPDATE mahasiswa SET nim=:nim, nama=:nama,tanggal_lahir=:tanggal_lahir, jenis_kelamin=:jenis_kelamin, telpon=:telpon, alamat=:alamat WHERE id=:id");
$sql->bindParam(':nim', $nim);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':tanggal_lahir', $tanggal_lahir);
$sql->bindParam(':jenis_kelamin', $jenis_kelamin);
$sql->bindParam(':telpon', $telpon);
$sql->bindParam(':alamat', $alamat);
$sql->bindParam(':id', $id);
$execute = $sql->execute();

if($execute){
	header ("location: index.php");
}else{
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}
?>