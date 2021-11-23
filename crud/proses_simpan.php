<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];

$sql = $pdo->prepare("INSERT INTO mahasiswa(nim,nama,tanggal_lahir,jenis_kelamin,telpon,alamat) VALUES(:nim,:nama,:tanggal_lahir,:jenis_kelamin,:telpon,:alamat)");
$sql->bindParam(':nim', $nim);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':tanggal_lahir', $tanggal_lahir);
$sql->bindParam(':jenis_kelamin', $jenis_kelamin);
$sql->bindParam(':telpon', $telpon);
$sql->bindParam(':alamat', $alamat);
$sql->execute();

if($sql){
	header("location: index.php");
}else{
	echo "Maaf, Terjadi Kesalahan Saat Menyimpan Data ke Database.";
	echo "<br><a herf='form_simpan.php'>Kembali ke Form</a>";
}
?>