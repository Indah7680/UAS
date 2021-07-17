<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>UAS WEB 2 ALOKASI BANTUAN COVID-19 - KEL.3 - 06TPLM001</title>
	 <link rel="stylesheet" href="assets/css/bootstrap.css"/>
	 <link rel="stylesheet" href="assets/font-awesome/css/all.css"/>
     <script type="text/javascript" src="assets/jquery-3.5.1.min.js"></script>
     <style type="text/css">
      table{
              color: transparent !important;
              background: lightgray;
              text-align: center;
              font-weight: bold;
              margin-top: 10px;
              table-layout: fixed;
                word-break: break-all;
                border: none !important;
            }
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
       a{
                color: transparent;
                text-decoration: none !important;
                border-radius: 50px;
                padding: 5px;
                font-weight: bold;
                font-family: kelvinch;
                height: 20px;
            }
            .container-fluid:hover a{
                transition: 0.5s;
                color: white;
                transition: 0.5s;
                background: slategray;
            }
            a:hover{
                color: slategray !important;
                background: white !important;
                box-shadow: 0px 0px 10px 5px darkgray;
                transition: 0.5s;
            }
     </style>
</head>
<body onload=waktu();>
	 <div class="container-fluid">
	 	<div class="row justify-content-center">
	 		<div id="bagianHeader" class="col-lg-12">
	 			<span id="headerText">Data Alokasi</span>
	 		</div>                                                           <! TIME WIDGET PART >
            <div id="timeWrapper" class="col-lg-12">
                <div id="time"></div>
            </div>
            <div id="bagianTampilPesanan" class="col-lg-12" style="padding:0px;">
                <span id="userInfo"><i class="fas fa-user-circle logouser"></i><?php echo " "; echo $_SESSION['username'];?></span>
                <table id="tblOutputPesanan" class="table table-bordered table-hover">
                    <form action="" method="POST">
                        <thead>
                            <th width="5%">No.</th>
                            <th width="15%">Jenis Alokasi</th>
                            <th width="7%">Jumlah Dana</th>
                            <th>Action</th>
                        </thead>
                        <?php
                        $select = mysqli_query($connect, "SELECT * FROM tbl_alokasi ORDER BY nmrPesanan ASC");
                        while($a = mysqli_fetch_array($select))
                        {?>
                        <tbody>
                            <td><?php echo $a['nmrPesanan']?></td>
                            <td><?php echo $a['jenisAlokasi']?></td>
                            <td><?php echo $a['jumlahDana']?></td>
                            <td>
                                <a id="aDelete" href="DeleteOrderQuery.php?nmrPesanan=<?php echo $a["nmrPesanan"];?>">Hapus <i class="fas fa-eraser"></i></a>
                                <a id="aEdit" href="EditOrderPage.php?nmrPesanan=<?php echo $a["nmrPesanan"];?>">Edit <i class="far fa-edit"></i></a>
                            </td>
                        </tbody>
                        <?php
                        }?>
                    </form>
                </table>
            </div>
            <div id="bagianCetakDokumen">
                <a id="aCetakDokumen" target="_blank" href="PreviewDocument.php">Cetak Laporan <i class="far fa-file-pdf"></i></a>
                <button type="button" onclick="redirectToInputPage()">Input Data Pemesanan Baru <i class="fas fa-plus-circle"></i></button>
                <a href="logout.php" id="logoutButton">Log Out <i class="fas fa-sign-out-alt"></i></a>
            </div>
	 	</div>
	 </div>

	 <script type="text/javascript" src="assets/js/jquery.js"></script>
  	    <script type="text/javascript" src="assets/js/popper.js"></script>
  	    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

  	    <script>

        function redirectToInputPage()
        {
            window.location.href="InputOrderPage.php";
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
  		</script>

</body>
</html>