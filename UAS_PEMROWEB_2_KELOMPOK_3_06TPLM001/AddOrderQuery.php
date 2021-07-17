<?php
	include "koneksi.php";
	$jenisAlokasi = $_POST['jenisAlokasi'];
	$jumlahDana = $_POST['jumlahDana'];
	$namaLengkap = $_POST['namaLengkap'];
	$noHP = $_POST['noHP'];
	$email = $_POST['email'];

	if($jenisAlokasi == "")
	{
		header('location:InputOrderPage.php');
	}
	else
	{
		$query = "INSERT INTO tbl_alokasi SET  jenisAlokasi='$jenisAlokasi' , jumlahDana='$jumlahDana', namaLengkap='$namaLengkap' , noHp='$noHP' , email='$email'";
		@$sql .= mysqli_query($connect, "ALTER TABLE tbl_alokasi DROP nmrPesanan");
	    @$sql .= mysqli_query($connect, "ALTER TABLE tbl_alokasi ADD nmrPesanan INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
	    mysqli_query($connect , $query);
	}
    header('location:InputOrderPage.php');
?>