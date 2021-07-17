<?php
	session_start();

	include "koneksi.php";

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$login = mysqli_query($connect, "SELECT * FROM tbl_login WHERE username='$username' AND password='$password'");

	$cek = mysqli_num_rows($login);
 
	if($cek > 0)
	{
		$_SESSION['status'] ="login";
		$_SESSION['username'] = $username;
		header("location:InputOrderPage.php");
	}
	else
	{
		header("location:index.php?pesan=gagal");
	}
	?>