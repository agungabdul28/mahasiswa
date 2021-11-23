<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>
	<form method="post" action="proses_simpan.php">
		<table cellpadding="8">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
					<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
				</td>
			</tr>
			<tr>
				<td>Telpon</td>
				<td><input type="text" name="telpon"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
		</table>
		<hr>
		<input type="submit" value="Simpan">
		<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>