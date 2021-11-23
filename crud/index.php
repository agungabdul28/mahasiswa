<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
	<h1>Data Mahasiswa</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Telpon</th>
			<th>Alamat</th>
			<th colspan="2">Aksi</th>
		</tr>
<?php
include "koneksi.php";

$sql = $pdo->prepare("SELECT * FROM mahasiswa");
$sql->execute();

while ($data = $sql->fetch()) {
	echo "<tr>";
	echo "<td>".$data['nim']."</td>";
	echo "<td>".$data['nama']."</td>";
	echo "<td>".$data['tanggal_lahir']."</td>";
	echo "<td>".$data['jenis_kelamin']."</td>";
	echo "<td>".$data['telpon']."</td>";
	echo "<td>".$data['alamat']."</td>";
	echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
	echo "</tr>";
}
?>
</table>
</body>
</html>