<?php  
  session_start();
  if(empty($_SESSION['login'])){
    header("location: ../index.php");
  }
  else{
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

  <title>T-Dorm | Telkom University Dormitory</title>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../../css/sweetalert.css">



	<link rel="stylesheet" type="text/css" href="../../css/style-dashboard.css">
	<link rel="shortcut icon" href="../../img/fav.png">


  <script type="text/javascript" src="../../js/sweetalert.min.js"></script>
  
</head>
<body>


<!-- HEADER DAN NAVBAR -->
    <nav>
      <ul>
        <a class="teks" href="index.php"  data-0="line-height:90px;" data-300="line-height:50px;">T-Dorm</a>
        

              <!-- PROFILE -->
        <li class="profile">
           <a href="#" style="color: #d2d6dd;"><p style="font-size: 18px; text-align: center">
             <?php
              if(isset($_SESSION['login'])){
                echo $_SESSION['login'];
              }
             ?>
           </p></a>

            <ul>
              <li><a href="edit=data-admin.php">Profile</a></li>
              <li><a href="#">Settings</a></li>
              <li><a href="logout.php">Log Out</a></li>
            </ul>

        </li>


              <!-- END OF PROFILE -->

        <li style="margin-right: 20px;"><a href="../../ttg.php">Tentang</a></li>
        <li><a href="../../bantuan.php">Bantuan</a></li>
      </ul>
    </nav>
<!-- END OF NAV BAR -->

  <!-- KONTEN -->
    <!-- KONTEN UTAMA -->




  <div style="margin-left: 25%; margin-top: 50px;">
  <h2>Data berhasil dihapus</h2>

   <?php  
	if(isset($_GET['nim'])){

        include('../../koneksi.php');

        $nim = $_GET['nim'];

        $cekData = mysqli_query($connect, "SELECT nama FROM mhs WHERE nim='$nim'") or die(mysqli_error());


        if(mysqli_num_rows($cekData) == 0){
          echo "<script>window.history.back()</script>";
        }
        else{
          $del = mysqli_query($connect, "DELETE FROM mhs WHERE nim='$nim'");

          if($del){
          	echo "<script>swal('Data berhasil dihapus')</script>";
          	echo "<a href='index.php' style='align:center;'>Kembali ke Halaman Utama</a>";
          }
          else{
          	echo "Gagal menghapus data. Silahkan ulangi kembali!";

          	echo "<a href='index.php' style='align:center;'>Kembali ke Halaman Utama</a>";
          }
        }
	}
?>


</body>
</html>

<?php } ?>