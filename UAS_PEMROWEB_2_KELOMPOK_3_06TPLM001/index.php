<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>UAS WEB 2 ALOKASI BANTUAN COVID 19 - KEL.3 - 06TPLM001</title>
	 <link rel="stylesheet" href="assets/css/bootstrap.css"/>
	 <link rel="stylesheet" href="assets/font-awesome/css/all.css"/>
     <script type="text/javascript" src="assets/jquery-3.5.1.min.js"></script>
</head>
<body>
	 <div class="container-fluid">
	 	<div class="row justify-content-center">
            <span id="notifValidasi"></span>

              <?php

              if(isset($_GET['pesan']))
              {
                if($_GET['pesan'] == "gagal")
                {
                  echo '<script type="text/javascript">

                    document.getElementById("notifValidasi").style.background = "maroon";
                    span = document.getElementById("notifValidasi");
                    txt = document.createTextNode("Username Atau Password Yang Anda Masukkan Salah!");
                    span.appendChild(txt);


                    </script>';
                }
                else if($_GET['pesan'] == "logout")
                {
                  echo '<script type="text/javascript">

                    document.getElementById("notifValidasi").style.background = "green";
                    span = document.getElementById("notifValidasi");
                    txt = document.createTextNode("Anda Telah Berhasil Melakukan Log Out, Terimakasih!");
                    span.appendChild(txt);

                    </script>';
                }
                else if($_GET['pesan'] == "belum_login")
                {
                  echo "Silahkan Login Terlebih Dahulu!";
                }
              }
              
              ?>
	 		<div id="bagianLogin" class="col-lg-5">
	 			<table id="tableLogin" class="table table-hover">
                    <form action="validateUser.php" method="POST">
                    <thead>
                        <th id="thUsername"><label for="username"><strong><i class="fas fa-user-circle"></i> Username</strong></label></th>
                        <th><label for="password"><strong>Password <i class="fas fa-key"></i></strong></label></th>
                    </thead>
                    <tbody>
                        <td id="tdUsername"><input type="text" class="form-control" id="username" required="required" name="username"></td>
                        <td id="tdPassword"><input type="password" class="form-control" id="password" required="required" name="password"></td>
                    </tbody>
                </table>
                <button id="lgnBtn" type="submit">Log In</button>
                </form>
	 		</div>
	 	</div>
	 </div>
</body>
</html>