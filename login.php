<?php
  include "koneksi.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>
  <body><center>
    <?php
    	if(isset($_GET['pesan'])){
    		if($_GET['pesan'] == "gagal"){
    			echo "Login gagal! username dan password salah!";
    		}else if($_GET['pesan'] == "logout"){
    			echo "Anda telah berhasil logout";
    		}else if($_GET['pesan'] == "belum_login"){
    			echo "Anda harus login untuk mengakses halaman admin";
    		}
    	}
	?>
    <br><br>
    <center><h1>Login</h1>
    <br>
    <form method="post" action="cek_login.php">
      <table cellpadding=8>
  			<tr>
  				<td>Username</td>
  				<td>:</td>
  				<td><input type="text" name="username" placeholder="Masukkan username"></td>
  			</tr>
  			<tr>
  				<td>Password</td>
  				<td>:</td>
  				<td><input type="password" name="password" placeholder="Masukkan password"></td>
  			</tr>
  			<tr>
  				<td></td>
  				<td></td>
  				<td><input type="submit" name="submit" value="LOGIN" style="padding:10px;"></td>
  			</tr>
		  </table>
    </form>
  </body>
</html>
