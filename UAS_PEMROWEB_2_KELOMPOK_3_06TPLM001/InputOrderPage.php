<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>UAS WEB 2 ALOKASI BANTUAN COVID 19 - KEL.3 - 06TPLM001</title>
	 <link rel="stylesheet" href="assets/css/bootstrap.css"/>
	 <link rel="stylesheet" href="assets/font-awesome/css/all.css"/>
     <script type="text/javascript" src="assets/jquery-3.5.1.min.js"></script>
     <style type="text/css">
      .container-fluid:hover th{
                color: slategray !important;
                transition: 1s;
            }
            .container-fluid:hover td{
                background: slategray;
                transition: 1s;
            }
            .container-fluid:hover input{
                background: white;
                transition: 1s;
                color: slategray;
            }
            .container-fluid:hover select{
                color: slategray;
                transition: 1s;
                background: white !important;
              }
            #tblInputPesanan{

            }
            .container-fluid:hover #tblInputPesanan{
                box-shadow: 0px 0px 10px 10px darkgray;
                transition: 0.5s;
              </style>
</head>
<body onload=waktu();>
	 <div class="container-fluid">
	 	<div class="row justify-content-center">
	 		<div id="bagianHeader" class="col-lg-12">
	 			<span id="headerText">Input Data Alokasi</span>
	 		</div>                                                           <! TIME WIDGET PART >
            <div id="timeWrapper" class="col-lg-12">
                <div id="time"></div>
            </div>
	 		<div id="bagianInputPesanan" class="col-lg-6">
                <span id="userInfo"><i class="fas fa-user-circle logouser"></i><?php echo " "; echo $_SESSION['username'];?></span>
                <table id="tblInputPesanan" class="table table-bordered table-hover">
                    <form action="AddOrderQuery.php" method="POST">
                        <tr>
                            <th>Jenis Alokasi</th>
                            <td>
                            	<select id="jenisAlokasi" name="jenisAlokasi" onchange="clearAndAdd()" required>
                            	<?php
                            	$select = "SELECT * FROM alokasi";
                            	$getData = mysqli_query($connect,$select); /* Mengambil Data Dari Database Menggunakan PHP */
                            	while($a = mysqli_fetch_array($getData))
                            	{?>
                            		<option value="<?php echo $a['jenisAlokasi'];?>"><?php echo $a['jenisAlokasi'];?></option>
                            	<?php
                            	}?>
                            </td>
                            <tr></tr>
                            <th>Jumlah Dana</th>
                            <td>
                            	<input type="text" name="jumlahDana" id="harga" required>
                            </td><tr></tr>
                            <th>Nama Lengkap</th>
                            <td>
                            	<input type="text" name="namaLengkap" id="namaLengkap" required>
                            </td><tr></tr>
                            <th>No HP</th>
                            <td>
                            	<input type="text" name="noHP" id="noHP" required>
                            </td><tr></tr>
                            <th>Email</th>
                            <td>
                            	<input type="text" name="email" id="email" required>
                            </td>
                        </tr>
                    </table>
                    <button type="submit" id="submitPesanan">Simpan Data <i class="fas fa-check-circle"></i></button>
                    <button type="button" id="lihatPesanan" onclick="redirectToShowPage()">Lihat Hasil <i class="fas fa-eye"></i></button>
                    <a href="logout.php" id="logoutButton">Log Out <i class="fas fa-sign-out-alt"></i></a>
                </form>
            </div>
	 	</div>
	 </div>

	 <script type="text/javascript" src="assets/js/jquery.js"></script>
  	    <script type="text/javascript" src="assets/js/popper.js"></script>
  	    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

  	    <script>

        function redirectToShowPage()
        {
            window.location.href="ShowOrderPage.php";
        }

  	    function waktu()      // TimeWidget.js
  	    {
  	    	var hari = "";
  	    	switch(new Date().getDay())
  	    	{
  	    		case 0:
  	    		hari = "Minggu";
  	    		break;
  	    		case 1:
  	    		hari = "Senin";
  	    		break;
  	    		case 2:
  	    		hari = "Selasa";
  	    		break;
  	    		case 3:
  	    		hari = "Rabu";
  	    		break;
  	    		case 4:
  	    		hari = "Kamis";
  	    		break;
  	    		case 5:
  	    		hari = "Jumat";
  	    		break;
  	    		case 6:
  	    		hari = "Sabtu";
  	    		break;
  	    		default:
  	    		break;
  	    	}

  	    	var months = [
  					'Januari',
  					'Februari',
  					'Maret',
  					'April',
  					'Mei',
  					'Juni',
  					'Juli',
  					'Agustus',
  					'September',
  					'Oktober',
  					'November',
  					'Desember'
  					]

  			var waktuSaatIni = new Date();
  			setTimeout("waktu()",1000);
  			document.getElementById("time").innerHTML = "Per "
                              + waktuSaatIni.getDate() + " "
                              + months[waktuSaatIni.getMonth()] + " "
                              + waktuSaatIni.getFullYear() + " " 
                              + waktuSaatIni.getHours() + " : "
                              + waktuSaatIni.getMinutes() + " : "
                              + waktuSaatIni.getSeconds();
  		  }
  		  function setAlokasiDana()
  		  {
  		  	var alokasi = document.getElementById("jenisAlokasi");
  		  	var selectedAlokasi = alokasi.options[alokasi.selectedIndex].value;
  		  	switch(selectedAlokasi)
  		  	{
  		  		case "Alat Pelindung Diri":
	  		  		var select = $("#jenisAlokasi")[0];
  		  			break;
            case "Logistik Mahasiswa":
              var select = $("#jenisAlokasi")[0];
              break;
            case "Bantuan Kuota Mahasiswa":
              var select = $("#jenisAlokasi")[0];
              break;
            case "Hand Sanitizier":
              var select = $("#jenisAlokasi")[0];
              break;
            case "Sembako Masyarakat":
              var select = $("#jenisAlokasi")[0];
              break;

  		  	}
  		  }
  		  function Remove_options()
  		  {
  		  	$('#makanan')
  		  	.empty();
  		  }
  		  function clearAndAdd(){
  		  	Remove_options();
  		  	setAlokasiDana();
  		  }


  		</script>

</body>
</html>