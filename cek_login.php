<?php
	session_start();

	include 'koneksi.php';

	$username=$_POST['username'];
	$password=$_POST['password'];

	$q_login=mysqli_query($koneksi, "SELECT *FROM m_user where username='$username' AND password='$password'");

	$cek=mysqli_num_rows($q_login);

	if($cek>0){
		$data = mysqli_fetch_assoc($q_login);

    $_SESSION['id_user']=$data['id_user'];
		$_SESSION['username']=$data['username'];
		$_SESSION['password']=$data['password'];
		$_SESSION['status']="login";

		header("location:crud/index.php");

	}else {
		header("location:login.php?pesan=gagal");
	}

?>
