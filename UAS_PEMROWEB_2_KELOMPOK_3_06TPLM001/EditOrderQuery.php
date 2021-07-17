<?php
	include "koneksi.php";

	@$nmrPesanan = $_POST['nmrPesanan'];
	@$jenisAlkoasi = $_POST['jenisAlokasiBaru'];
	@$harga = $_POST['hargaBaru'];
	@$namaLengkap = $_POST['namaBaru'];
	@$noHP = $_POST['noHPBaru'];
	@$email = $_POST['emailBaru'];

	@$jenisAlokasiLama = $_POST['jenisAlokasiLama'];

	if($jenisRestoran == "--Pilih Jenis Alokasi-- " || $harga == "" || $harga == "0")
	{
		$query = "UPDATE tbl_alokasi SET jenisAlokasi='$jenisAlokasiLama' , harga='$hargaLama' , namaLengkap='$nama' , noHp='$noHP' , email='$email' WHERE nmrPesanan='$nmrPesanan'";
		@$sql .= mysqli_query($connect, "ALTER TABLE tbl_datapesanan DROP nmrPesanan");
		@$sql .= mysqli_query($connect, "ALTER TABLE tbl_datapesanan ADD nmrPesanan INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
		mysqli_query($connect , $query);
	}
	else{
		$query = "UPDATE tbl_alokasi SET jenisAlokasi='$jenisAlokasi' , jumalahDana='$harga' , namaLengkap='$namaLengkap' , noHP='$noHP' , email='$email' WHERE nmrPesanan='$nmrPesanan'";
		@$sql .= mysqli_query($connect, "ALTER TABLE tbl_datapesanan DROP nmrPesanan");
		@$sql .= mysqli_query($connect, "ALTER TABLE tbl_datapesanan ADD nmrPesanan INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
		mysqli_query($connect , $query);
	}
	header('location: ShowOrderPage.php');
?>